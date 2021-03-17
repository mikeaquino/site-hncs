<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Blog;

class NewsEventPageController extends Controller
{
	public function display()
	{
		$blogs = Blog::paginate(4);
		$blogsPerMonthYr = Blog::all()
		->groupBy(function ($val) {
	        return Carbon::parse($val->created_at)->format('F Y');
	    });
		return view('news', ['blogs' => $blogs], ['blogsPerMonthYr' => $blogsPerMonthYr] );
	}

	public function displayYearMonthPosts($yearMonth)
	{
		$thisMonthPosts = Blog::where('created_at', 'like', '%'.$yearMonth.'%')->get();

	    $blogsPerMonthYr = Blog::all()
		->groupBy(function ($val) {
	        return Carbon::parse($val->created_at)->format('F Y');
	    });
		return view('postPerMonth', ['thisMonthPosts' => $thisMonthPosts], ['blogsPerMonthYr' => $blogsPerMonthYr]);
	}
}
