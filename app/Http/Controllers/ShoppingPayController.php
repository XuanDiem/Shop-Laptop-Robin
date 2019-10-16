<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Customer;
use App\Http\Requests\CreateGuestRequest;
use App\Product;
use App\Service\BillServiceInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingPayController extends Controller
{

    public $billService;

    public function __construct(BillServiceInterface $billService)
    {
        $this->billService = $billService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cart = Session::get('cart');
        return view('guest.information.create', compact('cart'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateGuestRequest $request)
    {


        $guest = new Customer();
        $guest->name = $request->name;
        $guest->email = $request->email;
        $guest->address = $request->address;
        $guest->phone = $request->phone;
        $guest->gender = $request->gender;
        $guest->save();

        $cart = Session::get('cart');
        $bill = new Bill();
        $bill->totalAmount = $cart->totalAmount;
        $bill->totalPrice = $cart->totalPrice;

//        dd($cart->totalPrice);
        $bill->save();

        $cart = Session::get('cart');
        $array = [];
//        dd($cart);
        foreach ($cart->items as $item) {
            array_push($array, $item);
        }

        return view('guest.order.success', compact('guest', 'array'));

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
