<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Buku extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = "tabel_buku";

    protected $fillable = [
        "id_buku",
        "kategori",
        "nama_buku",
        "harga",
        "stok",
        "id_penerbit",
        // "sinopsis",
        // "deskripsi",
        // "harga",
        // "penerbit_id",
        // "pengarang_id",
        // "kategori_id",
    ];

     // Define the relationship with Penerbit (Publisher)
    public function penerbit()
    {
        return $this->belongsTo(Penerbit::class, 'id_penerbit');
    }

    // Define the relationship with Pengarang (Author)
    // public function pengarang()
    // {
    // return $this->belongsTo(Pengarang::class, 'pengarang_id');
    // }

    // public function kategori()
    // {
    // return $this->belongsTo(Kategori::class, 'kategori_id');
    // }
}
