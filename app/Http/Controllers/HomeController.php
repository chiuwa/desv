<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use DB;
class HomeController extends Controller
{
    public function home(){

        $posts = Post::select('posts.*', 'categories.name', 'posts.id as post_id')
            ->join('categories', 'categories.id', '=', 'posts.category_id')
            ->where('posts.status', '=', 'PUBLISHED')
			->orderBy('posts.id', 'desc')->get();
		
        return view('app', ['posts' => $posts]);
    }
	public static function getCarousel(){
		
	 $carousel= DB::table('settings')
				->select('value')
				->where('key', 'like', 'site.carousel%')
				->get();		
				
		return $carousel;					
		exit();
	}
}
