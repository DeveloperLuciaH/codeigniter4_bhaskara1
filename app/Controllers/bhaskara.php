<?php

// aquilo que define a organização lógica das nossas variáveis que está no Controllers
// usando também o Models onde está a informação do banco de dados

namespace App\Controllers;
use App\Models;

// class 'nome que eu crio' extends BaseController ojeto herdado já existente no Codeigniter
// para acessar a base chamada Bhaskara na url

class Bhaskara extends BaseController

{

     public function exibeInserir()
    {
        echo view('insere');

    }

    public function exibeAlterar()
    {
        echo view('altera');

    }

    public function exibeExcluir()
    {
        echo view('exclui');

    }

    
    // função para insert e update no banco, onde o isset verifica se o id foi iniciado

    public function inserir()
    {
        if(isset($this->request->getPost()['id']))
        { 
            $id = $this->request->getPost()['id'];
    } else
        {
            $id = FALSE;
        }

        $a = $this->request->getPost()['a'];
        $b = $this->request->getPost()['b'];
        $c = $this->request->getPost()['c'];

        $delta = ($b * $b) - (4 * $a * $c);
        $x1 = (- $b + sqrt($delta)) / (2 * $a);
        $x2 = (- $b - sqrt($delta)) / (2 * $a);

        // instancia o Bhaskara Model para inserir dados no banco
        $bhasModel = new \App\Models\BhaskaraModel();

        $data = [
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'delta' => $delta,
            'x1' => $x1,
            'x2' => $x2,
        ];

        if($id != FALSE) 
        {
            $data['id'] = $id;
        }
        
        $resultado = $bhasModel->save($data);
        var_dump($resultado);      
             
    }

    public function ler()
    {
        //com array bidimensional (linhas e colunas), o mais fácil é utilizar o foreach 
        // inclui uma chave a mais

        $bhasModel = new \App\Models\BhaskaraModel();
		// igual select * from bhaskara
		$todos = $bhasModel->findAll();
		
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['excluir'] = '<a href="excluir/' . $linha['id'] . '"> EXCLUIR </a>';
        }  
        
        foreach ($todos as $chave => $linha)
        {
            $todos[$chave]['editar'] = '<a href="editar/' . $linha['id'] . '"> ALTERAR </a>';
        }  
        


        $data['tabela'] = $todos;
		echo view('bhaskaraView', $data);       

    
    }

    public function excluir($id)
	{
		
		$bhasModel = new \App\Models\BhaskaraModel();
		
		$resultado = $bhasModel->delete($id);		
		var_dump($resultado);        	
	}

    public function editar($id)
    {
        $bhasModel = new \App\Models\BhaskaraModel();
        // find só seleciona a linha pelo id
        $todos = $bhasModel->find($id);
        $data['editar'] = $todos;
		echo view('altera', $data); 
        //var_dump($data);
             
    }

}
