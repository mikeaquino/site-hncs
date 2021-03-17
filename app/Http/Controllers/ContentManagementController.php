<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use File;
use App\Video;

class ContentManagementController extends Controller
{
	public function display()
	{
		$images = Image::all();

		return view('admin-panel.content-management.cover-photos', [
			'images' => $images
		]);
	}

	public function edit($id)
	{
		$image = Image::findOrFail($id);
		
		return view('admin-panel.content-management.manage-photos', [
			'image' => $image
		]);
	}

	public function update($id)
	{
		request()->validate([
			'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:10240'
		]);

		$message = '';

		if (File::exists('img/slides/' . request()->image->getClientOriginalName())) {
			$message = "The images you're trying to upload is already existing!";
		} else {
			$message = 'Success!';
			$imageName = request()->image->getClientOriginalName();
			request()->image->move('img/slides', $imageName);
			
			$image = Image::findOrFail($id);
			$image->update([
				'image_name' => $imageName
			]);
		}

		return back()->with('success', $message);
	}

	public function displayvid()
	{
		$video = Video::findOrFail(1);

		return view('admin-panel.content-management.changed-fvideo', [
			'video' => $video
		]);
	}

	public function updatevid($id)
	{
		request()->validate([
			'videolink' => 'required'
		]);

		Video::where('id', $id)->update([
			'video_link' => request()->videolink
		]);

		return back()->with('success', 'Successfully updated!');
	}
}
