<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Destinasi extends Model
{
    protected $table = 'destinasi';
    protected $guarded = [];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
    // app/Models/Destinasi.php

    public function ulasans()
    {
        return $this->hasMany(Ulasan::class);
    }
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($destinasi) {
            $destinasi->slug = Str::slug($destinasi->nama);
        });
    }

}