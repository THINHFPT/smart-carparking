@extends('nhaxe.layout-bootstrap')
@section('parking')
<div class="container-fluid">
    <div class="d-flex justify-content-between" >
        <div class="m-2" >
            <a href="{{route('parking.profile')}}" class="btn-success btn" >Create Parking Home</a>
        </div>
        <div class="m-2" >
            <a class="btn btn-danger"  href="{{route('parking.logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" >
                Logout
                <form action="{{route('parking.logout')}}" method="post" class="d-none" id="logout-form" >@csrf</form>
            </a>
        </div>
    </div>

    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px;">Id</th>
            <th  style="width: 300px;">Address</th>
            <th style="width: 100px;">SDT</th>
            <th style="width: 100px;">Price</th>
            <th style="width: 100px;">Area</th>
            <th style="width: 100px;">Start Time</th>
            <th style="width: 100px;">End Time</th>
            <th scope="col">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($datas as $data )
            <tr>
                <td>{{$data->id}}</td>
                <td>{{$data->address}}</td>
                <td>{{$data->sdt}}</td>
                <td>{{$data->price}} đ</td>
                <td>{{$data->area}}</td>
                <td>{{$data->start_time}}</td>
                <td>{{$data->end_time}}</td>
                <th style="width: 200px;" >
                    <form method="POST">
                        <a  href="{{route('parking.listDriver',$data->id)}}" class="btn btn-info">
                            Show
                        </a>
                        <a class="btn btn-primary" href="{{route('parking.editHome', $data->id)}}">Edit</a>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@endsection
