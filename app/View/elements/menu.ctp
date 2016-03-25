<div class="menu">
     <?php
        if(AuthComponent::user())
        {
            echo 'ZALOGOWANY JAKO: '.AuthComponent::user('username'). ' ';
            echo  $this->HTML->link('Wyloguj',array('controller' => 'Users','action'=>'logout')),'</br>';
            echo  $this->HTML->link('Panel admina',array('controller' => 'admin/salons','action'=>'index'));
        }
     else {
         echo $this->HTML->link('Zaloguj sie...', array('controller' => 'Users', 'action' => 'login')) . '</br>';
         echo $this->HTML->link('Dodaj konto...', array('controller' => 'Users', 'action' => 'add'));
     }
    ?>
</div>