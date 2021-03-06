<div class="incomes index">
	<h2><?php echo __('Incomes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('member');?></th>
			<th><?php echo $this->Paginator->sort('doi');?></th>
			<th><?php echo $this->Paginator->sort('amount');?></th>
			<th><?php echo $this->Paginator->sort('joiningmember');?></th>
			<th><?php echo $this->Paginator->sort('note');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($incomes as $income):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($income['Income']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($income['member']['name'], array('controller' => 'members', 'action' => 'view', $income['member']['id'])); ?>
		</td>
		<td><?php echo h($income['Income']['doi']); ?>&nbsp;</td>
		<td><?php echo h($income['Income']['amount']); ?>&nbsp;</td>
		<td><?php echo h($income['Income']['joiningmember']); ?>&nbsp;</td>
		<td><?php echo h($income['Income']['note']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $income['Income']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $income['Income']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $income['Income']['id']), null, __('Are you sure you want to delete # %s?', $income['Income']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Income'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>