<?php

// app/Models/Usuario.php
namespace App\Models;

class Usuario extends BaseModel
{
    protected $table = 'usuarios';
    protected $hidden = ['senha_hash'];
}
