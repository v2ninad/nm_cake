<div class="feedbacks index">
	<h2><?php echo __('Feedbacks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('subject');?></th>
			<th><?php echo $this->Paginator->sort('text');?></th>
			<th><?php echo $this->Paginator->sort('member');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('publish');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($feedbacks as $feedback):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($feedback['Feedback']['id']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['email']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['subject']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['text']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['member']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['name']); ?>&nbsp;</td>
		<td><?php echo h($feedback['Feedback']['publish']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $feedback['Feedback']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $feedback['Feedback']['id']), null, __('Are you sure you want to delete # %s?', $feedback['Feedback']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%')
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous'), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next') . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Feedback'), array('action' => 'add')); ?></li>
	</ul>
</div>