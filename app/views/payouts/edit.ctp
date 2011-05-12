<div class="payouts form">
<?php echo $this->Form->create('Payout');?>
	<fieldset>
 		<legend><?php __('Edit Payout'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('date');
		echo $this->Form->input('turnover');
		echo $this->Form->input('people');
		echo $this->Form->input('capping');
		echo $this->Form->input('binaryfund');
		echo $this->Form->input('trimming');
		echo $this->Form->input('directpeople');
		echo $this->Form->input('leftpeople');
		echo $this->Form->input('leftpaid');
		echo $this->Form->input('rightpeople');
		echo $this->Form->input('rightpaid');
		echo $this->Form->input('leftcount');
		echo $this->Form->input('rightcount');
		echo $this->Form->input('leftsv');
		echo $this->Form->input('leftpaidsv');
		echo $this->Form->input('rightsv');
		echo $this->Form->input('rightpaidsv');
		echo $this->Form->input('tds');
		echo $this->Form->input('tdsformulae');
		echo $this->Form->input('tdsamount');
		echo $this->Form->input('servicecharge');
		echo $this->Form->input('servicechargeformulae');
		echo $this->Form->input('servicechargeamount');
		echo $this->Form->input('deduction1');
		echo $this->Form->input('deduction1formulae');
		echo $this->Form->input('deduction1amount');
		echo $this->Form->input('deduction2');
		echo $this->Form->input('deduction2formulae');
		echo $this->Form->input('deduction2amount');
		echo $this->Form->input('deduction3');
		echo $this->Form->input('deduction3formulae');
		echo $this->Form->input('deduction3amount');
		echo $this->Form->input('voucherformulae');
		echo $this->Form->input('voucher');
		echo $this->Form->input('directcomission');
		echo $this->Form->input('ratiocomission');
		echo $this->Form->input('cdownlinecomission');
		echo $this->Form->input('unilevelcomission');
		echo $this->Form->input('om_unclaimed_unilevelcomission');
		echo $this->Form->input('cmagiccomission');
		echo $this->Form->input('spillcomission');
		echo $this->Form->input('royalty');
		echo $this->Form->input('totalcomission');
		echo $this->Form->input('totaldeduction');
		echo $this->Form->input('grosscomission');
		echo $this->Form->input('payableamount');
		echo $this->Form->input('dues');
		echo $this->Form->input('remark');
		echo $this->Form->input('member');
		echo $this->Form->input('membername');
		echo $this->Form->input('memberaddress');
		echo $this->Form->input('chequename');
		echo $this->Form->input('smsno');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Payout.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Payout.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Payouts'), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>