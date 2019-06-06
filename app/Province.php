<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Province
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $coderegion
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereCoderegion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Province whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Province extends Model
{
    //
}
