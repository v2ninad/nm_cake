<div class="pins form">
<?php echo $this->Form->create('Pin');?>
	<fieldset>
 		<legend><?php __('Edit Pin'); ?></legend>
	<?php
		echo $this->Form->input('package');
		echo $this->Form->input('pin');
		echo $this->Form->input('id');
		echo $this->Form->input('assignee');
		echo $this->Form->input('status');
		echo $this->Form->input('note');
		echo $this->Form->input('date');
		echo $this->Form->input('value');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Pin.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Pin.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pins'), array('action' => 'index'));?></li>
	</ul>
</div>