<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Customer;
use Validator,File,Redirect,Response;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function getCarts()
    {
        $carts = $this->getCarts();
        $carts = $carts != '' ? $carts:[];
        return $carts;
    }

    public function checkout()
    {
    //QUERY UNTUK MENGAMBIL SEMUA DATA PROPINSI
    $provinces = Province::orderBy('created_at', 'DESC')->get();
    $carts = $this->getCarts(); //MENGAMBIL DATA CART
    //MENGHITUNG SUBTOTAL DARI KERANJANG BELANJA (CART)
    $subtotal = collect($carts)->sum(function($q) {
        return $q['qty'] * $q['product_price'];
    });
    //ME-LOAD VIEW CHECKOUT.BLADE.PHP DAN PASSING DATA PROVINCES, CARTS DAN SUBTOTAL
    return view('ecommerce.checkout', compact('provinces', 'carts', 'subtotal'));
    }

}