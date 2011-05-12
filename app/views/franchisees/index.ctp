<div class="franchisees index">
	<h2><?php echo __('Franchisees');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('code');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('incharge');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($franchisees as $franchisee):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($franchisee['Franchisee']['code']); ?>&nbsp;</td>
		<td><?php echo h($franchisee['Franchisee']['name']); ?>&nbsp;</td>
		<td><?php echo h($franchisee['Franchisee']['city']); ?>&nbsp;</td>
		<td><?php echo h($franchisee['Franchisee']['incharge']); ?>&nbsp;</td>
		<td><?php echo h($franchisee['Franchisee']['address']); ?>&nbsp;</td>
		<td><?php echo h($franchisee['Franchisee']['state']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $franchisee['Franchisee']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $franchisee['Franchisee']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $franchisee['Franchisee']['id']), null, __('Are you sure you want to delete # %s?', $franchisee['Franchisee']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Franchisee'), array('action' => 'add')); ?></li>
	</ul>
</div>