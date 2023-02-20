<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Validator;
// use DB;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        return view('transaksi');
    }



    public function sales()
    {
        # code...
    }



    public function stock()
    {
        return view('transaksi/stock/index');
    }



    public function stock_tambah()
    {
        echo 'form datang barang makanan';
    }
}
