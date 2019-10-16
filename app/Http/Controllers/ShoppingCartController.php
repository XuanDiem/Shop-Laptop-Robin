<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

//use mysql_xdevapi\Session;

class ShoppingCartController extends Controller
{


//    public function index()
//    {
//        $cart = Session::get('cart');
//        $array = [];
////        dd($cart);
//        foreach ($cart->items as $item) {
//            array_push($array, $item);
//        }
////        dd($array);
//        return view('guest.order.success', compact('array'));
//    }
//
//    public function detailCart()
//    {
//        $cart = Session::get('cart');
//        dd($cart);
//        return view('guest.cart.detail', compact('cart'));
//    }
//
//    public function addToCart(Request $request, $id)
//    {
//        $product = Product::find($id);
//        if (Session::has('cart')) {
//            $oldCart = Session::get('cart');
//        } else {
//            $oldCart = null;
//        }
//
//        $cart = new Cart($oldCart);
//        $cart->add($product, $id);
//        Session::put('cart', $cart);
//        Session::flush();
//
//        $amountProduct=$product->
//        dd($cart);
//        Session::flash('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
//
//        return redirect()->back();
//
//    }
//
//    public function remove($id)
//    {
//        if (Session::has('cart')) {
//            $oldCart = Session::get('cart');
//            if (count($oldCart->items) > 0) {
//                $cart = new Cart($oldCart);
//                $cart->remove($id);
//                Session::put('cart', $cart);
//                Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công!');
//            } else {
//                Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
//            }
//        } else {
//            Session::flash('delete_error', 'Bạn chưa mua sản phẩm nào');
//        }
//        return redirect()->back();
//    }


    public function index()
    {
        if (Session::has('cart')){
            $cart = Session::get('cart');

        }
//        dd($cart);
        $products = $this->getProduct();
        return view('guest.cart.detail', compact('cart', 'products'));
    }

    public function getProduct()
    {
        $array = [];
//        $cart = $this->getCart();
        $cart = Session::get('cart');
        foreach ($cart->items as $item) {
            array_push($array, $item);
        }
        return $array;
    }


    public function changeCart(Request $request, $id)
    {
        $product = Product::find($id);

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }

        $cart = new Cart($oldCart);
        $cart->changeCart($product, $request);

        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm vào giỏ hàng thành công!');
//        dd($cart);
        return redirect()->back();
    }

    public function delete($id)
    {
        $product = Product::find($id);

        if (Session::has('cart')) {
            $oldCart = Session::get('cart');
        } else {
            $oldCart = null;
        }

        $cart = new Cart($oldCart);
        $cart->deleteInCart($product);

        Session::put('cart', $cart);
        Session::flash('success', 'Xóa sản phẩm khỏi giỏ hàng thành công!');

        return redirect()->back();
    }
}
