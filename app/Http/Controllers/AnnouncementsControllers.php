<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Announcements;
use File;

class AnnouncementsControllers extends Controller
{

	public function DisplaysAnnouncementsList()
	{
		$announcementsList = Announcements::latest()->get();
		return view('admin-panel.content-management.announcements', [
			'announcementsList' => $announcementsList
		]);
	}

	public function CreateAnnouncement()
	{
		return view('admin-panel.content-management.createAnnouncement');
	}

	public function Insert()
	{
		request()->validate([
			'announcements_type' 	=> 'required',
			'announcement_name' 	=> 'required',
			'file' 					=> 'required|file'
		]);


		if (File::exists('announcements' . request()->file->getClientOriginalName())) {
			$message = "The images you're trying to upload is already existing!";
		} else {
			$message = 'Success!';
			$fileName = request()->file->getClientOriginalName();
			request()->file->move('announcements', $fileName);
			
			Announcements::create([
				'announcement_type' 	=> request()->announcements_type,
				'announcement_name'		=> request()->announcement_name,
				'announcement_file' 	=> $fileName,
				'status' 				=> 1
			]);
		}

		return back()->with('Added Successfully', $message);
	}

	public function EditAnnouncement($id)
	{
		$announcement = Announcements::findOrFail($id);
		return view('admin-panel.content-management.editAnnouncement', [
			'announcement' => $announcement
		]);
	}

	public function UpdateAnnouncement()
	{
		request()->validate([
			'id' 					=> 'required',
			'announcements_type' 	=> 'required',
			'announcement_name' 	=> 'required',
			'file' 					=> 'file'
		]);

		$announce = Announcements::findOrFail(request()->id);

			if (empty(request()->file)) {
				$announce->update([
					'announcement_type' 	=> request()->announcements_type,
					'announcement_name'		=> request()->announcement_name,
				]);
				$message = "Updated Successfully";
			} else {
				if (File::exists('announcements' . request()->file->getClientOriginalName())) {
					$message = "The images you're trying to upload is already existing!";
				} else {
					$message = 'Success!';
					$fileName = request()->file->getClientOriginalName();
					request()->file->move('announcements', $fileName);

					$announce->update([
					'announcement_type' 	=> request()->announcements_type,
					'announcement_name'		=> request()->announcement_name,
					'announcement_file'		=> $fileName
				]);

				}
			}

		return back()->with('success', $message);
	}

	public function announcementStatus($id, $statVal)
	{
		if ($statVal == 2) {
			$status = 1;
			$message = 'The blog is now published and live!';
		} elseif ($statVal == 1) {
			$status = 2;
			$message = 'The blog is now in draft mode.';
		}
		
		$announcement = Announcements::findOrFail($id);
		$announcement->update([
			'status' => $status
		]);

		return back()->with('success', $message);
		
	}

	public function deleteAnnouncement($id, $filename)
	{
		$announcementsList = Announcements::latest()->get();

		$Announcements=Announcements::findOrFail($id);
			$Announcements->delete(); //returns true/false

		return back()->with('success', 'Announcement deleted successfully!');
	}
}
