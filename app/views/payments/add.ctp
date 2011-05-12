<div class="payments form">
<?php echo $this->Form->create('Payment');?>
	<fieldset>
 		<legend><?php __('Add Payment'); ?></legend>
	<?php
		echo $this->Form->input('member');
		echo $this->Form->input('doi');
		echo $this->Form->input('amount');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payments'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>