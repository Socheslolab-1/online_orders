<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Query\Builder as QueryBuilder;

class Category extends Model
{
    protected $fillable = ['name'];


    public function products() : HasMany
    {
        return $this->hasMany(Product::class);
    }
}
