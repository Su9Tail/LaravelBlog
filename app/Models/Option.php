<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Option
 *
 * @mixin \Eloquent
 * @property integer $id
 * @property string $key
 * @property string $value
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Option whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Option whereKey($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Option whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Option whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Models\Option whereUpdatedAt($value)
 */
class Option extends Model
{
    //
}
