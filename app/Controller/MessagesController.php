<?php
class MessagesController extends AppController {

        public $uses = array('User','Message');
    
        public $paginate = array(
                                'limit' => 25,
                                'conditions' => array('to_id' => '17'),
                                'order' => array('Message.content' => 'asc' ) 
        );
    
        public function send() {
            $this->render(false);
            if ($this->request->is('post')) {
                $this->Message->create();
		if ($this->Message->save($this->request->data)) {
                        $this->Session->setFlash('<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> Message successfully sent. </div>');
                        if($this->Session->read('page')=='m_d'){
                            $this->redirect(array('action'=>'message_detail', $this->data['Message']['to_id']));
                        }else {
                        $this->redirect(array('controller' => 'messages', 'action' => 'index'));
                        }
		} else {
			$this->Session->setFlash('message_not','<div class="alert alert-success">Message not sent.</div>');
		}	
            } 
	}//end of send function 
        
           
       public function index(){
            $this->Session->write('page','m_l');
            $this->paginate = array (
                                'Message' => array (
                                            'limit' => 20,
                                            'conditions' => array('to_id' => $this->Session->read('Auth.User.id')),
                                            'fields' => '*',
                                            'joins' => array (
                                                            array (
                                                                    'type' => 'INNER',
                                                                    'table' => 'users',
                                                                    'alias' => 'User',
                                                                    'conditions' => 'User.id = Message.from_id' 
                                                                   ) 
                                            ),
                                            'order' => array('Message.content' => 'asc' )
                                ), 
                                "User" => array() 
            ); 
            $messages = $this->paginate('Message');
            $this->set(compact('messages'));
        }//end of index function
        
        public function message_detail($from_id = null){
            $this->Session->write('page','m_d');
            $this->Session->write('from_id',$from_id);
            $this->paginate = array(
                                    'Message' => array (
                                                        'limit' => 20,
                                                        'conditions' => array(
                                                                                'to_id' => array($this->Session->read('Auth.User.id'),$from_id),
                                                                                'from_id' => array ($from_id, $this->Session->read('Auth.User.id'))
                                                        ),
                                                        'fields' => '*',
                                                        'joins' => array (
                                                                          array (
                                                                                'type' => 'INNER',
                                                                                'table' => 'users',
                                                                                'alias' => 'User',
                                                                                'conditions' => 'User.id = Message.from_id',

                                                                         ) 
                                                        ),
                                                        'order' => array('Message.id' => 'desc' )
                                    ), 
                                    "User" => array()
            );
            $messages = $this->paginate('Message');
            $this->set(compact('messages'));
        } //end of message detail function 
        
        public function createMessage(){
            $users = $this->User->find('all');
            $this->set('users', $users);
        } //end of function
        
        public function delete_message(){
            if ($this->request->is('post')) {
                $this->Message->delete($this->request->data('Message.id'));
                $this->Session->setFlash('<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> Message successfully deleted. </div>');
                if($this->Session->read('page')=='m_d'){
                    $this->redirect(array('action'=>'message_detail', $this->data['Message']['redirect']));
                }else {
                    $this->redirect(array('controller' => 'messages', 'action' => 'index'));
                }
                //$this->redirect(array('action'=>'index','controller' => 'messages' ));
            }
        }
        
        public function updateMessage(){
            if(!empty($this->request->data)){
                $userData   =   array(
                    'id' => $this->data['Message']['id'],
                    'content'   =>  $this->data['Message']['content']
                );
                $this->Message->save($userData);
                $this->Session->setFlash('<div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span> Message successfully updated. </div>');
                $this->redirect(array('controller' => 'messages', 'action'=>'message_detail', $this->data['Message']['redirect']));
            }
        }
        

}