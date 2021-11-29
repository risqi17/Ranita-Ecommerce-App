<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use IIluminate\Support\Facades\Validator;

class SizeController extends Controller
{
    public function __construct()
    {
        $this->page = 'admin/master/size/';
    }

    //Master
    public function index(){
        $data['barang'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id');
        return view($this->page.'size', $data);
    }
    public function addSize($id){
        $data['barang'] = DB::select('SELECT * FROM product A LEFT JOIN category B ON A.ct_id = B.ct_id WHERE A.pd_status = "on"');
        foreach ($data['barang'] as $brg) {
            $data['name'] = $brg->pd_name;
        }
        $data['id'] = $id;

        return view($this->page.'add_size', $data);
    }

    public function saveSize($id, Request $request){
        // if($request->ajax()) {
        //     $size = $request->size;
        //     //  echo $request->size;
        //     for($count = 0; $count < count($size); $count++) {
        //         $data = array(
        //             'sz_name'       => $size[$count],
        //             'pd_id'         => $id,
        //             'sz_status'     => 'on'
        //         );
                
        //         $insert_data[] = $data; 
        //     }
        //     echo $insert_data;
        //     DB::table('product_size')->insert([$insert_data]);
        //     return response()->json([
        //     'success'  => 'Data Added successfully.'
        //     ]);
        // }

        $rules = [];
        foreach($request->input('size') as $key => $value) {
            $rules["size.{$key}"] = 'required';

            DB::table('product_size')->insert([
                'sz_name'       => $value,
                'pd_id'         => $id,
                'sz_status'     => 'on'
            ]);
        }
        return redirect('admin/master/size/view/'.$id);
        // echo $request->input('size[0]');

    }

    public function viewSize($id){
        $data['size'] = DB::select('SELECT B.sz_id,B.sz_name, B.sz_status FROM product A LEFT JOIN product_size B ON A.pd_id = B.pd_id WHERE A.pd_id = '.$id.'');
        $data['barang'] = DB::select('SELECT * FROM product A LEFT JOIN product_size B ON A.pd_id = B.pd_id WHERE A.pd_id = '.$id.'');
        foreach ($data['barang'] as $brg) {
            $data['name'] = $brg->pd_name;
        }
        $data['id'] = $id;
        return view($this->page.'view_size', $data);
    }

    public function getSize($id){
        $data['size'] = DB::select('SELECT B.sz_id,B.sz_name, B.sz_status FROM product A LEFT JOIN product_size B ON A.pd_id = B.pd_id WHERE A.pd_id = '.$id.'');
        
        echo json_encode($data);
        exit;
    }

    public function getSizeOne($id){
        $data['data'] = DB::select('SELECT * FROM product_size WHERE sz_id = '.$id.'');
        
        echo json_encode($data);
        exit;
    }

    public function updateSizeOne($id, Request $request){
        
        // update data category
        DB::table('product_size')->where('sz_id', $id)->update([
            'sz_name'    => $request->input('size')
        ]);
    }

    public function updateSize($id, Request $request){
        $status = $request->input('status');
        if ($status == 'on') {
            $status = 'off';
        } else {
            $status = 'on';
        }
        
        // update data category
        DB::table('product_size')->where('sz_id', $id)->update([
            'sz_status'    => $status
        ]);
    }


    public function getBarang(){
        $data['data'] = DB::select('SELECT A.pd_name, A.pd_id , COUNT(D.pd_id) AS jumlah_size FROM product A 
        LEFT JOIN product_size D ON A.pd_id = D.pd_id
        WHERE pd_status = "on"
        GROUP BY A.pd_name, A.pd_id, D.pd_id');

        echo json_encode($data);
        exit;
    }
    public function viewGambar($id){
        //foto utama
        $c = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "0"');
        foreach($c as $ck){
            if($ck->checked == 0){
                $data['cek'] = 0;
            } else {
                $data['cek'] = 1;
            }
        }
        $data['utama'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "0"');

        //foto 2
        $b = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "1"');
        foreach($b as $ck){
            if($ck->checked == 0){
                $data['cek1'] = 0;
            } else {
                $data['cek1'] = 1;
            }
        }
        $data['foto1'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "1"');
        
        //foto 3
        $a = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "2"');
        foreach($a as $ck){
            if($ck->checked == 0){
                $data['cek2'] = 0;
            } else {
                $data['cek2'] = 1;
            }
        }
        $data['foto2'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "2"');
        
        //foto 4
        $d = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "3"');
        foreach($d as $ck){
            if($ck->checked == 0){
                $data['cek3'] = 0;
            } else {
                $data['cek3'] = 1;
            }
        }
        $data['foto3'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "3"');
        
        //foto 5
        $e = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "4"');
        foreach($e as $ck){
            if($ck->checked == 0){
                $data['cek4'] = 0;
            } else {
                $data['cek4'] = 1;
            }
        }
        $data['foto4'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "4"');
        

        $data['id'] = $id;
        return view($this->page.'view_gambar', $data);
    }
    public function getGambarById($id){
        $data['utama'] = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = "0"');
        echo json_encode($data);
        exit;
    }
    public function uploadGambar(Request $request, $id, $tag){
        $this->validate($request, [
			'photos' => 'required',
        ]);
        
        $c = DB::select('SELECT count(*) as checked FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = '.$tag);
        

        foreach($c as $ck){
            if($ck->checked == 0){
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('photos');
                        // nama file
                $file->getClientOriginalName();
                        // ekstensi fi/le
                $file->getClientOriginalExtension();
                        // real path
                $file->getRealPath();
                        // ukuran file
                $file->getSize();
                        // tipe mime
                $file->getMimeType();
                        // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'images/produk';
                    // upload file
                $file->move($tujuan_upload,time().'_'.$id.'.'.$file->getClientOriginalExtension());
                DB::table('product_picture')->insert([
                'pc_file'       => time().'_'.$id.'.'.$file->getClientOriginalExtension(),
                'pc_tag'        => $tag,
                'pd_id'         => $id
                ]);
                // File::delete('data_file/'.$gambar->file);
                return redirect('admin/master/gambar/view/'.$id);
            } else {
                // menyimpan data file yang diupload ke variabel $file
                $file = $request->file('photos');
                        // nama file
                $file->getClientOriginalName();
                        // ekstensi fi/le
                $file->getClientOriginalExtension();
                        // real path
                $file->getRealPath();
                        // ukuran file
                $file->getSize();
                        // tipe mime
                $file->getMimeType();
                        // isi dengan nama folder tempat kemana file diupload
                $tujuan_upload = 'images/produk/';

                $f = DB::select('SELECT B.pc_file FROM product A LEFT JOIN product_picture B ON A.pd_id = B.pd_id WHERE A.pd_status = "on" and B.pd_id = '.$id.' and B.pc_tag = '.$tag.'');

                foreach($f as $ft){
                    File::delete($tujuan_upload.$ft->pc_file);
                }
                    // upload file
                $file->move($tujuan_upload,time().'_'.$id.'.'.$file->getClientOriginalExtension());
                DB::table('product_picture')->where('pd_id','=',$id)->where('pc_tag','=',$tag)->update([
                    'pc_file'       => time().'_'.$id.'.'.$file->getClientOriginalExtension()
                ]);

                return redirect('admin/master/gambar/view/'.$id);
            }
        }
    }

    public function deleteGambar($id, $tag, $name){
        $lokasi_foto = 'images/produk/';
        File::delete($lokasi_foto.$name);
        DB::table('product_picture')->where('pd_id','=',$id)->where('pc_tag','=',$tag)->delete();

        return redirect('admin/master/gambar/view/'.$id);
    }
    
}
