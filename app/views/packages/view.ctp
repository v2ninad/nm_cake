<div class="packages view">
<h2><?php  echo __('Package');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['code']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Vat'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['vat']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['price']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Desc'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['desc']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Binaryfund'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['binaryfund']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Capping'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['capping']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bv'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['bv']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Growth Plan'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($package['Package']['growth_plan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Package'), array('action' => 'edit', $package['Package']['code'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Package'), array('action' => 'delete', $package['Package']['code']), null, __('Are you sure you want to delete # %s?', $package['Package']['code'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Packages'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Package'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Members'), array('controller' => 'members', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Member'), array('controller' => 'members', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php echo __('Related Members');?></h3>
	<?php if (!empty($package['member'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Transactioncode');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['transactioncode'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Doj');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['doj'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['name'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Chequename');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['chequename'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Address');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['address'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Phone');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['phone'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Workphone');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['workphone'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Mobile');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['mobile'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Email');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['email'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Gender');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['gender'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Dob');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['dob'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Joiningfranchisee');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['joiningfranchisee'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Servicefranchisee');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['servicefranchisee'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Sponcerid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['sponcerid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Aboveid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['aboveid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Position');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['position'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Password');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['password'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Txnpassword');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['txnpassword'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Opassword');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['opassword'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Pan');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['pan'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Nominee');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['nominee'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Nomineerelation');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['nomineerelation'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bank');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['bank'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bankbranch');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['bankbranch'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Bankacno');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['bankacno'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paymode');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['paymode'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Payno');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['payno'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paydate');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['paydate'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paydetails');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['paydetails'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Amountpaid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['amountpaid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Credits');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['credits'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('City');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['city'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Pin');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['pin'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('State');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['state'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Directpeople');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['directpeople'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpaidpeople');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightpaidpeople'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpaidpeople');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftpaidpeople'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpeople');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightpeople'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpeople');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftpeople'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Binaryof');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['binaryof'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('1stratio');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['1stratio'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentdirectcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentdirectcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentratiocomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentratiocomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentspillcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentspillcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentcmagiccomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentcmagiccomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Unilevelcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['unilevelcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Unclaimed Unilevelcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['unclaimed_unilevelcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Royalty');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['royalty'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentadvances');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentadvances'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentdues');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentdues'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paidcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['paidcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Totalcomission');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['totalcomission'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Spill');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['spill'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Paid');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['paid'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftcount');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftcount'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightcount');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightcount'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Challandetails');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['challandetails'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Notes');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['notes'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Micrcode');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['micrcode'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Currentbv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['currentbv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightpaidsv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightpaidsv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftpaidsv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftpaidsv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Rightsv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['rightsv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Leftsv');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['leftsv'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Billdetails');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['billdetails'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Photoname');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['photoname'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Photo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['photo'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Product');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['product'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Productissued');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['productissued'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Claim Timestamp');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['claim_timestamp'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Productx');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $package['member']['productx'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Member'), array('controller' => 'members', 'action' => 'edit', $package['member']['id'])); ?></li>
			</ul>
		</div>
	</div>
	