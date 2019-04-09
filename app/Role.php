<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Role
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Role query()
 * @mixin \Eloquent
 */
class Role extends Model
{
    const INVITADO = 1;
    const CANDIDATO = 2;
    const EMPRESA = 3;
    const SUPERVISOR = 4;
    const VENDEDOR = 5 ;
    const ADMIN = 6;
}
