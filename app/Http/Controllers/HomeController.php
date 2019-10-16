<?php

namespace App\Http\Controllers;

use App\Product;
use App\Service\ProductServiceInterface;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @var ProductServiceInterface
     */
    private $productService;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(ProductServiceInterface $productService)
    {
//        $this->middleware('auth');
        $this->productService = $productService;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::all();
        return view('guest.home', compact('products'));
    }

    public function search(Request $request)
    {

        $keyword = $request->input('keyword');
        if (!$keyword) {
            return redirect()->route('home');
        }

        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')->paginate(5);
        return view('guest.home', compact('products'));

    }

}
