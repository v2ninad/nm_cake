<div class="payouts index">
	<h2><?php echo __('Payouts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('date');?></th>
			<th><?php echo $this->Paginator->sort('turnover');?></th>
			<th><?php echo $this->Paginator->sort('people');?></th>
			<th><?php echo $this->Paginator->sort('capping');?></th>
			<th><?php echo $this->Paginator->sort('binaryfund');?></th>
			<th><?php echo $this->Paginator->sort('trimming');?></th>
			<th><?php echo $this->Paginator->sort('directpeople');?></th>
			<th><?php echo $this->Paginator->sort('leftpeople');?></th>
			<th><?php echo $this->Paginator->sort('leftpaid');?></th>
			<th><?php echo $this->Paginator->sort('rightpeople');?></th>
			<th><?php echo $this->Paginator->sort('rightpaid');?></th>
			<th><?php echo $this->Paginator->sort('leftcount');?></th>
			<th><?php echo $this->Paginator->sort('rightcount');?></th>
			<th><?php echo $this->Paginator->sort('leftsv');?></th>
			<th><?php echo $this->Paginator->sort('leftpaidsv');?></th>
			<th><?php echo $this->Paginator->sort('rightsv');?></th>
			<th><?php echo $this->Paginator->sort('rightpaidsv');?></th>
			<th><?php echo $this->Paginator->sort('tds');?></th>
			<th><?php echo $this->Paginator->sort('tdsformulae');?></th>
			<th><?php echo $this->Paginator->sort('tdsamount');?></th>
			<th><?php echo $this->Paginator->sort('servicecharge');?></th>
			<th><?php echo $this->Paginator->sort('servicechargeformulae');?></th>
			<th><?php echo $this->Paginator->sort('servicechargeamount');?></th>
			<th><?php echo $this->Paginator->sort('deduction1');?></th>
			<th><?php echo $this->Paginator->sort('deduction1formulae');?></th>
			<th><?php echo $this->Paginator->sort('deduction1amount');?></th>
			<th><?php echo $this->Paginator->sort('deduction2');?></th>
			<th><?php echo $this->Paginator->sort('deduction2formulae');?></th>
			<th><?php echo $this->Paginator->sort('deduction2amount');?></th>
			<th><?php echo $this->Paginator->sort('deduction3');?></th>
			<th><?php echo $this->Paginator->sort('deduction3formulae');?></th>
			<th><?php echo $this->Paginator->sort('deduction3amount');?></th>
			<th><?php echo $this->Paginator->sort('voucherformulae');?></th>
			<th><?php echo $this->Paginator->sort('voucher');?></th>
			<th><?php echo $this->Paginator->sort('directcomission');?></th>
			<th><?php echo $this->Paginator->sort('ratiocomission');?></th>
			<th><?php echo $this->Paginator->sort('cdownlinecomission');?></th>
			<th><?php echo $this->Paginator->sort('unilevelcomission');?></th>
			<th><?php echo $this->Paginator->sort('om_unclaimed_unilevelcomission');?></th>
			<th><?php echo $this->Paginator->sort('cmagiccomission');?></th>
			<th><?php echo $this->Paginator->sort('spillcomission');?></th>
			<th><?php echo $this->Paginator->sort('royalty');?></th>
			<th><?php echo $this->Paginator->sort('totalcomission');?></th>
			<th><?php echo $this->Paginator->sort('totaldeduction');?></th>
			<th><?php echo $this->Paginator->sort('grosscomission');?></th>
			<th><?php echo $this->Paginator->sort('payableamount');?></th>
			<th><?php echo $this->Paginator->sort('dues');?></th>
			<th><?php echo $this->Paginator->sort('remark');?></th>
			<th><?php echo $this->Paginator->sort('member');?></th>
			<th><?php echo $this->Paginator->sort('membername');?></th>
			<th><?php echo $this->Paginator->sort('memberaddress');?></th>
			<th><?php echo $this->Paginator->sort('chequename');?></th>
			<th><?php echo $this->Paginator->sort('smsno');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($payouts as $payout):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td>
			<?php echo $this->Html->link($payout['member']['name'], array('controller' => 'members', 'action' => 'view', $payout['member']['id'])); ?>
		</td>
		<td><?php echo h($payout['Payout']['date']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['turnover']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['people']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['capping']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['binaryfund']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['trimming']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['directpeople']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['leftpeople']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['leftpaid']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['rightpeople']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['rightpaid']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['leftcount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['rightcount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['leftsv']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['leftpaidsv']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['rightsv']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['rightpaidsv']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['tds']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['tdsformulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['tdsamount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['servicecharge']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['servicechargeformulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['servicechargeamount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction1']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction1formulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction1amount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction2']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction2formulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction2amount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction3']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction3formulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['deduction3amount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['voucherformulae']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['voucher']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['directcomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['ratiocomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['cdownlinecomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['unilevelcomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['om_unclaimed_unilevelcomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['cmagiccomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['spillcomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['royalty']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['totalcomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['totaldeduction']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['grosscomission']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['payableamount']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['dues']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['remark']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['member']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['membername']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['memberaddress']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['chequename']); ?>&nbsp;</td>
		<td><?php echo h($payout['Payout']['smsno']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $payout['Payout']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $payout['Payout']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $payout['Payout']['id']), null, __('Are you sure you want to delete # %s?', $payout['Payout']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Payout'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>