<div class="setups form">
<?php echo $this->Form->create('Setup');?>
	<fieldset>
 		<legend><?php __('Edit Setup'); ?></legend>
	<?php
		echo $this->Form->input('fieldname');
		echo $this->Form->input('fieldvalue');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Setup.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Setup.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Setups'), array('action' => 'index'));?></li>
	</ul>
</div>