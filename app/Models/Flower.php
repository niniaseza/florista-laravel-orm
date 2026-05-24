<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = 'flowers';

    protected $fillable = [
        'nama', 'jenis', 'harga', 'stok', 'deskripsi', 'category_id'
    ];

    // Relasi: Flower belongsTo Category
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}