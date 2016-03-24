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
			 <?php // znajdz id salonu w tabeli service "join"
 					// w kontrolerz ustaw salon jako find all
 					foreach($users as $user)
 					{
 						if($user['User']['id'] == $reservation['Reservation']['users_id'])
 							echo "<td>".$user['User']['username']."</td>";
 					}
 				?>
            &nbsp;
        </dd>
        <dt><?php echo __('Service:'); ?></dt>
        <dd>
			<?php // znajdz id salonu w tabeli service "join"
 					// w kontrolerz ustaw salon jako find all
 					foreach($services as $service)
 					{
 						if($service['Service']['id'] == $reservation['Reservation']['services_id'])
 							echo "<td>".$service['Service']['service_name']."</td>";
 					}
 				?>
            &nbsp;
        </dd>

    </dl>
</div>

<div class="actions">
    <h3><?php echo __('Opcje'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Saloy'), array('controller' => 'reservations','action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Dodaj Reservation'), array('controller' => 'reservations','action' => 'add')); ?></li>
    </ul>
</div>