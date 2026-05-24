<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Flower;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Buat kategori
        $rose = Category::create(['name' => 'Rose', 'icon' => '🌹', 'description' => 'Roses are the most iconic flowers in the world, symbolizing love, beauty, and passion.']);
        $jasmine = Category::create(['name' => 'Jasmine', 'icon' => '🌼', 'description' => 'Jasmine is a sacred flower known for its intoxicating fragrance and cultural significance.']);
        $orchid = Category::create(['name' => 'Orchid', 'icon' => '🌸', 'description' => 'Orchids are exotic and rare blooms that symbolize luxury, elegance, and admiration.']);
        $tulip = Category::create(['name' => 'Tulip', 'icon' => '🌷', 'description' => 'Tulips are cheerful blooms that represent hope, new beginnings, and warm friendship.']);
        $lily = Category::create(['name' => 'Lily', 'icon' => '🌻', 'description' => 'Lilies are majestic flowers representing purity, renewal, and the beauty of the soul.']);
        $sunflower = Category::create(['name' => 'Sunflower', 'icon' => '🌻', 'description' => 'Sunflowers radiate joy, loyalty, and positivity, always turning toward the light.']);
        $lavender = Category::create(['name' => 'Lavender', 'icon' => '💜', 'description' => 'Lavender symbolizes serenity, devotion, and grace with its calming purple hue.']);

        // Update flowers dengan category_id
        Flower::where('jenis', 'Rose')->update(['category_id' => $rose->id]);
        Flower::where('jenis', 'Jasmine')->update(['category_id' => $jasmine->id]);
        Flower::where('jenis', 'Orchid')->update(['category_id' => $orchid->id]);
        Flower::where('jenis', 'Tulip')->update(['category_id' => $tulip->id]);
        Flower::where('jenis', 'Lily')->update(['category_id' => $lily->id]);
        Flower::where('jenis', 'Sunflower')->update(['category_id' => $sunflower->id]);
        Flower::where('jenis', 'Lavender')->update(['category_id' => $lavender->id]);
    }
}