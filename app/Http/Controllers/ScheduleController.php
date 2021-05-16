<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SheduleTime;
use App\Models\Schedule;
use App\Models\ScheduleCategory;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
$sc=ScheduleCategory::get();
//$s=Store::get();
$data =['sc'=>$sc];

    return view('schedule.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $check =Schedule::where([['schedule_category_id',$request->schedule_category_id],
        ['day',$request->day],['day1',$request->day1]])->first();
        if($check == null)
        {
        $s=new Schedule;
        $s->schedule_category_id=$request->schedule_category_id;
        $s->day=$request->day;
        $s->day1=$request->day1;
        $s->save();
        $st=new SheduleTime;
        $st->schedule_id =$s->id;
        $st->beginTime=$request->beginTime;
        $st->endTime=$request->endTime;
        $st->save();
       }else{
        $st=new SheduleTime;
        $st->schedule_id =$check->id;
        $st->beginTime=$request->beginTime;
        $st->endTime=$request->endTime;
        $st->save(); 
       }
        $request->session()->flash('success', 'successfuly !');
        return back();
        

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $s =SheduleTime::find($id);
        $data=['st'=>$s];
        return view('schedule.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $s=SheduleTime::find($id);
        $s->beginTime=$request->beginTime;
        $s->endTime=$request->endTime;
        $s->save();
        $request->session()->flash('success', 'successfuly !');
        return redirect()->action('App\Http\Controllers\ScheduleController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $st =SheduleTime::find($id);
      $check =SheduleTime::where('schedule_id',$st->schedule_id)->get()->count();

      if($check == 1)
      {
          Schedule::destroy($st->schedule_id);
        SheduleTime::destroy($id);
      }else{
          SheduleTime::destroy($id);
      }

      return back();
    }

    public function setSchedule()
    {
        $sc=ScheduleCategory::get();
      
        $data =['sc'=>$sc];
        
            return view('schedule.setup',$data);
    }
    public function postSchedule(Request $request)
    {
        ScheduleCategory::where('status',1)
        ->update(['status'=>0]);

        $s=ScheduleCategory::find($request->id);
        $s->status=1;
        $s->save();
        $request->session()->flash('success', 'successfuly !');
        return back();
    }
}
