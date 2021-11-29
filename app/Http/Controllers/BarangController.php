<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/master/barang/';
    }

    //Master
    public function index(){
        $data['barang'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id');
        return view($this->page.'barang', $data);
    }
    public function addBarang(){
        $data['category'] = DB::table('category')->get();
        return view($this->page.'addBarang', $data);
    }
    public function saveBarang(Request $request){
        DB::table('product')->insert([
            'pd_name'              => $request->input('nama_produk'),
            'ct_id'                => $request->input('kategori'),
            'pd_harga_beli'        => $request->input('beli'),
            'pd_harga_jual'        => $request->input('jual'),
            'pd_harga_discount'    => $request->input('diskon'),
            'pd_stok'              => $request->input('stok'),
            'pd_sku'              => $request->input('sku'),
            'pd_status'            => 'on',
            'pd_description'       => $request->input('deskripsi')
        ]);
        redirect($this->page);
    }

    public function getBarang(){
        $data['data'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id');

        echo json_encode($data);
        exit;
    }

    public function getBarangById(){
        $data['data'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id');

        echo json_encode($data);
        exit;
    }

    public function editBarang($id){
        $data['barang'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id WHERE A.pd_id = '.$id);
        $data['category'] = DB::table('category')->get();

        return view($this->page.'editBarang', $data);
    }

    public function detailBarangById($id){
        $data['data'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id WHERE A.pd_id = '.$id);

        echo json_encode($data);
        exit;
    }


    public function doDelete($id){
        DB::table('product')->where('pd_id', $id)->delete();
    }

    public function updateBarang(Request $request)
    {
        // update data category
        DB::table('product')->where('pd_id', $request->input('id'))->update([
            'pd_name'           => $request->input('nama_produk'),
            'ct_id'             => $request->input('kategori'),
            'pd_harga_beli'     => $request->input('beli'),
            'pd_harga_jual'     => $request->input('jual'),
            'pd_harga_discount' => $request->input('diskon'),
            'pd_stok'           => $request->input('stok'),
            'pd_sku'            => $request->input('sku'),
            'pd_description'    => $request->input('deskripsi')
        ]);

    }
}
