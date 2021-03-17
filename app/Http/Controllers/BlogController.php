<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;
use File;

class BlogController extends Controller
{
	public function index()
	{
		$blogs = Blog::latest()->get();
		
		return view('admin-panel.content-management.index-blog', [
			'blogs' => $blogs
		]);
	}

	public function create()
	{
		return view('admin-panel.content-management.create-blog');
	}

	public function store()
	{
		request()->validate([
			'title' => 'required',
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240',
			'content' => 'required'
		]);

		$imageName = time() . '-' . request()->image->getClientOriginalName();
		request()->image->move('img', $imageName);

		Blog::create([
			'title' => request()->title,
			'image' => $imageName,
			'content' => request()->content,
			'created_by' => Auth::user()->email
		]);

		return back()->with('success', 'Article blog created successfully!');
	}

	public function preview($id)
	{
		$blog = Blog::findOrFail($id);
		
		return view('admin-panel.content-management.preview-blog', [
			'blog' => $blog
		]);
	}

	public function edit($id)
	{
		$blog = Blog::findOrFail($id);
		
		return view('admin-panel.content-management.edit-blog', [
			'blog' => $blog
		]);
	}

	public function status($id, $statusId)
	{
		if ($statusId == 1) {
			$status = 2;
			$message = 'The blog is now published and live!';
		} elseif ($statusId == 2) {
			$status = 1;
			$message = 'The blog is now in draft mode.';
		}
		
		$blog = Blog::findOrFail($id);
		$blog->update([
			'status' => $status
		]);

		return back()->with('success', $message);
	}

	public function update($id)
	{
		request()->validate([
			'title' => 'required',
			'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
			'content' => 'required'
		]);

		$blog = Blog::findOrFail($id);

		if (empty(request()->image)) {
			$blog->update([
				'title' => request()->title,
				'content' => request()->content
			]);
		} else {
			$imageName = time() . '-' . request()->image->getClientOriginalName();
			request()->image->move('img', $imageName);

			$blog->update([
				'title' => request()->title,
				'image' => $imageName,
				'content' => request()->content
			]);
		}

		return back()->with('success', 'Successfully Updated!');
	}

	public function delete($imageName)
	{
		$imagePath = public_path('img/' . $imageName);
		if (File::exists($imagePath)) {
			// To delete the image from the server
			File::delete($imagePath);
			// To delete the image from the database
			Blog::where('image', $imageName)->delete();
		}

		return back()->with('success', 'Article blog deleted successfully!');
	}
}
