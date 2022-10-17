<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>
<body>
    <form action="/booking" method ="post">
        @csrf
        <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">วันที่</label>
        <input type="date" class="form-control" name="date" id="date" placeholder="" required>
        </div>
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">เวลา</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value ="morning">
            <label class="form-check-label" for="flexRadioDefault1">
                เช้า
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value ="afternoon" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                บ่าย
            </label>
            </div>
        </div>
        <input type="submit" value="submit" class="btn-primary">
    </form>
</body>
</html>