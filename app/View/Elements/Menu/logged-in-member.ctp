<?php if ($this->Acl->check('controllers/Memebers/specialPageOne')): ?>
    <li><?php echo $this->Html->link('Page One', array("controller" => "members", "action" => "specialPageOne")); ?></li>
<?php endif; ?>
<li><?php echo $this->Html->link('Page Two', array("controller" => "members", "action" => "specialPageTwo")); ?></li>
<li><?php echo $this->Html->link('Logout', array("controller" => "members", "action" => "logout")); ?></li>