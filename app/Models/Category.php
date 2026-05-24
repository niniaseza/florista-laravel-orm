<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'icon', 'description'];

    // Relasi: Category hasMany Flowers
    public function flowers()
    {
        return $this->hasMany(Flower::class);
    }
}