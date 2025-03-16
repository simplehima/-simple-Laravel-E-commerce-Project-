namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'name' => $faker->word,
                'price' => $faker->randomFloat(2, 5, 100),
                'description' => $faker->sentence,
                'image_path' => $faker->imageUrl(200, 200),
            ]);
        }
    }
}
