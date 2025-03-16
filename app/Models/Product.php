namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'description', 'image_path', 'brand_id'];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

 