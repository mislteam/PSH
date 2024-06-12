<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\ActivityLog;
use Illuminate\Http\Request;

class ActivityLogController extends Controller
{
   //index activity log
   public function activitylog()
   {
    $activitylog = ActivityLog::orderBy('created_at','desc')->paginate(10);
   //  dd($activitylog);
    return view('backend.activitylog.index',compact('activitylog'));
   }
}
