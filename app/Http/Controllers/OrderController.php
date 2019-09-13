<?php

namespace App\Http\Controllers;

use App\User;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Check Session login
        // Jika tidak ada
        if (!Auth::check()) {
            // Lakukan validasi data yang di input user
            $request->validate([
                'name'     => ['required', 'string', 'max:255'],
                'email'    => ['required', 'string', 'email', 'max:255', 'unique:users'],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
                'address'  => ['required', 'string', 'min:8'],
            ]);
        }

        // Daftar kan user baru ke database
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'address'  => $request->address,
        ]);

        // Login user
        Auth::login($user);

        $orders   = session('cart');
        $products = array_values($orders);
        $noOrder  = 'ePOS-' . rand(6) . time();

        // Lakukan looping untuk session cart
        for ($i = 0; $i < count($products); $i++) {
            // input ke dalam database berdasarkan session cart
            Order::create([
                'user_id'    => Auth::user()->id,
                'product_id' => $products[$i]['product_id'],
                'quantity'   => $products[$i]['quantity'],
                'no_order'   => $noOrder
            ]);
        }

        // Hapus session cart
        session()->forget('cart');

        // Redirect ke halaman shop
        return redirect()->route('shop.index')->with('success', 'Berhasil menyelesaikan data pembelian');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
