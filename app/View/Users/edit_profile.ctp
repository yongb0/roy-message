<script type="text/javascript">
            SyntaxHighlighter.defaults['toolbar'] = false;
            SyntaxHighlighter.all();
</script>

<nav class="navbar navbar-inverse navbar-fixed-top" >
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#" style="color:white;">Message Board D </a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li style="color:white;"><?php echo $this->Html->link( "Messsage List",   array('controller' => 'messages', 'action'=>'index') ); ?></li>
                    <li style="color:white;"><?php echo $this->Html->link("My Profile", array('controller' => 'users', 'action' => 'editProfile')) ?></li>
                    
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Welcome <i class="glyphicon glyphicon-user"></i> <?php echo ucwords(strtolower($this->Session->read('name'))); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link( "Logout",   array('controller' => 'users', 'action'=>'logout') ); ?></li>
                            <li class="divider"></li>
                            <li><?php echo $this->Html->link("Settings", array('controller' => 'users', 'action' => 'editProfile')) ?></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>

        


<div class="container">
    <div class="breadcrumb" style="margin-top:50px;">
        <h2>My Profile</h2>
    </div>
    
    <div class="breadcrumb">
        <?php echo $this->Session->flash();?>
        <div class="row">
            <?php echo $this->Form->create('User', array('controller' => 'users', 'action' => 'editProfileExec', 'type' => 'file')); ?>
            <?php foreach ($users as $user): ?>
            <div class="col-sm-5">
                
                <?php if($users['User']['image']!='') { ?>
                    <img src="/message_boardss/img/users/<?php echo $users['User']['image'];?>" class="img-responsive"/>
                <?php }else{ ?>
                    
                    <img src="/message_boardss/img/user.jpg" class="img-responsive"/>
                    
                <?php } ?>
                    <?php echo $this->Form->input('image', array('type' => 'file', 'class' => 'form-control', 'value' => '')); ?> 
            </div>
            <div class="col-sm-7">
                
                <?php echo $this->Form->input('name', array('class' => 'form-control', 'value' => $users['User']['name'])); ?>
                
                <?php echo $this->Form->input('gender',array('div' => 'input', 'type' => 'radio', 'options' => array('1'=>'Male','2'=>'Female'), 'default' => $users['User']['gender'])); ?>
                <?php echo $this->Form->input('',array(
                    'label' => 'Birthdate',
                    'id'=>'datepicker-example1',
                    'class' => 'form-control',
                    'value' => $users['User']['birthdate'],
                    'name' => 'data[User][birthdate]')); ?>
                <?php echo $this->Form->input('hubby', array(
                    'class' => 'form-control',
                    'type'  => 'textarea',
                    'value' =>  $users['User']['hubby'],
                    'escape'=>  false
                ));?>
                
                <?php echo $this->Form->submit('Update', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to update') ); ?>  
                
                
                <?php endforeach; ?>
		<?php unset($user); ?>
         </div>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div><?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


?>








