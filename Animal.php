<?php 
namespace App\Models;

use CodeIgniter\Model;

class Animal extends Model{
    protected $table      = 'animales';
    // Uncomment below if you want add primary key
    protected $primaryKey = 'id';
    // Campos permitidos
    protected $allowedFields=['nombre','especie','pais'];
}