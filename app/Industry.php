<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Industry
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry query()
 * @mixin \Eloquent
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Industry whereUpdatedAt($value)
 */
class Industry extends Model
{

}
