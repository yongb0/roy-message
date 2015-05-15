<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {
    

	var $name = 'Users';
		var $helpers = array('Ajax', 'Javascript');
		var $components = array('RequestHandler');    

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('login','register','success'); 
    }// end of function
    
    
    public function login() {
            if($this->Session->check('Auth.User')){
			$this->redirect(array('controller' => 'users', 'action' => 'index'));		
		}
            if ($this->request->is('post')) {
		if ($this->Auth->login()) {
                        $this->Session->write('name', $this->Session->read('Auth.User.name'));
			$this->redirect(array('controller' => 'messages', 'action' => 'index'));
		} else {
			$this->Session->setFlash(__('<div class="alert alert-danger"><span class="glyphicon glyphicon-remove"></span> Invalid username or password</div>'));
                    }
		} 
                
	}//end of function
   

    function search(){
        if ( $this->RequestHandler->isAjax() ) {
            Configure::write ( 'debug', 0 );
            $this->autoRender=false;
            $users=$this->User->find('all',array('conditions'=>array('User.name LIKE'=>'%'.$_GET['term'].'%')));
                $i=0;
                foreach($users as $user){
                    $response[$i]['value']=$user['User']['name'];
                    $response[$i]['label']=$user['User']['name'];
                $i++;
                }
            echo json_encode($response);
        }else{
            if (!empty($this->data)) {
                $this->set('users',$this->paginate(array('User.name LIKE'=>'%'.$this->data['User']['name'].'%')));
            }
        }
    }    
	//==========================================================================

        
    public function logout() {
	$this->redirect($this->Auth->logout());
	}//end of function 
    
    public function editProfile(){
        
        $users = $this->User->findById($this->Session->read('Auth.User.id'));
        $this->set('users', $users);
    }//end of function 
    
    public function editProfileExec(){
        $folderToSaveFiles = WWW_ROOT . 'img/users/' ;
            if(!empty($this->request->data))
            {
                //Check if image has been uploaded
                if(!empty($this->request->data['User']['image']))
                {
                        $file = $this->request->data['User']['image']; //put the data into a var for easy use

                        //debug( $file );

                        $ext = substr(strtolower(strrchr($file['name'], '.')), 1); //get the extension
                        $arr_ext = array('jpg', 'jpeg', 'gif'); //set allowed extensions
                        
                            $newFilename = $file['name']; // edit/add here as you like your new filename to be.
                            $result = move_uploaded_file( $file['tmp_name'], $folderToSaveFiles . $newFilename );
                            if(!empty($file['name'])){
                                $userData = array(
                                    'id' => $this->Session->read('Auth.User.id'),
                                    'name'  =>  $this->data['User']['name'],
                                    'image' =>  $newFilename,
                                    'gender'    =>  $this->data['User']['gender'],
                                    'birthdate' =>  $this->data['User']['birthdate'],
                                    'hubby' =>  $this->data['User']['hubby'],
                                ); 
                            }else{
                                $userData = array(
                                    'id' => $this->Session->read('Auth.User.id'),
                                    'name'  =>  $this->data['User']['name'],
                                    'gender'    =>  $this->data['User']['gender'],
                                    'birthdate' =>  $this->data['User']['birthdate'],
                                    'hubby' =>  $this->data['User']['hubby'],
                                );
                            }
                          $this->User->save($userData);
                          $this->Session->write('name',$this->data['User']['name']);
                          $this->Session->setFlash('<div class="alert alert-success"><i class="glyphicon glyphicon-ok"></i> Profile updated successfully.</div>');
                }
            }
            $this->redirect(array('action'=>'editProfile')); 
    }
    
    
    
    public function register() {
        if ($this->request->is('post')) {
                $this->User->create();
		if ($this->User->save($this->request->data)) {
                        $this->Session->write('success','succ');
			$this->redirect(array('action' => 'success'));
		} else {
			$this->Session->setFlash(__('The user could not be created. Please, try again.'));
		}	
        }
    }//end of function
    
    public function success(){
        if($this->Session->read('success')!=''){
            $this->Session->delete('success');
        }else{
            $this->redirect(array('action' => 'login'));
        }
    }//end of function
    
    public function index() {
	
    }//end of function

}