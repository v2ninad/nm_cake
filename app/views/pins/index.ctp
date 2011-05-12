<div class="pins index">
	<h2><?php echo __('Pins');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('package');?></th>
			<th><?php echo $this->Paginator->sort('pin');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('assignee');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('note');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('value');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($pins as $pin):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($pin['Pin']['package']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['pin']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['id']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['assignee']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['status']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['note']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['date']); ?>&nbsp;</td>
		<td><?php echo h($pin['Pin']['value']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $pin['Pin']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $pin['Pin']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $pin['Pin']['id']), null, __('Are you sure you want to delete # %s?', $pin['Pin']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Pin'), array('action' => 'add')); ?></li>
	</ul>
</div>