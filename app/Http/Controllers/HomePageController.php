<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Image;
use App\Blog;
use App\Announcements;

class HomePageController extends Controller
{
	public function displaycarousel()
	{
		$images = Image::all();
		$blogs = Blog::ActiveStatus()->Descending()->LimitFour()->get();
		$announcementsListKinder = Announcements::latest()
		->where("announcement_type", 1)
		->get();
		$announcementsListElementary = Announcements::latest()
		->where("announcement_type", 2)
		->get();
		$announcementsListHS = Announcements::latest()
		->where("announcement_type", 3)
		->get();
		$blogsAll = Blog::ActiveStatus()->Descending()->get();

		return view('homepage', [
			'images' => $images,
			'blogs' => $blogs,
			'announcementsListKinder' => $announcementsListKinder,
			'announcementsListElementary' => $announcementsListElementary,
			'announcementsListHS' => $announcementsListHS,
			'blogsAll' => $blogsAll
		]);
	}

	public function showblog($id)
	{
		$blog = Blog::findOrFail($id);
		$blogsPerMonthYr = Blog::all()
		->groupBy(function ($val) {
	        return Carbon::parse($val->created_at)->format('F Y');
	    });
		return view('show-blog', ['blog' => $blog ], ['blogsPerMonthYr' => $blogsPerMonthYr ] );
	}
}
