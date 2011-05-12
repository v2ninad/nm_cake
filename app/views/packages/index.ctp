<div class="packages index">
	<h2><?php echo __('Packages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('vat');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('desc');?></th>
			<th><?php echo $this->Paginator->sort('binaryfund');?></th>
			<th><?php echo $this->Paginator->sort('capping');?></th>
			<th><?php echo $this->Paginator->sort('bv');?></th>
			<th><?php echo $this->Paginator->sort('growth_plan');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($packages as $package):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($package['Package']['code']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['name']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['vat']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['price']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['desc']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['binaryfund']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['capping']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['bv']); ?>&nbsp;</td>
		<td><?php echo h($package['Package']['growth_plan']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $package['Package']['code'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $package['Package']['code'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $package['Package']['code']), null, __('Are you sure you want to delete # %s?', $package['Package']['code'])); ?>
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
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>