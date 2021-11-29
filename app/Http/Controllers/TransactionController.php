<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransactionController extends Controller
{
	public function __construct()
    {
        $this->page = 'mart/konfirmasi/';
    }
    public function index(){
        $data['kategori'] = DB::select(' SELECT * FROM category ');

		return view($this->page.'konfirmasi-pembayaran', $data);
    }
    public function status(){
        $data['kategori'] = DB::select(' SELECT * FROM category ');

		return view($this->page.'status', $data);
    }
}