



<div class="row margin-top-panel">
    <div class="col-sm-4 col-sm-offset-4">
        <?php echo $this->Session->flash();?>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3><span class="glyphicon glyphicon-user"></span> <?php echo __('Login Form'); ?></h3>
            </div>
                <?php echo $this->Session->flash('auth'); ?>
                
                <?php echo $this->Form->create('User',array('controller'=>'users', 'action'=>'login')); ?>
            <div class="panel-body">
                <?php 
                echo $this->Form->input('email',array('class' => 'form-control'));
                echo $this->Form->input('password',array('class' => 'form-control')); 
                ?>
            </div>
            <div class="panel-footer">
                <?php echo $this->Form->submit('Login', array('class' => 'form-submit btn btn-primary',  'title' => 'Click here to login') ); ?>  
            </div> 
                <?php echo $this->Form->end(); ?>
        </div>
        
        <div class="breadcrumb">
            <?php echo __('You dont have an account yet? '); ?>
            <?php echo $this->Html->link( "Click here to register",   array('action'=>'register') ); ?>
        </div>
    </div>
</div>
<br>


        </div>


