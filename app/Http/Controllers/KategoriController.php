<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/master/kategori/kategori';
    }

    public function index(){

        return view($this->page);
    }

    public function doAddKategori(Request $request){

        DB::table('category')->insert([
            'ct_name'           => $request->input('kategori'),
            'ct_description'    => $request->input('deskripsi'),
            'status'            => 'on'
        ]);
    }

    public function getKategori(){
        // Call getuserData() method of Page Model
        $ctData['data'] = DB::table('category')->get();

        echo json_encode($ctData);
        exit;
    }

    public function doDelete($id){
        DB::table('category')->where('ct_id', $id)->delete();
    }

    public function getKategoriById($id){
        // Call getuserData() method of Page Model
        $ctData['data'] = DB::table('category')->where('ct_id', $id)->get();

        echo json_encode($ctData);
        exit;
    }

    public function update(Request $request)
    {
        // update data category
        DB::table('category')->where('ct_id', $request->input('id'))->update([
            'ct_name'           => $request->input('kategori'),
            'ct_description'    => $request->input('deskripsi')
        ]);

    }
}

