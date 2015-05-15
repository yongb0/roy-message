

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
           <h2> 
                <span class="glyphicon glyphicon-pencil"></span> 
                 Create Message
            </h2>
			



 
        <div class="breadcrumb">
            <?php echo $this->Form->create('Message',array('controller'=>'messages', 'action'=>'send')); ?>
            <?php echo $this->Form->hidden('from', array('class' => 'form-control', 'name' => 'data[Message][from_id]', 'value' => $this->Session->read('Auth.User.id'))); ?>


         
            <div class="form-group">
                <label for="MessageToId">Recipient</label>
                <select name="data[Message][to_id]" class="form-control" id="MessageToId">
                    <option value="">Select recipient</option>
                    <?php foreach ($users as $user) : ?>
                    <option value="<?php echo  $user['User']['id'] ?>"><?php echo ucwords(strtolower($user['User']['name'])); ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            

    <?php
       // echo $this->Form->input('name',array('type'=>'text','id'=>'name','label'=>'Recipient', 'class' => 'form-control'));
    ?>
            <div class="form-group">
				<?php echo $this->Form->textarea('content',array('class' => 'form-control', 'rows' => '8', 'placeholder' => 'Type your message here.')); ?>
            </div>
            <br>
				<?php echo $this->Form->submit('Send Message', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to send your message') ); ?>
            
            <?php echo $this->Form->end(); ?>
        </div>




     </div>



<br>




     
     