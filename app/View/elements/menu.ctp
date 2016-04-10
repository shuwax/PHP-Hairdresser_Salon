<div class="menu">
     <?php
        if(AuthComponent::user())
        {
            echo $this->Html->para(null,'ZALOGOWANY JAKO: '.AuthComponent::user('username'), array('class' => 'nav-alert alert alert-info'));
            echo  $this->HTML->link('Wyloguj',array('controller' => 'Users','action'=>'logout'),array('class' => 'nav-btn btn btn-danger'));
            echo  $this->HTML->link('Panel admina',array('controller' => 'admin/salons','action'=>'index'),array('class' => 'nav-btn btn btn-primary'));
        }
     else {
         echo $this->HTML->link('Zaloguj sie...', array('controller' => 'Users', 'action' => 'login'), array('class' => 'nav-btn btn btn-success')) ;
         echo $this->HTML->link('Dodaj konto...', array('controller' => 'Users', 'action' => 'add'), array('class' => 'nav-btn btn btn-warning'));
     }
    ?>
</div>
