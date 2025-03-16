namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

public function index(Request $request)
{
    $query = Product::query();

    if ($request->has('search')) {
        $query->where('name', 'like', '%' . $request->search . '%');
    }

    $products = $query->get();

    return view('products.index', compact('products'));
}
 