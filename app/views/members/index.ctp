<div class="members index">
	<h2><?php echo __('Members');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('transactioncode');?></th>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('doj');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('chequename');?></th>
			<th><?php echo $this->Paginator->sort('address');?></th>
			<th><?php echo $this->Paginator->sort('phone');?></th>
			<th><?php echo $this->Paginator->sort('workphone');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('dob');?></th>
			<th><?php echo $this->Paginator->sort('joiningfranchisee');?></th>
			<th><?php echo $this->Paginator->sort('servicefranchisee');?></th>
			<th><?php echo $this->Paginator->sort('sponcerid');?></th>
			<th><?php echo $this->Paginator->sort('aboveid');?></th>
			<th><?php echo $this->Paginator->sort('position');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('txnpassword');?></th>
			<th><?php echo $this->Paginator->sort('opassword');?></th>
			<th><?php echo $this->Paginator->sort('pan');?></th>
			<th><?php echo $this->Paginator->sort('nominee');?></th>
			<th><?php echo $this->Paginator->sort('nomineerelation');?></th>
			<th><?php echo $this->Paginator->sort('bank');?></th>
			<th><?php echo $this->Paginator->sort('bankbranch');?></th>
			<th><?php echo $this->Paginator->sort('bankacno');?></th>
			<th><?php echo $this->Paginator->sort('paymode');?></th>
			<th><?php echo $this->Paginator->sort('payno');?></th>
			<th><?php echo $this->Paginator->sort('paydate');?></th>
			<th><?php echo $this->Paginator->sort('paydetails');?></th>
			<th><?php echo $this->Paginator->sort('amountpaid');?></th>
			<th><?php echo $this->Paginator->sort('credits');?></th>
			<th><?php echo $this->Paginator->sort('city');?></th>
			<th><?php echo $this->Paginator->sort('pin');?></th>
			<th><?php echo $this->Paginator->sort('state');?></th>
			<th><?php echo $this->Paginator->sort('directpeople');?></th>
			<th><?php echo $this->Paginator->sort('rightpaidpeople');?></th>
			<th><?php echo $this->Paginator->sort('leftpaidpeople');?></th>
			<th><?php echo $this->Paginator->sort('rightpeople');?></th>
			<th><?php echo $this->Paginator->sort('leftpeople');?></th>
			<th><?php echo $this->Paginator->sort('binaryof');?></th>
			<th><?php echo $this->Paginator->sort('1stratio');?></th>
			<th><?php echo $this->Paginator->sort('rightid');?></th>
			<th><?php echo $this->Paginator->sort('leftid');?></th>
			<th><?php echo $this->Paginator->sort('currentdirectcomission');?></th>
			<th><?php echo $this->Paginator->sort('currentratiocomission');?></th>
			<th><?php echo $this->Paginator->sort('currentspillcomission');?></th>
			<th><?php echo $this->Paginator->sort('currentcmagiccomission');?></th>
			<th><?php echo $this->Paginator->sort('unilevelcomission');?></th>
			<th><?php echo $this->Paginator->sort('unclaimed_unilevelcomission');?></th>
			<th><?php echo $this->Paginator->sort('royalty');?></th>
			<th><?php echo $this->Paginator->sort('currentadvances');?></th>
			<th><?php echo $this->Paginator->sort('currentdues');?></th>
			<th><?php echo $this->Paginator->sort('paidcomission');?></th>
			<th><?php echo $this->Paginator->sort('totalcomission');?></th>
			<th><?php echo $this->Paginator->sort('spill');?></th>
			<th><?php echo $this->Paginator->sort('paid');?></th>
			<th><?php echo $this->Paginator->sort('leftcount');?></th>
			<th><?php echo $this->Paginator->sort('rightcount');?></th>
			<th><?php echo $this->Paginator->sort('challandetails');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('micrcode');?></th>
			<th><?php echo $this->Paginator->sort('currentbv');?></th>
			<th><?php echo $this->Paginator->sort('rightpaidsv');?></th>
			<th><?php echo $this->Paginator->sort('leftpaidsv');?></th>
			<th><?php echo $this->Paginator->sort('rightsv');?></th>
			<th><?php echo $this->Paginator->sort('leftsv');?></th>
			<th><?php echo $this->Paginator->sort('billdetails');?></th>
			<th><?php echo $this->Paginator->sort('photoname');?></th>
			<th><?php echo $this->Paginator->sort('photo');?></th>
			<th><?php echo $this->Paginator->sort('product');?></th>
			<th><?php echo $this->Paginator->sort('productissued');?></th>
			<th><?php echo $this->Paginator->sort('claim_timestamp');?></th>
			<th><?php echo $this->Paginator->sort('productx');?></th>
			<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($members as $member):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo h($member['Member']['transactioncode']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['id']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['doj']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['name']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['chequename']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['address']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['phone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['workphone']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['mobile']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['email']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['gender']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['dob']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['joiningfranchisee']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['servicefranchisee']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['sponcerid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['aboveid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['position']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['password']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['txnpassword']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['opassword']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['pan']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['nominee']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['nomineerelation']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['bank']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['bankbranch']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['bankacno']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['paymode']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['payno']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['paydate']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['paydetails']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['amountpaid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['credits']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['city']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['pin']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['state']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['directpeople']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightpaidpeople']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftpaidpeople']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightpeople']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftpeople']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['binaryof']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['1stratio']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentdirectcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentratiocomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentspillcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentcmagiccomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['unilevelcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['unclaimed_unilevelcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['royalty']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentadvances']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentdues']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['paidcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['totalcomission']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['spill']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['paid']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftcount']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightcount']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['challandetails']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['notes']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['micrcode']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['currentbv']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightpaidsv']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftpaidsv']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['rightsv']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['leftsv']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['billdetails']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['photoname']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['photo']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['product']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['productissued']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['claim_timestamp']); ?>&nbsp;</td>
		<td><?php echo h($member['Member']['productx']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $member['Member']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $member['Member']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Packages'), array('controller' => 'packages', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('controller' => 'packages', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Incomes'), array('controller' => 'incomes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payments'), array('controller' => 'payments', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payouts'), array('controller' => 'payouts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payout'), array('controller' => 'payouts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pins'), array('controller' => 'pins', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pin'), array('controller' => 'pins', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Feedbacks'), array('controller' => 'feedbacks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Feedback'), array('controller' => 'feedbacks', 'action' => 'add')); ?> </li>
	</ul>
</div>