<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcements extends Model
{
	protected $table = 'announcements';

	protected $fillable = [

        'announcement_type', 'announcement_name', 'announcement_file', 'status'

    ];

}
