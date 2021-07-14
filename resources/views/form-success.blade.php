<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>
    Event Name: {{$data->eventName}} <br>Band Names:{{$data->bandNames}} <br> Start Date:{{$data->startDate}} <br>
    End Date:{{$data->endDate}} <br> Portfolio:{{$data->portfolio}} <br> Ticket Price:{{$data->ticketPrice}}
</p>
@if($data->status == 1)
    <p>"Đang diễn ra</p>
@elseif($data->status == 2)
    <p>Sắp diễn ra</p>
@elseif($data->status == 3)
    <p>Đã diễn ra</p>
@elseif($data->status == 0)
    <p>tam hoan</p>
@endif
</body>
</html>
