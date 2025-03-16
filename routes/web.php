use App\Http\Controllers\ProductsController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\OrdersController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
Route::get('/', function () {
    return view('welcome');
});

// Products Routes
Route::resource('products', ProductsController::class);

// Brands Routes
Route::resource('brands', BrandsController::class);

// Orders Routes
Route::resource('orders', OrdersController::class);
