<?php
   echo $this->Form->create("Users",array('url'=>'/users/add'));
   echo $this->Form->control('name');
   echo $this->Form->control('email');
   echo $this->Form->control('password');
    echo $this->Form->control('user_type');
   echo $this->Form->button('Submit');
   echo $this->Form->end();
?>