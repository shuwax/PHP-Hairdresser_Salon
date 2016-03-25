<div class="Salon index">
	<h2><?php echo __('Salony'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Nazwa Salonu'; ?></th>
			<th><?php echo 'Logo'; ?></th>
			<th><?php echo 'Miasto'; ?></th>
			<th><?php echo 'Adres'; ?></th>
			<th><?php echo 'E-mail'; ?></th>
			<th><?php echo 'Numer kontaktowy'; ?></th>
			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($salons as $salon): ?>
			<tr>
				<td><?php echo h($salon['Salon']['id']); ?></td>
				<td><?php echo h($salon['Salon']['name']); ?></td>
				<td><?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename']); ?></td>
				<td><?php echo h($salon['Salon']['city']); ?></td>
				<td><?php echo h($salon['Salon']['adress']); ?></td>
				<td><?php echo h($salon['Salon']['email']); ?></td>
				<td><?php echo h($salon['Salon']['tel']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Salon'), array('controller'=>'../salons','action' => 'view', $salon['Salon']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $salon['Salon']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $salon['Salon']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć salon o id: # %s?', $salon['Salon']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>
