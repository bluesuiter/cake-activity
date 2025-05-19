<div class="row">
    <div class="span6 offset4">
        <h2 class="text-center">Register</h2>
        <hr />

        <?php echo $this->Session->flash(); ?>

        <?php echo $this->Form->create('Member', array('class' => 'form-horizontal')); ?>

        <div class="control-group">
            <?php echo $this->Form->label('first_name', null, array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $this->Form->input('first_name', array(
                    'label' => false,
                    'div' => false,
                    'class' => 'input-xlarge'
                )); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $this->Form->label('last_name', null, array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $this->Form->input('last_name', array(
                    'label' => false,
                    'div' => false,
                    'class' => 'input-xlarge'
                )); ?>
            </div>
        </div>

        <div class="control-group">
            <?php echo $this->Form->label('email', null, array('class' => 'control-label')); ?>
            <div class="controls">
                <?php echo $this->Form->input('email', array(
                    'label' => false,
                    'div' => false,
                    'type' => 'email',
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
                    'label' => 'Register',
                    'class' => 'btn btn-primary'
                )); ?>
            </div>
        </div>
    </div>
</div>