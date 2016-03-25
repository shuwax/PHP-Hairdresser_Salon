<div class="menu">
     <?php
        if(AuthComponent::user())
        {
            echo 'ZALOGOWANY JAKO: '.AuthComponent::user('username'). ' ';
            echo  $this->HTML->link('Wyloguj',array('controller' => 'Users','action'=>'logout'));
        }
     else
         echo  $this->HTML->link('Zaloguj sie...',array('controller' => 'Users','action'=>'login'));
    ?>
</div>