<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak menggunakan nama konvensional (plural form)
    protected $table = 'category';
    
    // Menentukan primary key, jika menggunakan selain 'id'
    protected $primaryKey = 'id_category';
    
    // Aktifkan timestamps untuk created_at dan updated_at
    public $timestamps = true;

    // Kolom yang dapat diisi mass-assignment
    protected $fillable = [
        'name_category',  // Kolom nama kategori
        'description',    // Kolom deskripsi kategori
    ];

    // Relasi dengan model Destination (misalnya, kategori memiliki banyak destinasi)
    public function destinations()
    {
        return $this->hasMany(Destination::class, 'id_category');
    }
}
