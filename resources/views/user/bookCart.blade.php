
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css" />
</head>
<body>

{{--@extends('user.layout');--}}
{{--@section('user');--}}

    <form action="{{route('user.createSpot')}}" method="POST">
        @csrf
        <div class="row justify-content-md-center" >
            <div class="col-3">
                @if(Session::get('fail'))
                    <div class="alert alert-danger" >
                        {{Session::get('fail')}}
                    </div>
                @endif
                <div class="mb-3 ">
                    <label for="exampleInputVehicle" class="form-label">Paring home ID</label>
                    <input type="text" class="form-control" name="parking_home_id" value="{{$data->id}}"
                           id="exampleInputVehicle">
                    <span class="text-danger">@error('parking_home_id'){{$message}}@enderror</span>
                </div>
                <div class="mb-3  ">
                    <label for="exampleInputVehicle" class="form-label">User ID</label>
                    <input type="text" class="form-control" name="driver_id" value="{{auth()->user()->id}}"
                           id="exampleInputVehicle">
                    <span class="text-danger">@error('driver_id'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputVehicle" class="form-label">Vehicle</label>
                    <input type="text" class="form-control" name="vehicle" id="exampleInputVehicle">
                    <span class="text-danger">@error('vehicle'){{$message}}@enderror</span>
                </div>
                    <div class="mb-3">
                        <label for="exampleInputVehicle" class="form-label">sdt</label>
                        <input type="text" class="form-control" name="sdt" id="exampleInputVehicle">
                        <span class="text-danger">@error('sdt'){{$message}}@enderror</span>
                    </div>
                <div class="mb-3">
                    <label for="exampleInputSendingtime" class="form-label">Sending time</label>
                    <input type="text" class="form-control" name="time" id="exampleInputSendingtime">
                    <span class="text-danger">@error('time'){{$message}}@enderror</span>
                </div>
                <div class="mb-3">
                    <label for="exampleInputTecktime" class="form-label">Teck time</label>
                    <input type="text" class="form-control" name="tecktime" id="exampleInputTecktime">
                    <span class="text-danger">@error('tecktime'){{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</body>
</html>


{{--@endsection--}}
