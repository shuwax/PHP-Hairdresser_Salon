<div class="container">
	<h2><?php echo __('Usługi'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Salon:'; ?></th>
			<th><?php echo 'Nazwa Usługi'; ?></th>
			<th><?php echo 'Czas trwania(min)'; ?></th>
			<th><?php echo 'Cena'; ?></th>
			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($services as $service): ?>
			<tr>
				<td><?php echo h($service['Service']['id']); ?></td>

				<?php // znajdz id salonu w tabeli service "join"
					// w kontrolerz ustaw salon jako find all
					foreach($salons as $salon)
					{
						if($salon['Salon']['id'] == $service['Service']['salons_id'])
							echo "<td>".$salon['Salon']['name']."</td>";
					}
				?>
				<td><?php echo h($service['Service']['service_name']); ?></td>
				<td><?php echo h($service['Service']['service_time']); ?></td>
				<td><?php echo h($service['Service']['price']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('Usługa'), array('action' => 'view', $service['Service']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $service['Service']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $service['Service']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć usługę o id: # %s?', $service['Service']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

