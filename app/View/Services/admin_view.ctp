<div class="container">
<h2><?php echo __('Usługa'); ?></h2>
	<dl>
		<dt><?php echo __('Id:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Salon:'); ?></dt>
		<dd>
			<?php
			foreach($salons as $salon)
			{
				if($salon['Salon']['id'] == $service['Service']['salons_id'])
					echo "<td>".$salon['Salon']['name']."</td>";
			}
			?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nazwa:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['service_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Czas trwania(min):'); ?></dt>
		<dd>
			<?php echo h($service['Service']['service_time']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cena:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['price']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('ID salonu:'); ?></dt>
		<dd>
			<?php echo h($service['Service']['salons_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>

