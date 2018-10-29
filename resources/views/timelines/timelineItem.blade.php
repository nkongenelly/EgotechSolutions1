@extends('timelines.timelineMaster')
@section('content')
    <a href="/timelineItemCreate" class="btn btn-warning">Add Timeline Item</a>
    <a href="/timelineGroupCreate" class="btn btn-warning">Add Timeline Group</a>
    @if($timelines)
    <table class="table table-condensed table-striped table-hover table-bordered">
        <tr>
            <th>#</th>
            <th>Timeline Group</th>
            <th>Timeline Title</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Can Move?</th>
            <th>Can Resize?</th>
            <th>Can Change Group?</th>
            <th>Class Name</th>
            <th>Background Color</th>
            <th>Github Account</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach($timelines as $timeline)
                <tr>
                    <td>{{ $timeline->id}}</td>
                    <td>{{ $timeline->timelineGroup->title}}</td>
                    <td>{{ $timeline->start_time}} {{ $timeline->time_period}}(s)</td>
                    <td>{{ $timeline->end_time}} {{ $timeline->time_period}}(s)</td>
                    <td>{{ $timeline->canMove}}</td>
                    <td>{{ $timeline->canResize}}</td>
                    <td>{{ $timeline->canChangeGroup}}</td>
                    <td>{{ $timeline->className}}</td>
                    <td>{{ $timeline->backgroundColor}}</td>
                    <td>{{ $timeline->githubAccount}}</td>
                    <td><a href="/timelineItemCreate" class="btn btn-warning">Edit</a></td>
                    <td><a href="/timelineItemCreate" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this timeline item?')">Delete</a></td>                   
                
                </tr>
         @endforeach
 
    </table>
    @endif
 @endsection