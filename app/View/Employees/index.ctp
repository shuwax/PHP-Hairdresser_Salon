<div class="Employee index">
	<h2><?php echo __('Pracownicy'); ?></h2>
	<table cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Imie'; ?></th>
			<th><?php echo 'Nazwisko'; ?></th>
                        <th><?php echo 'Pracodawca'; ?></th>

			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($employees as $employee): ?>
			<tr>
				<td><?php echo h($employee['Employee']['id']); ?></td>
				<td><?php echo h($employee['Employee']['first_name']); ?></td>
				<td><?php echo h($employee['Employee']['last_name']); ?></td>
				<?php
						foreach ($salons as $salon)
						{
							if($employee['Employee']['salons_id'] == $salon['Salon']['id'])
							{
								echo '<td>'.$salon['Salon']['name'].'</td>';
							}
						}

				?>
				<td class="actions">
					<?php echo $this->Html->link(__('Pracownik'), array('action' => 'view', $employee['Employee']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $employee['Employee']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $employee['Employee']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć Pracownika o id: # %s?', $employee['Employee']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

<div class="actions">
	<h3><?php echo __('Opcje'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Dodaj Pracownika'), array('controller' => 'employees','action' => 'add')); ?></li>
	</ul>
</div>
