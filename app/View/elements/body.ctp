    <?php
    //Wyświetlenie wszystkich salonów(indexów), zrobić z tego kontenery.
        $salons = $this->requestAction(array('controller'=>'salons','action'=>'index'));
    ?>

				<div class='row'>
                <?php foreach($salons as $salon):?>

                    <div class="col-md-4">
                    <div class='salon-tile'>
                        <div class="salon-tile__img-container">
                            <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
                                'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>
                        </div>

                        <div class="salon-tile__info-block">
                            <h4 class="salon-tile__name">
                                <?php echo $salon['Salon']['name'];?>
                            </h4>

                            <div class="label label-default salon-tile__city">
                            <?php echo $salon['Salon']['city'];?>
                            </div>

                            <div class="salon-tile__reservation">
                            	<div class='salon-tile__reservation-btn btn btn-default'>
                                <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']))?>
                            	</div>
                            </div>
                        </div>
					</div>
                    </div>
                <?php endforeach ?>
                </div>
