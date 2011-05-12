<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
 		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('realname');
		echo $this->Form->input('password');
		echo $this->Form->input('registration');
		echo $this->Form->input('repurchase');
		echo $this->Form->input('paid');
		echo $this->Form->input('accounts');
		echo $this->Form->input('closing');
		echo $this->Form->input('cms');
		echo $this->Form->input('admin');
		echo $this->Form->input('company');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index'));?></li>
	</ul>
</div>