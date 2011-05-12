<div class="packages form">
<?php echo $this->Form->create('Package');?>
	<fieldset>
 		<legend><?php __('Add Package'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('vat');
		echo $this->Form->input('price');
		echo $this->Form->input('desc');
		echo $this->Form->input('binaryfund');
		echo $this->Form->input('capping');
		echo $this->Form->input('bv');
		echo $this->Form->input('growth_plan');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>