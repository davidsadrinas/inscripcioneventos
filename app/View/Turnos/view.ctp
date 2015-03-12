<div class="turnos view">
<h2><?php echo __('Turno'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($turno['Turno']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Turno'), array('action' => 'edit', $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Turno'), array('action' => 'delete', $turno['Turno']['id']), array(), __('Are you sure you want to delete # %s?', $turno['Turno']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Turnos'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Turno'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas'), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personas'); ?></h3>
	<?php if (!empty($turno['Persona'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Domicilio'); ?></th>
		<th><?php echo __('Cp'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Anio'); ?></th>
		<th><?php echo __('Division'); ?></th>
		<th><?php echo __('Turno Id'); ?></th>
		<th><?php echo __('Grupo Id'); ?></th>
		<th><?php echo __('Fecha Nac'); ?></th>
		<th><?php echo __('Rol Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($turno['Persona'] as $persona): ?>
		<tr>
			<td><?php echo $persona['id']; ?></td>
			<td><?php echo $persona['dni']; ?></td>
			<td><?php echo $persona['nombre']; ?></td>
			<td><?php echo $persona['domicilio']; ?></td>
			<td><?php echo $persona['cp']; ?></td>
			<td><?php echo $persona['telefono']; ?></td>
			<td><?php echo $persona['anio']; ?></td>
			<td><?php echo $persona['division']; ?></td>
			<td><?php echo $persona['turno_id']; ?></td>
			<td><?php echo $persona['grupo_id']; ?></td>
			<td><?php echo $persona['fecha_nac']; ?></td>
			<td><?php echo $persona['rol_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personas', 'action' => 'view', $persona['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personas', 'action' => 'edit', $persona['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personas', 'action' => 'delete', $persona['id']), array(), __('Are you sure you want to delete # %s?', $persona['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Persona'), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
