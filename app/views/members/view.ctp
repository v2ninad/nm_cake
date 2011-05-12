<div class="members view">
<h2><?php  echo __('Member');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Transactioncode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['transactioncode']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['id']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Doj'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['doj']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Chequename'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['chequename']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['address']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Phone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['phone']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Workphone'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['workphone']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Mobile'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['mobile']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['email']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['gender']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Dob'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['dob']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Joiningfranchisee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['joiningfranchisee']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Servicefranchisee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['servicefranchisee']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Sponcerid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['sponcerid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Aboveid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['aboveid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Position'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['position']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['password']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Txnpassword'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['txnpassword']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Opassword'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['opassword']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Pan'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['pan']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Nominee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['nominee']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Nomineerelation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['nomineerelation']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bank'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['bank']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bankbranch'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['bankbranch']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bankacno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['bankacno']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paymode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['paymode']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Payno'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['payno']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paydate'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['paydate']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paydetails'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['paydetails']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Amountpaid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['amountpaid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Credits'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['credits']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['city']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Pin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['pin']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['state']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Directpeople'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['directpeople']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpaidpeople'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightpaidpeople']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpaidpeople'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftpaidpeople']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpeople'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightpeople']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpeople'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftpeople']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Binaryof'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['binaryof']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('1stratio'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['1stratio']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentdirectcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentdirectcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentratiocomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentratiocomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentspillcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentspillcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentcmagiccomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentcmagiccomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Unilevelcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['unilevelcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Unclaimed Unilevelcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['unclaimed_unilevelcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Royalty'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['royalty']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentadvances'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentadvances']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentdues'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentdues']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paidcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['paidcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Totalcomission'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['totalcomission']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Spill'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['spill']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paid'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['paid']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftcount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftcount']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightcount'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightcount']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Challandetails'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['challandetails']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Notes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['notes']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Micrcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['micrcode']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentbv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['currentbv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpaidsv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightpaidsv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpaidsv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftpaidsv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightsv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['rightsv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftsv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['leftsv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Billdetails'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['billdetails']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Photoname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['photoname']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Photo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['photo']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Product'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['product']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Productissued'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['productissued']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Claim Timestamp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['claim_timestamp']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Productx'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($member['Member']['productx']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Member'), array('action' => 'edit', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Member'), array('action' => 'delete', $member['Member']['id']), null, __('Are you sure you want to delete # %s?', $member['Member']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php echo __('Related Packages');?></h3>
	<?php if (!empty($member['package'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Code');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['code'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['name'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Vat');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['vat'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Price');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['price'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Desc');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['desc'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Binaryfund');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['binaryfund'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Capping');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['capping'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['bv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Growth Plan');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $member['package']['growth_plan'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Package'), array('controller' => 'packages', 'action' => 'edit', $member['package']['code'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php echo __('Related Incomes');?></h3>
	<?php if (!empty($member['income'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Member'); ?></th>
		<th><?php echo __('Doi'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Joiningmember'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['income'] as $income):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $income['id'];?></td>
			<td><?php echo $income['member'];?></td>
			<td><?php echo $income['doi'];?></td>
			<td><?php echo $income['amount'];?></td>
			<td><?php echo $income['joiningmember'];?></td>
			<td><?php echo $income['note'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'incomes', 'action' => 'view', $income['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'incomes', 'action' => 'edit', $income['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'incomes', 'action' => 'delete', $income['id']), null, __('Are you sure you want to delete # %s?', $income['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Income'), array('controller' => 'incomes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payments');?></h3>
	<?php if (!empty($member['payment'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Member'); ?></th>
		<th><?php echo __('Doi'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['payment'] as $payment):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $payment['id'];?></td>
			<td><?php echo $payment['member'];?></td>
			<td><?php echo $payment['doi'];?></td>
			<td><?php echo $payment['amount'];?></td>
			<td><?php echo $payment['note'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payments', 'action' => 'view', $payment['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payments', 'action' => 'edit', $payment['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payments', 'action' => 'delete', $payment['id']), null, __('Are you sure you want to delete # %s?', $payment['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payment'), array('controller' => 'payments', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Payouts');?></h3>
	<?php if (!empty($member['payout'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Turnover'); ?></th>
		<th><?php echo __('People'); ?></th>
		<th><?php echo __('Capping'); ?></th>
		<th><?php echo __('Binaryfund'); ?></th>
		<th><?php echo __('Trimming'); ?></th>
		<th><?php echo __('Directpeople'); ?></th>
		<th><?php echo __('Leftpeople'); ?></th>
		<th><?php echo __('Leftpaid'); ?></th>
		<th><?php echo __('Rightpeople'); ?></th>
		<th><?php echo __('Rightpaid'); ?></th>
		<th><?php echo __('Leftcount'); ?></th>
		<th><?php echo __('Rightcount'); ?></th>
		<th><?php echo __('Leftsv'); ?></th>
		<th><?php echo __('Leftpaidsv'); ?></th>
		<th><?php echo __('Rightsv'); ?></th>
		<th><?php echo __('Rightpaidsv'); ?></th>
		<th><?php echo __('Tds'); ?></th>
		<th><?php echo __('Tdsformulae'); ?></th>
		<th><?php echo __('Tdsamount'); ?></th>
		<th><?php echo __('Servicecharge'); ?></th>
		<th><?php echo __('Servicechargeformulae'); ?></th>
		<th><?php echo __('Servicechargeamount'); ?></th>
		<th><?php echo __('Deduction1'); ?></th>
		<th><?php echo __('Deduction1formulae'); ?></th>
		<th><?php echo __('Deduction1amount'); ?></th>
		<th><?php echo __('Deduction2'); ?></th>
		<th><?php echo __('Deduction2formulae'); ?></th>
		<th><?php echo __('Deduction2amount'); ?></th>
		<th><?php echo __('Deduction3'); ?></th>
		<th><?php echo __('Deduction3formulae'); ?></th>
		<th><?php echo __('Deduction3amount'); ?></th>
		<th><?php echo __('Voucherformulae'); ?></th>
		<th><?php echo __('Voucher'); ?></th>
		<th><?php echo __('Directcomission'); ?></th>
		<th><?php echo __('Ratiocomission'); ?></th>
		<th><?php echo __('Cdownlinecomission'); ?></th>
		<th><?php echo __('Unilevelcomission'); ?></th>
		<th><?php echo __('Om Unclaimed Unilevelcomission'); ?></th>
		<th><?php echo __('Cmagiccomission'); ?></th>
		<th><?php echo __('Spillcomission'); ?></th>
		<th><?php echo __('Royalty'); ?></th>
		<th><?php echo __('Totalcomission'); ?></th>
		<th><?php echo __('Totaldeduction'); ?></th>
		<th><?php echo __('Grosscomission'); ?></th>
		<th><?php echo __('Payableamount'); ?></th>
		<th><?php echo __('Dues'); ?></th>
		<th><?php echo __('Remark'); ?></th>
		<th><?php echo __('Member'); ?></th>
		<th><?php echo __('Membername'); ?></th>
		<th><?php echo __('Memberaddress'); ?></th>
		<th><?php echo __('Chequename'); ?></th>
		<th><?php echo __('Smsno'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['payout'] as $payout):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $payout['id'];?></td>
			<td><?php echo $payout['date'];?></td>
			<td><?php echo $payout['turnover'];?></td>
			<td><?php echo $payout['people'];?></td>
			<td><?php echo $payout['capping'];?></td>
			<td><?php echo $payout['binaryfund'];?></td>
			<td><?php echo $payout['trimming'];?></td>
			<td><?php echo $payout['directpeople'];?></td>
			<td><?php echo $payout['leftpeople'];?></td>
			<td><?php echo $payout['leftpaid'];?></td>
			<td><?php echo $payout['rightpeople'];?></td>
			<td><?php echo $payout['rightpaid'];?></td>
			<td><?php echo $payout['leftcount'];?></td>
			<td><?php echo $payout['rightcount'];?></td>
			<td><?php echo $payout['leftsv'];?></td>
			<td><?php echo $payout['leftpaidsv'];?></td>
			<td><?php echo $payout['rightsv'];?></td>
			<td><?php echo $payout['rightpaidsv'];?></td>
			<td><?php echo $payout['tds'];?></td>
			<td><?php echo $payout['tdsformulae'];?></td>
			<td><?php echo $payout['tdsamount'];?></td>
			<td><?php echo $payout['servicecharge'];?></td>
			<td><?php echo $payout['servicechargeformulae'];?></td>
			<td><?php echo $payout['servicechargeamount'];?></td>
			<td><?php echo $payout['deduction1'];?></td>
			<td><?php echo $payout['deduction1formulae'];?></td>
			<td><?php echo $payout['deduction1amount'];?></td>
			<td><?php echo $payout['deduction2'];?></td>
			<td><?php echo $payout['deduction2formulae'];?></td>
			<td><?php echo $payout['deduction2amount'];?></td>
			<td><?php echo $payout['deduction3'];?></td>
			<td><?php echo $payout['deduction3formulae'];?></td>
			<td><?php echo $payout['deduction3amount'];?></td>
			<td><?php echo $payout['voucherformulae'];?></td>
			<td><?php echo $payout['voucher'];?></td>
			<td><?php echo $payout['directcomission'];?></td>
			<td><?php echo $payout['ratiocomission'];?></td>
			<td><?php echo $payout['cdownlinecomission'];?></td>
			<td><?php echo $payout['unilevelcomission'];?></td>
			<td><?php echo $payout['om_unclaimed_unilevelcomission'];?></td>
			<td><?php echo $payout['cmagiccomission'];?></td>
			<td><?php echo $payout['spillcomission'];?></td>
			<td><?php echo $payout['royalty'];?></td>
			<td><?php echo $payout['totalcomission'];?></td>
			<td><?php echo $payout['totaldeduction'];?></td>
			<td><?php echo $payout['grosscomission'];?></td>
			<td><?php echo $payout['payableamount'];?></td>
			<td><?php echo $payout['dues'];?></td>
			<td><?php echo $payout['remark'];?></td>
			<td><?php echo $payout['member'];?></td>
			<td><?php echo $payout['membername'];?></td>
			<td><?php echo $payout['memberaddress'];?></td>
			<td><?php echo $payout['chequename'];?></td>
			<td><?php echo $payout['smsno'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'payouts', 'action' => 'view', $payout['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'payouts', 'action' => 'edit', $payout['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'payouts', 'action' => 'delete', $payout['id']), null, __('Are you sure you want to delete # %s?', $payout['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Payout'), array('controller' => 'payouts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Pins');?></h3>
	<?php if (!empty($member['pin'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Package'); ?></th>
		<th><?php echo __('Pin'); ?></th>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Assignee'); ?></th>
		<th><?php echo __('Status'); ?></th>
		<th><?php echo __('Note'); ?></th>
		<th><?php echo __('Date'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['pin'] as $pin):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $pin['package'];?></td>
			<td><?php echo $pin['pin'];?></td>
			<td><?php echo $pin['id'];?></td>
			<td><?php echo $pin['assignee'];?></td>
			<td><?php echo $pin['status'];?></td>
			<td><?php echo $pin['note'];?></td>
			<td><?php echo $pin['date'];?></td>
			<td><?php echo $pin['value'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'pins', 'action' => 'view', $pin['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'pins', 'action' => 'edit', $pin['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'pins', 'action' => 'delete', $pin['id']), null, __('Are you sure you want to delete # %s?', $pin['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Pin'), array('controller' => 'pins', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Feedbacks');?></h3>
	<?php if (!empty($member['feedback'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Subject'); ?></th>
		<th><?php echo __('Text'); ?></th>
		<th><?php echo __('Member'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Publish'); ?></th>
		<th class="actions"><?php echo __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($member['feedback'] as $feedback):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $feedback['id'];?></td>
			<td><?php echo $feedback['email'];?></td>
			<td><?php echo $feedback['subject'];?></td>
			<td><?php echo $feedback['text'];?></td>
			<td><?php echo $feedback['member'];?></td>
			<td><?php echo $feedback['name'];?></td>
			<td><?php echo $feedback['publish'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'feedbacks', 'action' => 'view', $feedback['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'feedbacks', 'action' => 'edit', $feedback['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'feedbacks', 'action' => 'delete', $feedback['id']), null, __('Are you sure you want to delete # %s?', $feedback['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Feedback'), array('controller' => 'feedbacks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
