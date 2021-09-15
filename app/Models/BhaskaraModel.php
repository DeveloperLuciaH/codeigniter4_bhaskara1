<?php

namespace App\Models;
use CodeIgniter\Model;

class BhaskaraModel extends Model

{
    // nome da tabela no banco de dados
    protected $table      = 'bhaskara';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    // campos da tabela bhaskara do banco de dados
    protected $allowedFields = ['a', 'b', 'c', 'delta','x1','x2'];

    protected $useTimestamps = false;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;

}