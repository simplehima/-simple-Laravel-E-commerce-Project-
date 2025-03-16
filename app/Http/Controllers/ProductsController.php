namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::with('brand') // Eager loading
                    ->when($request->search, function ($query, $search) {
                        return $query->where('name', 'like', "%{$search}%");
                    })
                    ->paginate(6);

        return view('products.index', compact('products'));
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }
}

