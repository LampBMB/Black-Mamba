<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
   	public function getAdd(){
   		// 文章类型   文章的标题  文章的描述  文章图片  文章内容
   		return view('article.add');
   	}
	public function getIndex(){
   		// 文章类型   文章的标题  文章的描述  文章图片  文章内容
   		return view('article.index');
   	}
}
