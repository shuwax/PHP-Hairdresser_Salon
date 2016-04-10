<div class="container">
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
            <?php echo "<td>".$user['User']['username']."</td>";?>
            &nbsp;
        </dd>
        <dt><?php echo __('Service:'); ?></dt>
        <dd>
            <?php echo "<td>".$service['Service']['service_name']."</td>";?>
            &nbsp;
        </dd>

    </dl>
</div>

