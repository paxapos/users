<?php


echo $this->Form->create('User');
echo $this->Form->input('id');
echo $this->Form->input("Rol", array("multiple"=>'checkbox'));

echo $this->Form->submit("Actualizar", array('class' => 'btn btn-primary'));
echo $this->Form->end();