<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
	public function __construct()
    {
        $this->page = 'mart/blog/';
    }
    public function index(){
        $data['kategori'] = DB::select(' SELECT * FROM category ');

		return view($this->page.'blog', $data);
    }
    public function singleBlog(){
        $data['kategori'] = DB::select(' SELECT * FROM category ');

		return view($this->page.'single-blog', $data);
    }
}