@extends('timelines.timelineMaster')
@section('content')
    <form action="/timelineGroupStore" method="POST">
        @csrf
        <div class="form-control col-md-6">
            <br>
            <label for="firstName">TimeLine Group Parent</label>
            <select name ="parent">
            <option value="0">--No Parent--</option>
            @if(count($timelineGroups))
                @foreach($timelineGroups as $timelineGroup)
                    <option value="{{ $timelineGroup->id }}">{{$timelineGroup->title}}</option>
                @endforeach
            @endif
        </div>
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">TimeLine Group Child</label>
            <input class="form-control" type="text" name="title">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
@endsection