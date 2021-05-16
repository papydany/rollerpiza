<?php

namespace App\Models;
use DB;

use Auth;
class General
{
    public function getScheduleBycategory($category)
    {
$s =Schedule::where('schedule_category_id',$category)->get();
return $s;
}

    public function getScheduleTime($scheduleID)
    {
$s =SheduleTime::where('schedule_id',$scheduleID)
->get();
return $s;
}

public function getSchedule($id)
{
$s =Schedule::find($id);
return $s;
}
    public function getScheduleBycategoryforTimer($category)
    {
$s =Schedule::where('schedule_category_id',$category)
->get();
return $s;
 }
    public function getScheduleCategory($id)
    {
$s =ScheduleCategory::find($id);
return $s;

    }
    public function getStore($id)
    {
$s =Store::find($id);
return $s;

    }
}