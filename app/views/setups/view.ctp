<div class="setups view">
<h2><?php  echo __('Setup');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Fieldname'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($setup['Setup']['fieldname']); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php echo __('Fieldvalue'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo h($setup['Setup']['fieldvalue']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Setup'), array('action' => 'edit', $setup['Setup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Setup'), array('action' => 'delete', $setup['Setup']['id']), null, __('Are you sure you want to delete # %s?', $setup['Setup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Setups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Setup'), array('action' => 'add')); ?> </li>
	</ul>
</div>
