<div class="pins form">
<?php echo $this->Form->create('Pin');?>
	<fieldset>
 		<legend><?php __('Add Pin'); ?></legend>
	<?php
		echo $this->Form->input('package');
		echo $this->Form->input('pin');
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

		<li><?php echo $this->Html->link(__('List Pins'), array('action' => 'index'));?></li>
	</ul>
</div>