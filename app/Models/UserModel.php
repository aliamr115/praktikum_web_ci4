<?php

namespace App\Models;

use CodeIgniter\Model;

/** Tabel `user` pada database db_web (Modul 10: id_user, username, password). */
class UserModel extends Model
{
    protected $table            = 'user';
    protected $primaryKey       = 'id_user';
    protected $useAutoIncrement = false;
    protected $returnType       = 'array';
    protected $allowedFields    = ['id_user', 'username', 'password'];
}
