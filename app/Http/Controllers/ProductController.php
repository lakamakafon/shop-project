<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;
use \PDF;
use Session;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;
use Database\Seeders\LaptopDetailSeeder;

class ProductController extends Controller
{
    //
    function index()
    {
        return view('main');
    }

    function shop()
    {
        $items = Product::all();
        

        $userId = Session::get('user')['id'];
        return view('shop.shop', ['items' => $items]);
    }
    function getComputers()
    {
        $items = Product::all();

        $userId = Session::get('user')['id'];
        return view('shop.computers', ['items' => $items]);
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
            return redirect('/shop');
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
        $tax_value = $total * $tax / 100;

        $towary = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->select('products.name', 'products.price')
            ->get();

        return view('ordernow', ['total' => $total, 'tax_value' => $tax_value], compact('towary'));
    }

    function sum()
    {
        $userId = Session::get('user')['id'];
        $sum = $products = DB::table('cart')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->where('cart.user_id', $userId)
            ->sum('products.price');

            $sum = $sum + 10;

        return $sum;
    }


    function orderPlace(Request $req)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();
        $current_date = Carbon::now();
        $date = $current_date->format('Ymd');
        $date2 = $current_date->format('d/m/Y');
        $a = mt_rand(10000, 99999);
        $number = "FS-" . $date . "-" . $a;
        $suma = ProductController::sum();


        foreach ($allCart as $cart) {
            $order = new Order;
            $order->product_id = $cart['product_id'];
            $order->user_id = $cart['user_id'];
            $order->status = 'oczekujące';
            $order->suma = $suma;
            $order->payment_method = $req->payment;
            $order->payment_status = 'oczekujące';
            $order->add_info = $req->add_info;
            $order->invoice_nr = $number;
            $order->save();
            Cart::where('user_id', $userId)->delete();
        }
        $req->input();

        return view('main');
    }

    function createInvoice($invoice_nr)
    {
        $userId = Session::get('user')['id'];
        $allCart = Cart::where('user_id', $userId)->get();

        $current_date = Carbon::now();
        $date = $current_date->format('Ymd');
        $date2 = $current_date->format('d/m/Y');
        $a = mt_rand(10000, 99999);
        $number = "FS-" . $date . "-" . $a;

        $products = ProductController::getDataInvoice($invoice_nr);

        $buyer = DB::table('orders')
            ->join('users', 'orders.user_id', '=', 'users.id')
            ->where('orders.user_id', $userId)
            ->groupBy('user_id')
            ->get();

        $razem = ProductController::getSumInvoice($invoice_nr);

        //return view('invoice', ['date' => $date, 'number' => $number, 'products' => $products, 'buyer' => $buyer, 'date2' => $date2]);

       $pdf = PDF::loadView('invoice', ['date' => $date, 'number' => $number, 'products' => $products, 'buyer' => $buyer, 'date2' => $date2, 'razem' => $razem]);
        return $pdf->download($number.'.pdf');
    }

    function getDataInvoice($invoice_nr)
    {
        $userId = Session::get('user')['id'];
        $products = DB::table('orders')
            ->join('products', 'orders.product_id', '=', 'products.id')
            ->where('invoice_nr', $invoice_nr)
            ->where('orders.user_id', $userId)
            ->get();

            return $products;
    }

    function getSumInvoice($invoice_nr)
    {
        $userId = Session::get('user')['id'];
        $suma = DB::table('orders')
            ->where('invoice_nr', $invoice_nr)
            ->groupBy('invoice_nr')
            ->select('orders.suma')
            ->first();

            return $suma;
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
