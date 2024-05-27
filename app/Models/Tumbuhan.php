<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tumbuhan extends Model
{
    use HasFactory;

    protected $tumbuhan = 'tumbuhan';

    protected $fillable = [
        'admin_id',
        'nama',
        'nama_latin',
        'famili',
        'kegunaan',
        'deskripsi',
        'gambar',
        'habitat_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'admin_id', 'id');
    }
}
