-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.4.3 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.8.0.6908
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping data for table toko_bunga.cache: ~0 rows (approximately)

-- Dumping data for table toko_bunga.cache_locks: ~0 rows (approximately)

-- Dumping data for table toko_bunga.categories: ~7 rows (approximately)
INSERT INTO `categories` (`id`, `name`, `icon`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Rose', '🌹', 'Roses are the most iconic flowers in the world, symbolizing love, beauty, and passion.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(2, 'Jasmine', '🌼', 'Jasmine is a sacred flower known for its intoxicating fragrance and cultural significance.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(3, 'Orchid', '🌸', 'Orchids are exotic and rare blooms that symbolize luxury, elegance, and admiration.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(4, 'Tulip', '🌷', 'Tulips are cheerful blooms that represent hope, new beginnings, and warm friendship.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(5, 'Lily', '🌻', 'Lilies are majestic flowers representing purity, renewal, and the beauty of the soul.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(6, 'Sunflower', '🌻', 'Sunflowers radiate joy, loyalty, and positivity, always turning toward the light.', '2026-05-24 06:31:57', '2026-05-24 06:31:57'),
	(7, 'Lavender', '💜', 'Lavender symbolizes serenity, devotion, and grace with its calming purple hue.', '2026-05-24 06:31:57', '2026-05-24 06:31:57');

-- Dumping data for table toko_bunga.failed_jobs: ~0 rows (approximately)

-- Dumping data for table toko_bunga.flowers: ~12 rows (approximately)
INSERT INTO `flowers` (`id`, `nama`, `jenis`, `harga`, `stok`, `deskripsi`, `created_at`, `updated_at`, `category_id`) VALUES
	(1, 'Red Rose', 'Rose', 25000, 50, 'The Red Rose is the ultimate symbol of passionate love and deep affection. Throughout centuries, poets and lovers have offered this timeless bloom to express what words cannot. Each velvety petal carries a whisper of devotion, making it the most cherished flower in the world. Perfect for anniversaries, Valentine\'s Day, or any moment you wish to say "I love you" from the depths of your heart.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 1),
	(2, 'Pink Rose', 'Rose', 20000, 40, 'The Pink Rose embodies grace, admiration, and gentle affection. Softer than red yet equally meaningful, pink roses convey sweetness and joy. They are the perfect gift for a dear friend, a beloved mother, or anyone who deserves to feel appreciated. Their delicate fragrance and soft petals make them one of the most beloved flowers across all cultures.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 1),
	(3, 'White Rose', 'Rose', 22000, 35, 'The White Rose is a timeless emblem of purity, new beginnings, and heartfelt reverence. Often seen at weddings and ceremonies, its pristine petals speak of innocence and sincerity. Gifting a white rose is a gesture of the deepest respect and admiration — a bloom that transcends trends and remains eternally beautiful.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 1),
	(4, 'White Jasmine', 'Jasmine', 15000, 60, 'White Jasmine is Indonesia\'s national flower, a sacred bloom that represents purity, sincerity, and spiritual grace. Its intoxicating fragrance has been used in ceremonies, weddings, and religious rituals for centuries. The tiny white petals carry an immense cultural significance — a reminder that true beauty is found in simplicity and a pure heart.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 2),
	(5, 'Purple Orchid', 'Orchid', 75000, 20, 'The Purple Orchid is a rare and exotic bloom that symbolizes luxury, admiration, and profound respect. Orchids have fascinated botanists and flower lovers for centuries with their extraordinary diversity and elegance. A purple orchid is a statement of refined taste — gifting one says "I admire you deeply." Its long-lasting blooms make it a stunning centerpiece for any home or occasion.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 3),
	(6, 'White Orchid', 'Orchid', 80000, 15, 'The White Orchid is the pinnacle of floral elegance — a bloom that commands attention with its pristine, sculptural petals. Symbolizing rare beauty and strength, white orchids are prized by collectors and gifted to those who deserve only the finest. Their long-lasting nature makes them a cherished presence in any space, a daily reminder of life\'s quiet magnificence.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 3),
	(7, 'Yellow Tulip', 'Tulip', 45000, 30, 'Yellow Tulips radiate sunshine, cheerfulness, and warm friendship. Originating from the fields of the Netherlands, these vibrant blooms have traveled the world as symbols of hope and new beginnings. When you gift a yellow tulip, you are sharing a piece of sunshine — a reminder that brighter days are always ahead. Perfect for celebrations, graduations, or simply brightening someone\'s day.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 4),
	(8, 'Purple Tulip', 'Tulip', 48000, 25, 'The Purple Tulip carries an air of royalty and mystery. In the language of flowers, purple tulips represent eternal love and admiration. Their rich, velvety hue makes them one of the most striking blooms in any arrangement. A purple tulip is the perfect gift for someone extraordinary — someone who inspires you simply by existing.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 4),
	(9, 'White Lily', 'Lily', 35000, 25, 'The White Lily stands as one of the most majestic flowers in the world, representing purity, renewal, and the beauty of the soul. Used in sacred ceremonies across many cultures, white lilies carry a spiritual significance that transcends time. Their trumpet-shaped blooms and heavenly fragrance fill any space with elegance and serenity — a truly regal flower for those who appreciate timeless beauty.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 5),
	(10, 'Stargazer Lily', 'Lily', 55000, 18, 'The Stargazer Lily is one of the most dramatic and breathtaking flowers in existence. With its deep pink petals splashed with white edges and rich crimson speckles, it gazes upward as if reaching for the stars. This stunning bloom symbolizes ambition, prosperity, and the pursuit of dreams. Its powerful fragrance fills entire rooms, making it impossible to ignore.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 5),
	(11, 'Sunflower', 'Sunflower', 30000, 45, 'The Sunflower is nature\'s most joyful creation — a golden bloom that follows the sun from dawn to dusk. Symbolizing loyalty, adoration, and unwavering positivity, sunflowers bring an instant warmth to any space. Their bold, cheerful faces are a reminder to always turn toward the light, no matter the season. A bouquet of sunflowers is pure, unfiltered happiness.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 6),
	(12, 'Lavender', 'Lavender', 40000, 35, 'Lavender is more than a flower — it is an experience. Known across the world for its calming properties and enchanting purple hue, lavender symbolizes serenity, devotion, and grace. The gentle rustling of lavender fields in Provence has inspired artists, healers, and dreamers for centuries. Gift lavender to someone who needs peace, or keep it close as a daily reminder to breathe and be still.', '2026-05-16 23:56:39', '2026-05-24 06:31:57', 7);

-- Dumping data for table toko_bunga.jobs: ~0 rows (approximately)

-- Dumping data for table toko_bunga.job_batches: ~0 rows (approximately)

-- Dumping data for table toko_bunga.migrations: ~0 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2026_05_17_051053_create_flowers_table', 1),
	(5, '2026_05_24_131733_create_categories_table', 2);

-- Dumping data for table toko_bunga.password_reset_tokens: ~0 rows (approximately)

-- Dumping data for table toko_bunga.sessions: ~4 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('aVtwgNSTIO0F7KJxvxch6Vuuz1U5NQPBRIzai2Zy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Code/1.120.0 Chrome/142.0.7444.265 Electron/39.8.8 Safari/537.36', 'eyJfdG9rZW4iOiJBblBvR09kT2JlQ0I1dUg0QkpHUGJ0ZkVjb04xNEZhN0NKcFowdU4wIiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwIiwicm91dGUiOm51bGx9LCJfZmxhc2giOnsib2xkIjpbXSwibmV3IjpbXX19', 1779632286),
	('IbVY21ZGHf2vbdCMyaimviFdh9HCdJNWMIzEPTag', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/148.0.0.0 Safari/537.36 Edg/148.0.0.0', 'eyJfdG9rZW4iOiJYVDR6c0pHVHJOR2FiMXBuZmE2VDFPUDJ4cFdHWXdzTzV6Wm9MQmF2IiwiX3ByZXZpb3VzIjp7InVybCI6Imh0dHA6XC9cLzEyNy4wLjAuMTo4MDAwXC9mbG93ZXJzXC8xMSIsInJvdXRlIjoiZmxvd2Vycy5zaG93In0sIl9mbGFzaCI6eyJvbGQiOltdLCJuZXciOltdfX0=', 1779631860);

-- Dumping data for table toko_bunga.users: ~0 rows (approximately)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
