<?php /** @noinspection ALL */

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
//Route::middleware('locale')->prefix('admin')->group(function (){});

Route::middleware('locale')->get('/home', 'HomeController@index')->name('home');

Route::middleware('locale')->resource('/customers', 'CustomerController');
Route::middleware('locale')->resource('/users', 'UserController');
Route::middleware('locale')->resource('/bills', 'BillController');
Route::middleware('locale')->resource('/products', 'ProductController');


Route::middleware('locale')->get('/index', 'ShoppingCartController@index')->name('cart.index');
Route::middleware('locale')->get('/delete/{id}', 'ShoppingCartController@delete')->name('cart.delete');
Route::middleware('locale')->get('/update/{id}', 'ShoppingCartController@update')->name('update');
Route::middleware('locale')->post('/change/{id}', 'ShoppingCartController@changeCart')->name('changeCart');
Route::middleware('locale')->get('/add/{id}', 'ShoppingCartController@changeCart')->name('cart.add');

Route::middleware('locale')->get('/detail/{id}', 'ShoppingProductController@detail')->name('detail');

Route::middleware('locale')->resource('/category', 'CategoryProductController');
Route::middleware('locale')->resource('/pay', 'ShoppingPayController');
Route::middleware('locale')->resource('/bill', 'ShoppingBillController');

Route::get('/weather', 'WeatherController@index')->name('weather');

Route::middleware('locale')->get('/bill-index', 'ShoppingCartController@index')->name('bill.index');

Route::post('/change', 'LangController@changeLanguage')->name('change');

//Route::get('/welcome', 'WelcomeAdminController')->name('welcome');
