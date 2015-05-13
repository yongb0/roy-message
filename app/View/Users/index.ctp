



    <div class="container">

        
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
                <a class="navbar-brand" href="#" style="color:white;">Message Board D</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li><?php echo $this->Html->link( "Home",   array('controller' => 'users', 'action'=>'index') ); ?></li>
                    <li><a href="#" style="color:white;">Profile</a></li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Messages <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link( "Message List",   array('controller' => 'messages', 'action'=>'index') ); ?></li>
                            <li><a href="#">Drafts</a></li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" style="color:white;">Welcome <span class="glyphicon glyphicon-user"></span> <?php echo ucwords(strtolower($this->Session->read('user'))); ?><b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><?php echo $this->Html->link( "Logout",   array('action'=>'logout') ); ?></li>
                            <li class="divider"></li>
                            <li><a href="#">Settings</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav>
    
       
        <div class="jumbotron">
            <h2><span class="glyphicon glyphicon-list"></span>Message List</h2>
            <a href="#createMessage" class="btn btn-success pull-right" data-toggle="modal" >
                Create New Message
            </a>
        </div>
        
        <?php echo $this->Session->flash(); ?>
        
        
        
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