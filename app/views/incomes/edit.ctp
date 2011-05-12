<div class="incomes form">
<?php echo $this->Form->create('Income');?>
	<fieldset>
 		<legend><?php __('Edit Income'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('member');
		echo $this->Form->input('doi');
		echo $this->Form->input('amount');
		echo $this->Form->input('joiningmember');
		echo $this->Form->input('note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Income.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Income.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>