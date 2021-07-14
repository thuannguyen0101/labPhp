<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Stacked form</h2>
    <form method="post">
        @csrf
        <div class="form-group">
            <label for="email">eventName:</label>
            <input type="text" class="form-control" id="email"  name="eventName">
        </div>
        <div class="form-group">
            <label for="email">bandNames:</label>
            <input type="text" class="form-control" id="email"  name="bandNames">
        </div>
        <div class="form-group">
            <label for="email">startDate:</label>
            <input type="date" class="form-control" id="email"  name="startDate">
        </div>
        <div class="form-group">
            <label for="email">endDate:</label>
            <input type="date" class="form-control" id="email" name="endDate">
        </div>
        <div class="form-group">
            <label for="pwd">portfolio:</label>
            <input type="text" class="form-control" id="pwd"  name="portfolio">
        </div>
        <div class="form-group">
            <label for="pwd">ticketPrice:</label>
            <input type="number" class="form-control" id="pwd"  name="ticketPrice">
        </div>
        <div class="form-group">
            <label for="sel1">Status:</label>
            <select class="form-control" id="sel1" name="status">
                <option disabled selected hidden></option>
                <option value="1">Đang diễn ra</option>
                <option value="2">Sắp diễn ra</option>
                <option value="3">Đã diễn ra</option>
                <option value="0">Tạm hoãn</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
