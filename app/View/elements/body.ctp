    <?php
    //Wyświetlenie wszystkich salonów(indexów), zrobić z tego kontenery.
        $salons = $this->requestAction(array('controller'=>'salons','action'=>'index'));
    ?>
            <div class="kolumna1">
                <?php foreach($salons as $salon):?>
                    <div class="salon">
                        <div class="zdjecie">
                            <?php echo $this->Html->image('../files/salon/filename/'.$salon['Salon']['id'].'/'.$salon['Salon']['filename'],array(
                                'url' => array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id'])));?>
                        </div>
                        <div class="dane">
                            <div class="nazwaS">
                                <?php echo $salon['Salon']['name'];?>
                            </div>

                            <div class="miasto">
                            <?php echo $salon['Salon']['city'];?>
                            </div>
                            
                            <div class="rezerwacja">
                                <?php echo $this->Html->link('Zarezerwuj miejsce',array('controller' => 'Salons', 'action' => 'view', $salon['Salon']['id']))?>
                            </div>
                        </div>

                    </div>
                <?php endforeach ?>
            </div>
