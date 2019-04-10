<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    const TERMINADO = 'TERMINADO';
    const CURSANDO = 'CURSANDO';
    const ABANDONADO = 'ABANDONADO';

    const SECUNDARIA = 'SECUNDARIA';
    const INSTITUTO = 'INSTITUTO';
    const UNIVERSIDAD = 'UNIVERSIDAD';
    const MAESTRIA = 'MAESTRIA';
    const DOCTORADO = 'DOCTORADO';
    const OTROS = 'OTROS';

}
