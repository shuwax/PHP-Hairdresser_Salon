<div class="Employee view">
<h2><?php echo __('Pracownik'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Imie:'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['first_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwisko:'); ?></dt>
		<dd>
			<?php echo h($employee['Employee']['last_name']); ?>
			&nbsp;
		</dd>       
		<dt><?php echo __('Pracodawca:'); ?></dt>
		<dd>
			<?php echo h($salon['Salon']['name']); ?>
			&nbsp;
		</dd>
	
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Employee'), array('controller' => 'employees','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dodaj Pracownika'), array('controller' => 'employees','action' => 'add')); ?></li>
	</ul>
</div>

