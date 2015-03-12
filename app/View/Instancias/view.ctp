<div class="instancias view">
<h2><?php echo __('Instancia'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($instancia['Instancia']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($instancia['Instancia']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Instancia'), array('action' => 'edit', $instancia['Instancia']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Instancia'), array('action' => 'delete', $instancia['Instancia']['id']), array(), __('Are you sure you want to delete # %s?', $instancia['Instancia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Instancias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Instancia'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Grupos'); ?></h3>
	<?php if (!empty($instancia['Grupo'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Descripcion'); ?></th>
		<th><?php echo __('Instit Id'); ?></th>
		<th><?php echo __('Tipo Id'); ?></th>
		<th><?php echo __('Categoria Id'); ?></th>
		<th><?php echo __('Instancia Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($instancia['Grupo'] as $grupo): ?>
		<tr>
			<td><?php echo $grupo['id']; ?></td>
			<td><?php echo $grupo['nombre']; ?></td>
			<td><?php echo $grupo['descripcion']; ?></td>
			<td><?php echo $grupo['instit_id']; ?></td>
			<td><?php echo $grupo['tipo_id']; ?></td>
			<td><?php echo $grupo['categoria_id']; ?></td>
			<td><?php echo $grupo['instancia_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'grupos', 'action' => 'view', $grupo['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'grupos', 'action' => 'edit', $grupo['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'grupos', 'action' => 'delete', $grupo['id']), array(), __('Are you sure you want to delete # %s?', $grupo['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
