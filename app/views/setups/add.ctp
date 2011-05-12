<div class="setups form">
<?php echo $this->Form->create('Setup');?>
	<fieldset>
 		<legend><?php __('Add Setup'); ?></legend>
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

		<li><?php echo $this->Html->link(__('List Setups'), array('action' => 'index'));?></li>
	</ul>
</div>