<div class="container">
	<h2><?php echo __('Uzytkownicy'); ?></h2>
	<table class='table table-striped' cellpadding="0" cellspacing="0">
		<thead>
		<tr>
			<th><?php echo 'id'; ?></th>
			<th><?php echo 'Nazwa Uzytkownika'; ?></th>
			<th><?php echo 'Imie'; ?></th>
			<th><?php echo 'Nazwisko'; ?></th>
			<th><?php echo 'E-mail'; ?></th>
			<th><?php echo 'Numer kontaktowy'; ?></th>
			<th class="actions"><?php echo __('Opcje'); ?></th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($users as $user): ?>
			<tr class='table__align-columns-middle'>
				<td><?php echo h($user['User']['id']); ?></td>
				<td><?php echo h($user['User']['username']); ?></td>
				<td><?php echo h($user['User']['first_name']); ?></td>
				<td><?php echo h($user['User']['last_name']); ?></td>
				<td><?php echo h($user['User']['email']); ?></td>
				<td><?php echo h($user['User']['tel']); ?></td>
				<td class="actions">
					<?php echo $this->Html->link(__('User'), array('action' => 'view', $user['User']['id'])); ?>
					<?php echo $this->Html->link(__('Edycja'), array('action' => 'edit', $user['User']['id'])); ?>
					<?php echo $this->Form->postLink(__('Usunięcie'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Jesteś pewien że chcesz usunąć uzytkownika o id: # %s?', $user['User']['id']))); ?>
				</td>
			</tr>
		<?php endforeach; ?>
		</tbody>
	</table>
</div>

