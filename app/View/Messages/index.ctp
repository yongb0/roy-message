

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
        <h2> <span class="glyphicon glyphicon-list"></span> Message List
            <?php echo $this->Html->link("Create New Message", array('controller' => 'messages', 'action' => 'createMessage'), array('class' => 'btn btn-success pull-right')) ?>
        </h2>
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
			<div class="qa-message-content">
                            <?php echo $this->Html->link( $message['Message']['content']  ,   array('action'=>'message_detail', $message['Message']['from_id']),array('escape' => false) );?>
                            <a href="#delete<?php echo $message['Message']['id'];?>" data-toggle="modal" class="btn btn-success pull-right">Delete</a>
                        </div>
                        
                        
                        <!--- modal starts--->
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
                                        <button class="btn btn-default" data-toggle="modal">Cancel</button>
                                        <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-trash"></span> Delete</button>
                                        <?php echo $this->Form->end(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- modal ends -->
                        
                    </div>     
                </div>
	<?php endforeach; ?>
        <?php if($count==0){ ?>
        <h1>
            Inbox Empty
        </h1>
        <?php } ?>
    <nav>
        <ul class="pagination">
            <li>
                <?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
            </li>
            <li>
                <a href="#"> <?php echo $this->Paginator->numbers();?></a>
            </li>
            <li>
                <?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
            </li>
        </ul>
    </nav>
    
</div>


<?php foreach($messages as $message): ?>
    <div class="modal fade" id="userProfile<?php echo $message['User']['id']; ?>">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3>
                    <?php echo ucwords(strtolower($message['User']['name'])); ?>
                    </h3>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="row">
                                <div class="col-sm-6">
                                    <?php if(!empty($message['User']['image'])) { ?>
                                        <img src="/message_boardss/img/users/<?php echo $users['User']['image'];?>" class="img-responsive"/>
                                    <?php } else { ?>
                                        <img src="/message_boardss/img/user.jpg" class="img-responsive"/>
                                    <?php } ?>
                                    <img src=""/>
                                </div>
                                <div class="col-sm-6">
                                    <h4>
                                    <?php echo ucwords(strtolower($message['User']['name'])); ?>
                                    </h4>
                                    <table class="table">
                                        <tr>
                                            <td>Gender</td>
                                            <td>
                                                <?php if($message['User']['gender']=='1') { ?>
                                                Male
                                                <?php } else if($message['User']['gender']=='2') { ?>
                                                Female
                                                <?php } else { ?>
                                               
                                                <?php } ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Birthdate</td>
                                            <td> <?php echo $message['User']['birthdate']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Joined</td>
                                            <td> <?php echo $message['User']['created']; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Last Login</td>
                                            <td> <?php echo $message['User']['last_login_time']; ?></td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="breadcrumb">
                                <b>HUBBY</b><br>
                                <?php echo ucwords(strtolower($message['User']['hubby'])); ?>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<?php unset($message); ?>

						

			
