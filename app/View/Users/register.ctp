<!-- app/View/Users/add.ctp -->


<style type="text/css">

</style>

<div class="row margin-top-panel">
    <div class="col-sm-4 col-sm-offset-4">
        <div class="panel panel-default">
            <div class="panel-heading">
            <h3>
                <span class="glyphicon glyphicon-pencil"></span> 
                <?php echo __('Registration Form'); ?>
            </h3>
            </div>
            <?php echo $this->Form->create('User');?>
            <div class="panel-body">
            <?php 
            echo $this->Form->input('name',array('class' => 'form-control'));
            echo $this->Form->input('email',array('class' => 'form-control'));
            echo $this->Form->input('password',array('class' => 'form-control'));
            echo $this->Form->input('password_confirm', array('class' => 'form-control', 'label' => 'Confirm Password', 'maxLength' => 255, 'title' => 'Confirm password', 'type'=>'password'));
            ?> 
            <div class="gray"><span class="first">Password Indicator</span></div>
            </div>
            <div class="panel-footer" style="margin-top:10px;">
            <?php echo $this->Form->submit('Add User', array('class' => 'form-submit btn btn-success',  'title' => 'Click here to add the user') ); ?>    
            </div>
            <?php echo $this->Form->end(); ?>
        </div>
        
        <div class="breadcrumb">
            <?php 
            if($this->Session->check('Auth.User')){
            echo $this->Html->link( "Return to Dashboard",   array('action'=>'index') ); 
            echo "<br>";
            echo $this->Html->link( "Logout",   array('action'=>'logout') ); 
            }else{
            echo $this->Html->link( "Return to Login Screen",   array('action'=>'login') ); 
            }
            ?>
        </div>
    </div>
</div>


        
        
    





