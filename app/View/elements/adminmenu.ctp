

<div class="adminwysokosc">
    <div class="adminmenupanel">
        <ul class="adminmenu">
            <li style="color: white"><?php echo "Witaj: ".AuthComponent::user('username')?></li>
            <li><?php echo $this->HTML->link('Kokpit',array('controller'=>'Salons','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Strona główna',array('controller'=>'../Pages','action'=>'display'));?></li>
            </ul>

            <li><?php echo $this->HTML->link('Salony',array('controller'=>'Salons','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Wszystkie salony',array('controller'=>'Salons','action'=>'index'));?></li>
                <li><?php echo $this->HTML->link('Dodaj salony',array('controller'=>'Salons','action'=>'add'));?></li>
            </ul>

            <li><?php echo $this->HTML->link('Usługi',array('controller'=>'services','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Wszystkie usługi',array('controller'=>'services','action'=>'index'));?></li>
                <li><?php echo $this->HTML->link('Dodaj usługe',array('controller'=>'services','action'=>'add'));?></li>
            </ul>

            <li><?php echo $this->HTML->link('Pracownicy',array('controller'=>'Employees','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Wszyscy pracownicy',array('controller'=>'Employees','action'=>'index'));?></li>
                <li><?php echo $this->HTML->link('Dodaj pracownika',array('controller'=>'Employees','action'=>'add'));?></li>
            </ul>

            <li><?php echo $this->HTML->link('Rezerwacje',array('controller'=>'Reservations','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Wszystkie rezerwacje',array('controller'=>'Reservations','action'=>'index'));?></li>
                <li><?php echo $this->HTML->link('Twoje rezerwacje',array('controller'=>'Pages','action'=>'display'));?></li>

            </ul>

            <li><?php echo $this->HTML->link('Użytkownicy',array('controller'=>'Users','action'=>'index'));?></li>
            <ul class="submenu">
                <li><?php echo $this->HTML->link('Wszystcy użytkownicy',array('controller'=>'Users','action'=>'index'));?></li>
                <li><?php echo $this->HTML->link('Dodaj nowego',array('controller'=>'Users','action'=>'add'));?></li>
                <li><?php echo $this->HTML->link('Twój profil',array('controller'=>'Users','action'=>'view/'.AuthComponent::user('id')));?></li>

            </ul>

        </ul>
    </div>
</div>