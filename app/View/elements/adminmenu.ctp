<nav class="menu">
        <div class="menu__divider">
            <div class="user-info">
                <i class="user-info__icon glyphicon glyphicon-user"></i>
                <p><?php echo AuthComponent::user('username')?></p>
            </div>
        </div>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Kokpit</span>
            <li><?php echo $this->HTML->link('Strona główna',array('controller'=>'../Pages','action'=>'display'));?></li>
        </ul>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Salony</span>
            <li><?php echo $this->HTML->link('Wszystkie salony',array('controller'=>'Salons','action'=>'index'));?></li>
            <li><?php echo $this->HTML->link('Dodaj salony',array('controller'=>'Salons','action'=>'add'));?></li>
        </ul>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Usługi</span>
            <li><?php echo $this->HTML->link('Wszystkie usługi',array('controller'=>'services','action'=>'index'));?></li>
            <li><?php echo $this->HTML->link('Dodaj usługe',array('controller'=>'services','action'=>'add'));?></li>
        </ul>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Pracownicy</span>
            <li><?php echo $this->HTML->link('Wszyscy pracownicy',array('controller'=>'Employees','action'=>'index'));?></li>
            <li><?php echo $this->HTML->link('Dodaj pracownika',array('controller'=>'Employees','action'=>'add'));?></li>
        </ul>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Rezerwacje</span>
            <li><?php echo $this->HTML->link('Wszystkie rezerwacje',array('controller'=>'Reservations','action'=>'index'));?></li>
            <li><?php echo $this->HTML->link('Twoje rezerwacje',array('controller'=>'Pages','action'=>'display'));?></li>
        </ul>
        <ul class=" menu__divider">
        	<span class='menu__section-name'>Użytkownicy</span>
            <li><?php echo $this->HTML->link('Wszystcy użytkownicy',array('controller'=>'Users','action'=>'index'));?></li>
            <li><?php echo $this->HTML->link('Dodaj nowego',array('controller'=>'Users','action'=>'add'));?></li>
            <li><?php echo $this->HTML->link('Twój profil',array('controller'=>'Users','action'=>'view/'.AuthComponent::user('id')));?></li>
        </ul>
    </nav>
