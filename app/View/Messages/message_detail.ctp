
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
        <h2>Message Detail</h2>
    </div>
        
        <div class="breadcrumb">
             <?php echo $this->Form->create('Message', array('controller' => 'messages',  'action' => 'send')); ?>
             <?php echo $this->Form->hidden('to', array('class' => 'form-control', 'name' => 'data[Message][to_id]', 'value' => $this->Session->read('from_id'))); ?>
             <?php echo $this->Form->hidden('from', array('class' => 'form-control', 'name' => 'data[Message][from_id]',  'value' => $this->Session->read('Auth.User.id'))); ?>
             <?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Type message to reply')); ?>
             <?php echo $this->Form->submit('Reply',array('class' =>  'btn btn-primary', 'title' => 'click here to reply')); ?>
             <?php echo $this->Form->end(); ?>
        </div>
                <?php echo $this->Session->flash(); ?>
                <?php $count=0; ?>
		<?php foreach($messages as $message): ?>				
		<?php $count ++;?>
		<?php if($count % 2): echo '' ; else: echo ''; ?>
		<?php endif; ?>
                    
                     <div class="message-item" id="m16">
						<div class="message-inner">
							<div class="message-head clearfix">
								
								<div class="row">
                                                                    <?php if($message['Message']['from_id']==$this->Session->read('from_id')){  ?>
                                                                    <div class="col-sm-4">
                                                                        <div class="avatar pull-left">
                                                                             <a href="#userProfile<?php echo $message['User']['id']; ?>" data-toggle="modal">
                                                                                 <?php if ($message['User']['image']!='') { ?>
                                                                                 <img src="/message_boardss/img/users/<?php echo $message['User']['image']; ?>" class="img-circle img-for-own-message">
                                                                                 <?php } else { ?>
                                                                                 <img src="/message_boardss/img/user.jpg" class="img-circle img-for-own-message">
                                                                                 <?php } ?>
                                                                             </a>
                                                                        </div>
                                                                        <div class="user-detail">
                                                                            <div class="post-meta">
                                                                                <div class="asker-meta">
                                                                                    <span class="qa-message-what"></span>
                                                                                    <span class="qa-message-when">
                                                                                        <span class="pull-left qa-message-when-data">
                                                                                            Date send : <?php echo $message['Message']['created']; ?>
                                                                                        </span>
                                                                                        <br>
                                                                                        <span class="qa-message-when-data">
                                                                                            Message By : 
                                                                                            <a href="#userProfile<?php echo $message['User']['id']; ?>" data-toggle="modal">
                                                                                                <?php echo ucwords(strtolower($message['User']['name'])); ?>
                                                                                            </a>
                                                                                        </span>
                                                                                    </span>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-sm-8">
                                                                        <div class="qa-message-content">
                                                                            <?php echo $this->Html->link( $message['Message']['content']  ,   array('action'=>'message_detail', $message['Message']['from_id']),array('escape' => false) );?>
                                                                        </div>
                                                                    </div>
                                                                    
                                                            <?php } else { ?>
                                                                    <div class="col-sm-8">
                                                                        <div class="qa-message-content">
                                                                            <?php echo $this->Html->link( $message['Message']['content']  ,   array('action'=>'message_detail', $message['Message']['from_id']),array('escape' => false) );?>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    
                                                                    <div class="col-sm-4">
                                                                        <div class="avatar pull-left">
                                                                            <a href="">
                                                                                 <?php if ($message['User']['image']!='') { ?>
                                                                                 <img src="/message_boardss/img/users/<?php echo $message['User']['image']; ?>" class="img-circle img-for-own-message">
                                                                                 <?php } else { ?>
                                                                                 <img src="/message_boardss/img/user.jpg" class=" img-circle img-for-own-message">
                                                                                 <?php } ?>
                                                                             </a>
                                                                        </div>
                                                                            <div class="user-detail">
                                                                                    <div class="post-meta">


                                                                                            <div class="asker-meta">
                                                                                                    <span class="qa-message-what"></span>
                                                                                                    <span class="qa-message-when">
                                                                                                            <span class="pull-left qa-message-when-data">
                                                                                                                Date send : <?php echo $message['Message']['created']; ?>
                                                                                                            </span>
                                                                                                        <br>
                                                                                                            <span class="qa-message-when-data">
                                                                                                                Message By : 
                                                                                                                <a href="#userProfile<?php echo $message['User']['id']; ?>" data-toggle="modal">
                                                                                                                <?php echo ucwords(strtolower($message['User']['name'])); ?>
                                                                                                                </a>
                                                                                                            </span>
                                                                                                    </span>
                                                                                            </div>
                                                                                        </div>



                                                                            </div>
                                                                </div>
                                                                    
                                                            <?php } ?>
                                                                </div> <!--- end of row ---->
							</div>
                                                    
                                                    
                                                    
                                                    <?php if($message['Message']['from_id']!=$this->Session->read('from_id')){  ?>
                                                    <a href="#update<?php echo $message['Message']['id'];?>" data-toggle="modal" class="btn btn-sm btn-primary">Update</a>
                                                    <a href="#delete<?php echo $message['Message']['id'];?>" data-toggle="modal" class="btn btn-sm btn-success">Delete</a>
                                                    <?php }else{ ?>
                                                    <a href="#delete<?php echo $message['Message']['id'];?>" data-toggle="modal" class="btn btn-sm btn-success">Delete</a>
                                                    <?php } ?>
                                                    
							
					</div>     
                   </div>
     
     
     
                        <!---  delete modal starts--->
                        <div class="modal fade" id="delete<?php echo $message['Message']['id'];?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <span class="glyphicon glyphicon-trash"></span> Delete this message ?
                                    </div>
                                    <div class="modal-body">
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <?php echo $this->Form->create('Message', array('controller' => 'messages',  'action' => 'delete_message')); ?>
                                        <?php echo $this->Form->hidden('to', array('class' => 'form-control', 'name' => 'data[Message][id]', 'value' => $message['Message']['id'])); ?>
                                        <?php echo $this->Form->hidden('red', array('class' => 'form-control', 'name' => 'data[Message][redirect]', 'value' => $this->Session->read('from_id'))); ?>
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                                        <?php echo $this->Form->end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- delete modal ends -->
                        <!-- update modal starts--->
                        <div class="modal fade" id="update<?php echo $message['Message']['id'];?>">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <span class="glyphicon glyphicon-pencil"></span> Update message 
                                    </div>
                                    <?php echo $this->Form->create('Message', array('controller' => 'messages',  'action' => 'updateMessage')); ?>
                                    <div class="modal-body">
                                        <?php echo $this->Form->input('content', array('class' => 'form-control', 'placeholder' => 'Type message to reply', 'value' => $message['Message']['content'])); ?>
                                        <?php echo $this->Form->hidden('to', array('class' => 'form-control', 'name' => 'data[Message][id]', 'value' => $message['Message']['id'])); ?>
                                        <?php echo $this->Form->hidden('red', array('class' => 'form-control', 'name' => 'data[Message][redirect]', 'value' => $this->Session->read('from_id'))); ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-pencil"></span> Update</button>
                                    </div>
                                    <?php echo $this->Form->end(); ?>
                                </div>
                            </div>
                        </div>
                        <!-- update modal ends -->
     

		<?php endforeach; ?>
		<?php unset($message); ?>

     <nav>
  <ul class="pagination">
    <li>
      <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
    </li>
    <li><a href="#"> <?php echo $this->Paginator->numbers();?></a></li>
    <li>
      <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
    </li>
  </ul>
</nav>




        
        
    </div>



						
<div class="modal fade" id="createMessage">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title"><span class="glyphicon glyphicon-pencil"></span>Create Message</h4>
      </div>
      <?php echo $this->Form->create('Message',array('controller'=>'message', 'action'=>'send')); ?>
      <div class="modal-body">
          <?php echo $this->Form->input('recipient',array('class' => 'form-control', 'placeholder' => 'Search for a recipient')); ?>
          <label for="UserMessage">Message</label>
          <?php echo $this->Form->textarea('content',array('class' => 'form-control', 'rows' => '8', 'placeholder' => 'Type your message here.')); ?>
          
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-send"></span> Send Message</button>
        <?php echo $this->Form->end(); ?>
      </div>
    </div>
  </div>
</div>
	
