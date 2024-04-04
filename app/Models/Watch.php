<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Watch
 *
 * @property $id
 * @property $title
 * @property $description
 * @property $price
 * @property $stock
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Watch extends Model
{
    

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'price', 'stock'];



}
