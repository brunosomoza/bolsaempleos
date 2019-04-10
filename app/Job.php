<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    const OPEN = "OPEN";
    const FINISHED = "FINISHED";
    const CLOSED = "CLOSED";

    const FULLTIME = 'FULLTIME';
    const PARTIME = 'PARTIME';
    const FREELANCE = 'FREELANCE';

}
