<div class="Employee edit">
	<?php echo $this->Form->create('Employee'); ?>
	<fieldset>
		<legend style="text-align: center"><?php echo __('Edycja Pracownika'); ?></legend>
		<?php
		echo $this->Form->input('first_name',array('label' => 'Imie'));
		echo $this->Form->input('last_name',array('label' => 'Nazwisko'));
		echo $this->Form->input('salons_id',array('label' => 'Pracodawca'));

		?>
	</fieldset>
<?php echo $this->Form->end(__('Zapisz zmiany')); ?>
</div>


