<?php
App::uses('AuthComponent', 'Controller/Component');

class Message extends AppModel {
    
    public $validate = array(
        'recipient' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Sender must required',
		'allowEmpty' => false
            ),
        ),
        'content' => array(
            'nonEmpty' => array(
                'rule' => array('notEmpty'),
                'message' => 'Sender must required',
		'allowEmpty' => false
            )
        )	
    );
}
?>