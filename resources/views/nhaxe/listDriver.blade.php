@extends('nhaxe.layout-bootstrap')
@section('parking');
<div class="container-fluid">
    <a class="btn btn-success m-3" href="{{route('parking.home')}}">Back</a>
    <table class="table">
        <thead>
        <tr>
            <th style="width: 150px;">Name</th>
            <th  style="width: 300px;">email</th>
            <th style="width: 100px;">SDT</th>
            <th style="width: 100px;">Time</th>
            <th style="width: 100px;">Teck time</th>
            <th style="width: 100px;">Vehicle</th>
        </tr>
        </thead>
        <tbody>
            @foreach($datas as $data)
                <tr>
                   <td>{{$data->name}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->sdt}}</td>
                    <td>{{$data->time}}</td>
                    <td>{{$data->tecktime}}</td>
                    <td>{{$data->vehicle}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
