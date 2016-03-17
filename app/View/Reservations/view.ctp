<div class="reservation view">
<h2><?php echo __('Reservation'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Data:'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['reservation_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User:'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['users_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Service:'); ?></dt>
		<dd>
			<?php echo h($reservation['Reservation']['services_id']); ?>
			&nbsp;
		</dd>
		
	</dl>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Rezerwacja'), array('controller' => 'reservations','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Dodaj Rezerwacje'), array('controller' => 'reservations','action' => 'add')); ?></li>
	</ul>
</div>