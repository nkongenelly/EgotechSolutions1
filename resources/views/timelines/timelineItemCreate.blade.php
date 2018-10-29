<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Timeline Items</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <form action="/timelineItemStore" method="POST">
        @csrf
        <div class="form-group col-md-6">
            <br>
            <label for="firstName">TimeLine Group</label>
            <select name="group_id">
            <option value="0">Select Timeline Group</option>
            @if(count(timelineGroups))
                @foreach($timelineGroups as $timelineGroup)
                    <option value="{{ $timelineGroup ->id}}">"{{ $timelineGroup ->title}}</option>
                @endforeach
            @endif
            </select>
        </div>
        <div class="form-control col-md-6">
            <br>
            <label for="firstName">TimeLine Period</label>
            <select name="time_period">
            <option value="day">Days</option>
            <option value="hour">Hours</option>
            </select>
        </div>
        <div class="form-group col-md-6">
            
            <label for="">Start Time</label>
            <input class="form-control" name="start_time" type="number">
        </div>
        <div class="form-group col-md-6">
            <label for="email">End Time</label>
            <input class="form-control" name="end_time" type="number">
        </div>
        <div class="form-group col-md-6">
            <label for="phoneNumber">Can Move?</label>
            <input type="checkbox" name="canMove" value="TRUE" class="form-control">True<br>
            <input type="checkbox" name="canMove" value="FALSE" checked class="form-control">False
        </div>
        <div class="form-group col-md-6">
            <label for="">Can Resize?</label>
            <input type="checkbox" name="canResize" value="TRUE" class="form-control">True<br>
            <input type="checkbox" name="canResize" value="FALSE" checked class="form-control">False
        </div>
        <div class="form-group col-md-6">
            <label for="">Can Change Group?</label>
            <input type="checkbox" name="canChangeGroup" value="TRUE" class="form-control">True<br>
            <input type="checkbox" name="canChangeGroup" value="FALSE" checked class="form-control">False
        </div>
        <div class="form-group col-md-6">
            <label for="">Class Name</label>
            <input class="form-control" type="text" name="className">
        </div>
        <div class="form-group col-md-6">
            <label for="">background Color</label>
            <input class="form-control" type="color" name="backgroundColor">
        </div>
        <div class="form-group col-md-6">
            <label for="">Github account</label>
            <input class="form-control" type="url" name="githubAccount">
        </div>
        <div class="form-group col-md-6">
            <button class="btn btn-primary sm" type="submit">Submit</button>
        </div>
    </form>
</div>
</body>
</html>