<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Penerbit extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tabel_penerbit";

    protected $fillable = [
        "id_penerbit",
        "nama",
        "alamat",
        "kota",
        "telepon",
    ];

    // Define the reverse relationship with Buku (Book)
    public function buku()
    {
        return $this->hasMany(Buku::class, 'id_penerbit');
    }
}
