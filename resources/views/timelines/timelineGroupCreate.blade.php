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
            <input class="form-control" type="text" name="parent">
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
</div>
</body>
</html>