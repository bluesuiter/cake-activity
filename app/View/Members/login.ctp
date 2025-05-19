<div class="row">
    <div class="span6 offset4">
        <h2 class="text-center">Login</h2>

        <hr />
        <div style="color:#b25" class="text-center">
            <?php echo $this->Session->flash(); ?>
            <hr/>
        </div>
        <?php echo $this->Form->create('Member', array('class' => 'form-horizontal')); ?>
        <div class="control-group">
            <?php echo $this->Form->label('E-Mail', null, array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $this->Form->input('email', array(
                    'label' => false,
                    'div' => false,
                    'class' => 'input-xlarge'
                )); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $this->Form->label('password', null, array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $this->Form->input('password', array(
                    'label' => false,
                    'div' => false,
                    'class' => 'input-xlarge'
                )); ?>
            </div>
        </div>

        <div class="control-group">
            <div class="controls">
                <?php echo $this->Form->end(array(
                    'label' => 'Login',
                    'class' => 'btn btn-primary'
                )); ?>
            </div>
        </div>
        <?php echo $this->Form->end(); ?>
    </div>
</div>