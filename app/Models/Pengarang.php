<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pengarang extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "pengarang";

    protected $fillable = [
        "nama_pengarang",
        "foto",
        "tel",
        "email",
        "web",
        "ig",
        "x",
        "fb",
        "youtube",
        "linkedin",
    ];

    public function buku()
    {
        return $this->hasMany(Buku::class, 'pengarang_id');
    }
}
