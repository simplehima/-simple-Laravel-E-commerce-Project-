use App\Models\Product;
use App\Models\Brand;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 5, 100),
            'description' => $this->faker->sentence(),
            'image_path' => $this->faker->imageUrl(400, 300, 'products'),
            'brand_id' => Brand::factory(),
        ];
    }
}
