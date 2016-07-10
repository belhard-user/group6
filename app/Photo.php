<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Photo
 *
 * @property integer $id
 * @property integer $order_id
 * @property string $path
 * @property string $th_path
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereOrderId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo wherePath($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Photo whereThPath($value)
 * @mixin \Eloquent
 */
class Photo extends Model
{
    protected $fillable = [
        'path', 'th_path', 'order_id'
    ];

    public $timestamps = false;

    public function order()
    {
        return $this->belongsTo(\App\Order::class);
    }
}
