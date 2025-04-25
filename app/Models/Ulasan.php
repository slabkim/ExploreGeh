<?php

// app/Models/Ulasan.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ulasan extends Model
{
    protected $fillable = ['nama', 'email', 'ulasan', 'destinasi_id'];

    public function destinasi()
    {
        return $this->belongsTo(Destinasi::class);
    }
}
