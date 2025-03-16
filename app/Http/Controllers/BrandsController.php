namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandsController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('brands.index', compact('brands'));
    }

    public function show(Brand $brand)
    {
        $products = $brand->products()->paginate(6);
        return view('brands.show', compact('brand', 'products'));
    }
}
