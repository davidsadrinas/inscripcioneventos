<div class="jurisdiccions view">
<h2><?php echo __('Jurisdiccion'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($jurisdiccion['Jurisdiccion']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Jurisdiccion'), array('action' => 'edit', $jurisdiccion['Jurisdiccion']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Jurisdiccion'), array('action' => 'delete', $jurisdiccion['Jurisdiccion']['id']), array(), __('Are you sure you want to delete # %s?', $jurisdiccion['Jurisdiccion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Jurisdiccions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Jurisdiccion'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instits'), array('controller' => 'instits', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Instits'); ?></h3>
	<?php if (!empty($jurisdiccion['Instit'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Cue'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Localidad'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('Jurisdiccion Id'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Mail'); ?></th>
		<th><?php echo __('Director'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jurisdiccion['Instit'] as $instit): ?>
		<tr>
			<td><?php echo $instit['id']; ?></td>
			<td><?php echo $instit['cue']; ?></td>
			<td><?php echo $instit['domicilio']; ?></td>
			<td><?php echo $instit['localidad']; ?></td>
			<td><?php echo $instit['cp']; ?></td>
			<td><?php echo $instit['jurisdiccion_id']; ?></td>
			<td><?php echo $instit['telefono']; ?></td>
			<td><?php echo $instit['mail']; ?></td>
			<td><?php echo $instit['director']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'instits', 'action' => 'view', $instit['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'instits', 'action' => 'edit', $instit['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'instits', 'action' => 'delete', $instit['id']), array(), __('Are you sure you want to delete # %s?', $instit['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Instit'), array('controller' => 'instits', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($jurisdiccion['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Jurisdiccion Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($jurisdiccion['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['jurisdiccion_id']; ?></td>
			<td><?php echo $user['tipo_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), array(), __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
