<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Test
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property integer $age
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Test whereAge($value)
 * @mixin \Eloquent
 */
class Test extends Model
{

}