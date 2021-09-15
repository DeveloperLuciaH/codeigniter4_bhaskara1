<?php
helper('form');
echo form_open('bhaskara/inserir');

echo '<pre>';
echo form_label('        *** FÓRMULA DE BHASKARA ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               INSERIR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo '<br>';
echo form_label('Digite o valor de A ', 'valorA');
echo form_input('a', '');
echo form_label('Digite o valor de B ', 'valorB');
echo form_input('b', '');
echo form_label('Digite o valor de C ', 'valorC');
echo form_input('c', '');
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'CALCULAR');
echo form_close(); 
?>