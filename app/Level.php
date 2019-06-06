<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Level
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Level query()
 * @mixin \Eloquent
 */
class Level extends Model
{
    const SECUNDARIA = 'SECUNDARIA';
    const TECNICO = 'INSTITUTO';
    const UNIVERSITARIO = 'UNIVERSIDAD';
    const MAESTRIA = 'MAESTRIA';
    const DOCTORADO = 'DOCTORADO';
    const OTROS = 'OTRO';

}
