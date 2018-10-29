<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TimelineGroup;
use App\Timeline;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexGroup()
    {
        $timelineGroups = TimelineGroup::all();
        return view('timelines.timelineGroup',compact('timelineGroups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexItem()
    {
        $timelines = TimeLine::all();
        return view('timelines.timelineItem', compac('timelines'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function createGroup(){
        $timelineGroups = TimelineGroup::all();
        return view('timelines.timelineGroup',compact('timelineGroups'));
    }

    public function createItem(){
        $timelines = TimeLine::all();
        $timelineGroups = TimelineGroup::all();
        return view('timelines.timelineItem', compac('timelines','timelineGroups'));
    }
    public function storeGroup(Request $request)
    {
        $this->validate(request(),[
            'parent'=>'required',
            'title'=>'required'
        ]);
        TimelineGroup::create(request('parent','title'));
        $timelineGroups = TimelineGroup::all();
        return view('timelines.timelineGroup',compact('timelineGroups'));

    }

    public function storeItem(Request $request)
    {
        $this->validate(request(),[
            'group_id'=>'required',
            'title'=>'required',
            'start_time'=>'required',
            'end_time'=>'required',
            'time_period'=>'required',
            'canMove'=>'required',
            'canResize'=>'required',
            'canChangeGroup'=>'required',
            'className'=>'required',
            'backgroundColor'=>'required',
            'githubAccount'=>'required'
        ]);
        TimelineGroup::create(request('parent','title'));
        $timelineGroups = TimelineGroup::all();
        return view('timelines.timelineGroup',compact('timelineGroups'));

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
