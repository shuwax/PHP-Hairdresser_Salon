<div class="Reservation index">
    <h2><?php echo __('Reservationy'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?php echo 'id'; ?></th>
                <th><?php echo 'Data'; ?></th>
                <th><?php echo 'User'; ?></th>
                <th><?php echo 'Services'; ?></th>

                <th class="actions"><?php echo __('Opcje'); ?></th>
            </tr>
        </thead>
        <tbody>
		<?php foreach ($reservations as $reservation): ?>
            <tr>
                <td><?php echo h($reservation['Reservation']['id']); ?></td>
                <td><?php echo h($reservation['Reservation']['reservation_date']); ?></td>

                                <?php // znajdz id salonu w tabeli service "join"
 					// w kontrolerz ustaw salon jako find all
 					foreach($users as $user)
 					{
 						if($user['User']['id'] == $reservation['Reservation']['users_id'])
 							echo "<td>".$user['User']['username']."</td>";
 					}
 				?>
                              <?php // znajdz id salonu w tabeli service "join"
 					// w kontrolerz ustaw salon jako find all
 					foreach($services as $service)
 					{
 						if($service['Service']['id'] == $reservation['Reservation']['services_id'])
 							echo "<td>".$service['Service']['service_name']."</td>";
 					}
 				?>
                <td class="actions">
					<?php echo $this->Html->link(__('Pokaż'), array('action' => 'view', $reservation['Reservation']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $reservation['Reservation']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $reservation['Reservation']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć reservation o id: # %s?', $reservation['Reservation']['id']))); ?>
                </td>
            </tr>
		<?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="actions">
    <h3><?php echo __('Opcje'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Dodaj Reservation'), array('controller' => 'reservations','action' => 'add')); ?></li>
    </ul>
</div>