<?php

helper('form');

echo form_open('bhaskara/inserir');
echo '<pre>';
echo form_label('        *** FÓRMULA DE BHASKARA ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               ALTERAR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo form_label('Digite o ID a alterar ', 'id');
echo form_input('id', $editar['id'], 'readonly style="border:1px solid red;"');
echo form_label('Digite  o  valor de A ', 'valorA');
echo form_input('a', $editar['a']);
echo form_label('Digite  o valor  de B ', 'valorB');
echo form_input('b', $editar['b']);
echo form_label('Digite  o valor  de C ', 'valorC');
echo form_input('c', $editar['c']);
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'ALTERAR');
echo form_close();

//var_dump($editar);
//var_dump($editar['a']);
?>