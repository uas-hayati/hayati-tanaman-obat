<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habitat extends Model
{
    use HasFactory;

    protected $habitat = 'habitat';

    protected $fillable = [
        'jenis_habitat',
        'tumbuhan_id',
        'lokasi_id'
    ];

    public function tumbuhan() {
        return $this->belongsTo(Tumbuhan::class, 'tumbuhan_id', 'id');
    }
}
