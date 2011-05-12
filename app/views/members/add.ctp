<div class="members form">
<?php echo $this->Form->create('Member');?>
	<fieldset>
 		<legend><?php __('Add Member'); ?></legend>
	<?php
		echo $this->Form->input('transactioncode');
		echo $this->Form->input('doj');
		echo $this->Form->input('name');
		echo $this->Form->input('chequename');
		echo $this->Form->input('address');
		echo $this->Form->input('phone');
		echo $this->Form->input('workphone');
		echo $this->Form->input('mobile');
		echo $this->Form->input('email');
		echo $this->Form->input('gender');
		echo $this->Form->input('dob');
		echo $this->Form->input('joiningfranchisee');
		echo $this->Form->input('servicefranchisee');
		echo $this->Form->input('sponcerid');
		echo $this->Form->input('aboveid');
		echo $this->Form->input('position');
		echo $this->Form->input('password');
		echo $this->Form->input('txnpassword');
		echo $this->Form->input('opassword');
		echo $this->Form->input('pan');
		echo $this->Form->input('nominee');
		echo $this->Form->input('nomineerelation');
		echo $this->Form->input('bank');
		echo $this->Form->input('bankbranch');
		echo $this->Form->input('bankacno');
		echo $this->Form->input('paymode');
		echo $this->Form->input('payno');
		echo $this->Form->input('paydate');
		echo $this->Form->input('paydetails');
		echo $this->Form->input('amountpaid');
		echo $this->Form->input('credits');
		echo $this->Form->input('city');
		echo $this->Form->input('pin');
		echo $this->Form->input('state');
		echo $this->Form->input('directpeople');
		echo $this->Form->input('rightpaidpeople');
		echo $this->Form->input('leftpaidpeople');
		echo $this->Form->input('rightpeople');
		echo $this->Form->input('leftpeople');
		echo $this->Form->input('binaryof');
		echo $this->Form->input('1stratio');
		echo $this->Form->input('rightid');
		echo $this->Form->input('leftid');
		echo $this->Form->input('currentdirectcomission');
		echo $this->Form->input('currentratiocomission');
		echo $this->Form->input('currentspillcomission');
		echo $this->Form->input('currentcmagiccomission');
		echo $this->Form->input('unilevelcomission');
		echo $this->Form->input('unclaimed_unilevelcomission');
		echo $this->Form->input('royalty');
		echo $this->Form->input('currentadvances');
		echo $this->Form->input('currentdues');
		echo $this->Form->input('paidcomission');
		echo $this->Form->input('totalcomission');
		echo $this->Form->input('spill');
		echo $this->Form->input('paid');
		echo $this->Form->input('leftcount');
		echo $this->Form->input('rightcount');
		echo $this->Form->input('challandetails');
		echo $this->Form->input('notes');
		echo $this->Form->input('micrcode');
		echo $this->Form->input('currentbv');
		echo $this->Form->input('rightpaidsv');
		echo $this->Form->input('leftpaidsv');
		echo $this->Form->input('rightsv');
		echo $this->Form->input('leftsv');
		echo $this->Form->input('billdetails');
		echo $this->Form->input('photoname');
		echo $this->Form->input('photo');
		echo $this->Form->input('product');
		echo $this->Form->input('productissued');
		echo $this->Form->input('claim_timestamp');
		echo $this->Form->input('productx');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit'));?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index'));?></li>
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