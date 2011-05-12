<div class="franchisees view">
<h2><?php  echo __('Franchisee');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['code']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['name']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['city']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Incharge'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['incharge']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['address']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('State'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($franchisee['Franchisee']['state']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Franchisee'), array('action' => 'edit', $franchisee['Franchisee']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Franchisee'), array('action' => 'delete', $franchisee['Franchisee']['id']), null, __('Are you sure you want to delete # %s?', $franchisee['Franchisee']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Franchisees'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Franchisee'), array('action' => 'add')); ?> </li>
	</ul>
</div>
