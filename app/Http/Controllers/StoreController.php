<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StoreController extends Controller
{
	public function __construct()
    {
        $this->page = 'mart/';
    }
	public function index(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');

		return view($this->page.'index', $data);
	}
	public function tracking(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');
		
		return view($this->page.'tracking', $data);
	}
	public function invitation(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');
		
		return view($this->page.'undangan', $data);
	}
	public function caraBelanja(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');
		
		return view($this->page.'/cara-belanja/cara-belanja', $data);
	}
	public function finishCheckout($id){
		$data['kategori'] = DB::select(' SELECT * FROM category ');

		$inquiry = $id;
		$data['id'] = $inquiry;
		
		return view($this->page.'transaksi/finish_checkout', $data);
	}
    public function home(){
		// $data['produk'] = DB::select('SELECT *  FROM product A 
        // LEFT JOIN category B ON A.ct_id = B.ct_id
        // LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		// WHERE pd_status = "on"');

		$data['produk'] = DB::select('SELECT A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, C.pc_file  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on" ');

		$data['kategori'] = DB::select(' SELECT * FROM category');

		$data['terbaru'] = DB::select('SELECT A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, C.pc_file  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on" 
		ORDER BY A.pd_id DESC LIMIT 3');

		return view($this->page.'home', $data);
	}

	public function shopByCategory($id){
		// $data['produk'] = DB::select('SELECT *  FROM product A 
        // LEFT JOIN category B ON A.ct_id = B.ct_id
        // LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		// WHERE pd_status = "on"');

		$data['produk'] = DB::select('SELECT A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, C.pc_file  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on" AND A.ct_id = "'.$id.'" ');

		$data['kategori'] = DB::select(' SELECT * FROM category');

		$data['category'] = DB::select(' SELECT * FROM category where ct_id = "'.$id.'"');

		$data['terbaru'] = DB::select('SELECT A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, C.pc_file  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on" 
		ORDER BY A.pd_id DESC LIMIT 3');

		return view($this->page.'transaksi/home_category', $data);
	}

	public function detail($id){
		$data['kategori'] = DB::select(' SELECT * FROM category ');

		$data['produk'] = DB::select('SELECT 
		A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, A.pd_status,A.pd_description,  
		C.pc_file, B.ct_name  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on"  and A.pd_id = "'.$id.'" ');

		$data['foto'] = DB::select('SELECT * FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id
		WHERE pd_status = "on" and A.pd_id = "'.$id.'" 
		ORDER BY C.pc_tag ASC');

		$data['terbaru'] = DB::select('SELECT 
		A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, A.pd_status,A.pd_description,  
		C.pc_file, B.ct_name  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on"  
		ORDER BY A.pd_id DESC LIMIT 4');

		$data['related'] = DB::select('SELECT 
		A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, A.pd_status,A.pd_description,  
		C.pc_file, B.ct_name  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on"  
		ORDER BY A.pd_id DESC LIMIT 8');

		
		$data['size'] = DB::select('SELECT * FROM product_size where pd_id = "'.$id.'"');
				

		return view($this->page.'single-product', $data);
	}

	public function search(Request $request){
		$data['kategori'] = DB::select(' SELECT * FROM category ');

		$name = $request->input('nama');
		$kategori = $request->input('kategori');

		$data['produk'] = DB::select('SELECT * FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on" and A.pd_name LIKE "%'.$name.'%" and B.ct_name LIKE "%'.$kategori.'%" ');

		$data['nama'] = $name;
		if($kategori == ''){
			$data['kate'] = 'Semua Kategori';
		} else {
			$data['kate'] = $kategori;
		}
		

		return view($this->page.'search', $data);
	}

	public function addEmail(Request $request){
		DB::table('email_marketing')->insert([
            'email' => $request->input('email'),
        ]);
        return redirect('/shop');
	}
	public function cart(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');

		$data['terbaru'] = DB::select('SELECT 
		A.pd_id, A.pd_name, A.pd_harga_jual, A.pd_sku, A.pd_status,A.pd_description,  
		C.pc_file, B.ct_name  FROM product A 
        LEFT JOIN category B ON A.ct_id = B.ct_id
        LEFT OUTER JOIN product_picture C ON A.pd_id = C.pd_id AND C.pc_tag = "0"
		WHERE pd_status = "on"  
		ORDER BY A.pd_id DESC LIMIT 4');

		return view($this->page.'transaksi/cart', $data);
	}

	public function checkout(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');
		$data['provinsi'] = DB::select(' SELECT * FROM  dt_provinsi');

		return view($this->page.'transaksi/checkout', $data);
	}

	public function saveCheckout(){
		$data['kategori'] = DB::select(' SELECT * FROM category ');
		
	}

	public function getAddress($id){
		$id_provinsi = $id;
		$kota['data'] = DB::select(' SELECT * FROM  dt_kabupaten where province_id = '.$id_provinsi.'');

		echo json_encode($kota);
        exit;	
	}
	public function getAddressKecamatan($id){
		$id_kab = $id;
		$kec['data'] = DB::select(' SELECT * FROM  dt_kecamatan where regency_id = '.$id_kab.'');

		echo json_encode($kec);
        exit;	
	}

	public function checkInvoiceNumber(){
		$inv['data'] = DB::select('SELECT tr_invoice FROM transaction ORDER BY tr_id DESC LIMIT 1');

		echo json_encode($inv);
        exit;
	}

	public function saveTransaction(Request $request){
        DB::table('transaction')->insert([
			'tr_invoice'         => $request->input('invoice'),
			'tr_name'			=> $request->input('nama'),
            'handphone'          => $request->input('hp'),
            'email'        		=> $request->input('email'),
            'tr_date'        	=> date("Y-m-d H:i:s"),
            'tr_harga'    		=> $request->input('total_harga'),
            'tr_ship_status'     => 'Menunggu Konfirmasi Admin',
		]);
	}
	
	public function saveAddress(Request $request){
        DB::table('address')->insert([
			'invoice'       	=> $request->input('invoice'),
			'al_name'			=> $request->input('nama'),
			'provinsi'			=> $request->input('provinsi'),
			'kabupatenkota'		=> $request->input('kabupaten'),
			'kecamatan'			=> $request->input('kecamatan'),
			'kodepos'			=> $request->input('kodepos'),
			'al_detail'			=> $request->input('detail'),
            'al_no_hp'          => $request->input('hp'),
            'al_email'        	=> $request->input('email')
		]);
	}
	
	public function saveDetail(Request $request){
		$panjang = count($request->input('qty'));
		$pd_id = $request->input('pd_id');
		$qty = $request->input('qty');
		$size = $request->input('size');
		$harga = $request->input('harga');

		for($i = 0; $i < $panjang; $i++){
			DB::table('detail_transaction')->insert([
				'invoice'       	=> $request->input('invoice'),
				'pd_id'       		=> $pd_id[$i],
				'qty'       		=> $qty[$i],
				'size'       		=> $size[$i],
				'dt_harga'       	=> $harga[$i],
				'total_harga'       => $harga[$i]*$qty[$i],
			]);
		}

        
    }
}

