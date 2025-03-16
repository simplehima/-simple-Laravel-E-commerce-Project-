use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Brand::factory(5)->create();
        \App\Models\Product::factory(20)->create();
        \App\Models\Order::factory(10)->create();
    }
}
