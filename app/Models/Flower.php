<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $table = 'flowers';

    protected $fillable = [
        'nama', 'jenis', 'harga', 'stok', 'deskripsi'
    ];
}