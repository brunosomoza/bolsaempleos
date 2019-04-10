<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    const SECUNDARIA = 'SECUNDARIA';
    const TECNICO = 'INSTITUTO';
    const UNIVERSITARIO = 'UNIVERSIDAD';
    const MAESTRIA = 'MAESTRIA';
    const DOCTORADO = 'DOCTORADO';
    const OTROS = 'OTRO';

}
