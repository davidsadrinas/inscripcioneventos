<div class="instancias form">
<?php echo $this->Form->create('Instancia'); ?>
	<fieldset>
		<legend><?php echo __('Edit Instancia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Instancia.id')), array(), __('Are you sure you want to delete # %s?', $this->Form->value('Instancia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Instancias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Grupos'), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo'), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
	</ul>
</div>
