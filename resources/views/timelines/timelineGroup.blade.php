<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Time Line Groups Index</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <div id="container">
    <a href="/timelineGroupCreate" class="btn btn-warning">Add Timeline Group</a>
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
                    <td><a href="/productfeaturesedit/{{ $product['id'] }}/{{ $pfeature->id }}" class="btn btn-warning">Edit</a></td>
                    <td><a href="/productfeaturesdelete/{{ $product['id'] }}/{{ $pfeature->id }}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this timeline group?')">Delete</a></td>                   
                
                </tr>
         @endforeach
 
    </table>
    @endif
    </div>
</body>
</html>