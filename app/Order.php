<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Order
 *
 * @property integer $id
 * @property string $title
 * @property string $desc
 * @property float $price
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereDesc($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order wherePrice($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Order whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Order extends Model
{
    protected $fillable = ['title', 'price', 'desc'];

    public function scopeLast($query, $num=15)
    {
        return $query->orderBy('id', 'DESC')->limit($num);
    }

    public function photo()
    {
        return $this->hasMany(\App\Photo::class);
    }

    public function tags()
    {
        return $this->belongsToMany(\App\Tag::class);
    }
}