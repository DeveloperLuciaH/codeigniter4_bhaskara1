<?php

helper('form');

echo form_open('bhaskara/excluir');
echo '<pre>';
echo form_label('        *** FÓRMULA DE BHASKARA ***         ', '');
echo form_label('<br><br><br>---------------------------------------------- <br>', '');
echo form_label('               EXCLUIR DADOS               ');
echo '<br>';
echo form_label('---------------------------------------------- <br>', '');
echo '<br>';
echo form_label('Digite o ID a excluir ', 'id');
echo form_input('id', '');
echo '<br>';
echo '<br>';
echo form_submit('mysubmit', 'EXCLUIR');
echo form_close();

?>