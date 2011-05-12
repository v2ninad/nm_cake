<div class="franchisees form">
<?php echo $this->Form->create('Franchisee');?>
	<fieldset>
 		<legend><?php __('Edit Franchisee'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('city');
		echo $this->Form->input('incharge');
		echo $this->Form->input('address');
		echo $this->Form->input('state');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Franchisee.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Franchisee.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Franchisees'), array('action' => 'index'));?></li>
	</ul>
</div>