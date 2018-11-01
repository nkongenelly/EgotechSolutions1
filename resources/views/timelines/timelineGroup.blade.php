@extends('timelines.timelineMaster')
@section('content')
    <a href="/timelineGroupCreate" class="btn btn-warning">Add Timeline Group</a>
    <a href="/timelineItemCreate" class="btn btn-warning">Add Timeline Item</a>
    @if($timelineGroups)
    <table class="table table-condensed table-striped table-hover table-bordered">
        <tr>
            <th>#</th>
            <th>Timeline Parent</th>
            <th>Timeline Group Title</th>
            <th colspan="2">Actions</th>
        </tr>
        @foreach($timelineGroups as $timelineGroup)
                <tr>
                    <td>{{ $timelineGroup->id}}</td>
                    <td>{{ $timelineGroup->parent}}</td>
                    <td>{{ $timelineGroup->title}}</td>
                    <td><a href="/timelineGroupCreate" class="btn btn-warning">Edit</a></td>
                    <td><a href="/timelineGroupDelete/{{ $timelineGroup->id}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this timeline group?')">Delete</a></td>                   
                
                </tr>
         @endforeach
 
    </table>
    @endif
@endsection