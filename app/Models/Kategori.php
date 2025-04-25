<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $guarded = [];

    public function destinasi()
    {
        return $this->hasMany(Destinasi::class);
    }
}