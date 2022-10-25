<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Booking</title>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<div class="container p-3">
    <div class="mb-3 row">
        <img src="https://www.si.mahidol.ac.th/th/department/pediatrics/images/demo/headped.png" alt="logo" class="col-sm-3">
        <div class="col-sm-6"> <p class="h1 text-left">One Day Service</p></div>
    </div>
    <form action="/booking" method ="post">
        @csrf
        
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">วันที่</label>
                <div class="col-sm-4">
                <input type="date" class="form-control" name="date" id="date" placeholder="" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label for="exampleFormControlInput1" class="col-sm-2 col-form-label">เวลา</label>
                <div class="form-check col-sm-2">
                    <input class="form-check-input" type="radio" name="time" id="flexRadioDefault1" value ="morning">
                    <label class="form-check-label" for="flexRadioDefault1">
                        เช้า
                    </label>
                </div>
                <div class="form-check col-sm-2">
                    <input class="form-check-input" type="radio" name="time" id="flexRadioDefault2" value ="afternoon" checked>
                    <label class="form-check-label" for="flexRadioDefault2">
                        บ่าย
                    </label>
                </div>
            </div>
        <div class="mb-3 row" >
            <label for="exampleFormControlInput1" class="col-sm-2 form-label">เตียง</label>
            <div class="col-sm-4">
            <select name="beds" id="bed" class="form-select">
                <option selected>--กรุณาเลือกเตียง--</option>
                @foreach ($beds as $bed)
                    <option value="{{  $bed->id  }}">{{ $bed->room->name_short.'bed no' . $bed->no .' เตียง '.$bed->type }}</option>
                @endforeach
            </select>
            </div>
        </div>
        <div class="mb-3" >
            <label for="procedures" class="form-label">หัตถการ</label>
            <select name="procedures" id="procedure" class="form-select">
                <option selected>--กรุณาเลือกหัตถการ--</option>
                @foreach ($procedures as $procedure)
                <option value="{{  $procedure->id  }}">{{ $procedure->clinic_id. ' '. $procedure->name }}</option>
                @endforeach
            </select>
        </div>
        <input type="submit" value="submit" class="btn-primary">

    </form>
    </div>
</body>
</html>