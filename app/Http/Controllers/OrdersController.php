namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function index()
    {
        $orders = Order::with(['product'])->get();
        return view('orders.index', compact('orders'));
    }

    public function store(Request $request)
    {
        Order::create([
            'product_id' => $request->product_id,
            'user_id' => auth()->id(),
        ]);

        return redirect()->back()->with('success', 'Order placed successfully!');
    }
}
