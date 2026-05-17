<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Flower;

class FlowerSeeder extends Seeder
{
    public function run(): void
    {
        Flower::truncate();
        $flowers = [
            ['nama' => 'Red Rose', 'jenis' => 'Rose', 'harga' => 25000, 'stok' => 50,
            'deskripsi' => 'The Red Rose is the ultimate symbol of passionate love and deep affection. Throughout centuries, poets and lovers have offered this timeless bloom to express what words cannot. Each velvety petal carries a whisper of devotion, making it the most cherished flower in the world. Perfect for anniversaries, Valentine\'s Day, or any moment you wish to say "I love you" from the depths of your heart.'],

            ['nama' => 'Pink Rose', 'jenis' => 'Rose', 'harga' => 20000, 'stok' => 40,
            'deskripsi' => 'The Pink Rose embodies grace, admiration, and gentle affection. Softer than red yet equally meaningful, pink roses convey sweetness and joy. They are the perfect gift for a dear friend, a beloved mother, or anyone who deserves to feel appreciated. Their delicate fragrance and soft petals make them one of the most beloved flowers across all cultures.'],

            ['nama' => 'White Rose', 'jenis' => 'Rose', 'harga' => 22000, 'stok' => 35,
            'deskripsi' => 'The White Rose is a timeless emblem of purity, new beginnings, and heartfelt reverence. Often seen at weddings and ceremonies, its pristine petals speak of innocence and sincerity. Gifting a white rose is a gesture of the deepest respect and admiration — a bloom that transcends trends and remains eternally beautiful.'],

            ['nama' => 'White Jasmine', 'jenis' => 'Jasmine', 'harga' => 15000, 'stok' => 60,
            'deskripsi' => 'White Jasmine is Indonesia\'s national flower, a sacred bloom that represents purity, sincerity, and spiritual grace. Its intoxicating fragrance has been used in ceremonies, weddings, and religious rituals for centuries. The tiny white petals carry an immense cultural significance — a reminder that true beauty is found in simplicity and a pure heart.'],

            ['nama' => 'Purple Orchid', 'jenis' => 'Orchid', 'harga' => 75000, 'stok' => 20,
            'deskripsi' => 'The Purple Orchid is a rare and exotic bloom that symbolizes luxury, admiration, and profound respect. Orchids have fascinated botanists and flower lovers for centuries with their extraordinary diversity and elegance. A purple orchid is a statement of refined taste — gifting one says "I admire you deeply." Its long-lasting blooms make it a stunning centerpiece for any home or occasion.'],

            ['nama' => 'White Orchid', 'jenis' => 'Orchid', 'harga' => 80000, 'stok' => 15,
            'deskripsi' => 'The White Orchid is the pinnacle of floral elegance — a bloom that commands attention with its pristine, sculptural petals. Symbolizing rare beauty and strength, white orchids are prized by collectors and gifted to those who deserve only the finest. Their long-lasting nature makes them a cherished presence in any space, a daily reminder of life\'s quiet magnificence.'],

            ['nama' => 'Yellow Tulip', 'jenis' => 'Tulip', 'harga' => 45000, 'stok' => 30,
            'deskripsi' => 'Yellow Tulips radiate sunshine, cheerfulness, and warm friendship. Originating from the fields of the Netherlands, these vibrant blooms have traveled the world as symbols of hope and new beginnings. When you gift a yellow tulip, you are sharing a piece of sunshine — a reminder that brighter days are always ahead. Perfect for celebrations, graduations, or simply brightening someone\'s day.'],

            ['nama' => 'Purple Tulip', 'jenis' => 'Tulip', 'harga' => 48000, 'stok' => 25,
            'deskripsi' => 'The Purple Tulip carries an air of royalty and mystery. In the language of flowers, purple tulips represent eternal love and admiration. Their rich, velvety hue makes them one of the most striking blooms in any arrangement. A purple tulip is the perfect gift for someone extraordinary — someone who inspires you simply by existing.'],

            ['nama' => 'White Lily', 'jenis' => 'Lily', 'harga' => 35000, 'stok' => 25,
            'deskripsi' => 'The White Lily stands as one of the most majestic flowers in the world, representing purity, renewal, and the beauty of the soul. Used in sacred ceremonies across many cultures, white lilies carry a spiritual significance that transcends time. Their trumpet-shaped blooms and heavenly fragrance fill any space with elegance and serenity — a truly regal flower for those who appreciate timeless beauty.'],

            ['nama' => 'Stargazer Lily', 'jenis' => 'Lily', 'harga' => 55000, 'stok' => 18,
            'deskripsi' => 'The Stargazer Lily is one of the most dramatic and breathtaking flowers in existence. With its deep pink petals splashed with white edges and rich crimson speckles, it gazes upward as if reaching for the stars. This stunning bloom symbolizes ambition, prosperity, and the pursuit of dreams. Its powerful fragrance fills entire rooms, making it impossible to ignore.'],

            ['nama' => 'Sunflower', 'jenis' => 'Sunflower', 'harga' => 30000, 'stok' => 45,
            'deskripsi' => 'The Sunflower is nature\'s most joyful creation — a golden bloom that follows the sun from dawn to dusk. Symbolizing loyalty, adoration, and unwavering positivity, sunflowers bring an instant warmth to any space. Their bold, cheerful faces are a reminder to always turn toward the light, no matter the season. A bouquet of sunflowers is pure, unfiltered happiness.'],

            ['nama' => 'Lavender', 'jenis' => 'Lavender', 'harga' => 40000, 'stok' => 35,
            'deskripsi' => 'Lavender is more than a flower — it is an experience. Known across the world for its calming properties and enchanting purple hue, lavender symbolizes serenity, devotion, and grace. The gentle rustling of lavender fields in Provence has inspired artists, healers, and dreamers for centuries. Gift lavender to someone who needs peace, or keep it close as a daily reminder to breathe and be still.'],
        ];

        foreach ($flowers as $flower) {
            Flower::create($flower);
        }
    }
}