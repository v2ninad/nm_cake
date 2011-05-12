<div class="feedbacks form">
<?php echo $this->Form->create('Feedback');?>
	<fieldset>
 		<legend><?php __('Edit Feedback'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('email');
		echo $this->Form->input('subject');
		echo $this->Form->input('text');
		echo $this->Form->input('member');
		echo $this->Form->input('name');
		echo $this->Form->input('publish');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Feedback.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Feedback.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Feedbacks'), array('action' => 'index'));?></li>
	</ul>
</div>