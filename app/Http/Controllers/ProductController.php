<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

use Session;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class ProductController extends Controller
{
    //
    function index()
    {
        return view('main');
    }

    function shop()
    {
        $products = Product::all();

        $userId = Session::get('user')['id'];
        $items = DB::table('products')
            ->join('laptop-details', 'products.id', '=', 'laptop-details.product_id')
            ->get();
        return view('shop.shop', ['products' => $products, 'items' => $items]);
    }

    function detail($id)
    {
        $data = Product::find($id);
        return view('detail', ['product' => $data]);
    }

    function search(Request $req)
    {
        $data = Product::where('name', 'like', '%' . $req->input('query') . '%')->get();
        return view('search', ['products' => $data]);
    }

    function addToCart(Request $req)
    {
        if ($req->session()->has('user')) {
            $cart = new Cart;
            $cart->user_id = $req->session()->get('user')['id'];
            $cart->product_id = $req->product_id;
            $cart->save();
            return redirect('/');
        } else {
            return redirect('/login');
        }
    }

    static function cartItem()
    {
        $userId = Session::get('user')['id'];
        return Cart::where('user_id', $userId)->count();
    }

    function cartlist()
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.*', 'cart.id as cart_id')
            ->get();

        $suma = ProductController::sum();

        return view('cartlist', ['products' => $products, 'suma' => $suma]);
    }

    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }

    function orderNow()
    {
        $userId = Session::get('user')['id'];
        $total = ProductController::sum();
        $tax = 23;
        $tax_value = $total*$tax/100;

        $towary = DB::table('cart')
        ->join('products', 'cart.product_id', '=', 'products.id')
        ->where('cart.user_id', $userId)
        ->select('products.name', 'products.price')
        ->get();

        return view('ordernow', ['total' => $total,'tax_value' => $tax_value], compact('towary'));
    }

    function sum()
    {
        $userId = Session::get('user')['id'];
        $sum = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

        return $sum;
    }


    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        $current_date = Carbon::now();
        $date = $current_date->format('Ymd');
        $a = mt_rand(10000, 99999);
        $number = "FS/".$date."/".$a;
        

        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'oczekujące';
            $order->payment_method = $req->payment;
            $order->payment_status = 'oczekujące';
            $order->street = $req->street;
            $order->build_nr = $req->build_nr;
            $order->a_nr = $req->a_nr;
            $order->city_code = $req->city_code;
            $order->city = $req->city;
            $order->add_info = $req->add_info;
            $order->invoice_nr = $number;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();
        return redirect('/');
    }

    function myOrders()
    {
        $userId = Session::get('user')['id'];
        $orders = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('orders.user_id', $userId)
            ->get();

        return view('myorders', ['orders' => $orders]);
    }
}
