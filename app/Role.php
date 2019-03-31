<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const INVITADO = 1;
    const CANDIDATO = 2;
    const EMPRESA = 3;
    const SUPERVISOR = 4;
    const VENDEDOR = 5 ;
    const ADMIN = 6;
}
