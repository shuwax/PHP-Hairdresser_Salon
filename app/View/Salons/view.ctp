<div class="zaklad-view">
	<div class="zaklad-gora">
		<div class="zaklad-zdjecie">
			<?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
				'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>		</div>
		<div class="zaklad-infoG">

			<div class="zaklad-head">
				<span><?php echo $salon['Salon']['name']?></span>
			</div>

			<div class="zaklad-kon">
				<?php echo "Zakład: " ?> </br>
				<?php echo $this->HTML->link($salon['Salon']['name'],array('controller'=>'Pages','action'=>'display'));?> </br>
				<?php echo "Dane kontaktowe: " ?> </br>
				<?php echo "Telefon: ".$salon['Salon']['tel']?> </br>
				<?php echo "Email: ".$salon['Salon']['email']?> </br>
			</div>
		</div>
	</div>
	<div class="zaklad-dol">
		<div class="Uslugi">
			<?php
			$wejsce = 0;
			foreach ($services as $service) {
				$wejsce++;
				echo "Usługa: ".$service['Service']['service_name'].'</br>';
				echo "Cena: ".$service['Service']['price']." PLN".'</br>';
				echo "Czas uslugi: ".$service['Service']['service_time']." min".'</br>'.'</br>';
			}
			if($wejsce == 0 )
			{
				echo "Brak usług".'</br>';
			}
			?>
		</div>
	</div>
</div>