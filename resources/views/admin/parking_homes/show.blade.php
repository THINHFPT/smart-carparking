
@extends('admin.layout-static');

@section('content_admin');
<div id="layoutSidenav_content">
    <main>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Parking Managers
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                        <tr>
                            <th style="width: 100px;">Username</th>
                            <th style="width: 200px;">Email</th>
                            <th style="width: 100px;">Start Time</th>
                            <th style="width: 100px;">End Time</th>
                            <th style="width: 200px;">vehicle</th>
                            <th style="width: 200px;">Price</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)

                        <tr>
                            <td>{{$data->name}}</td>
                            <td>{{$data->email_sdt}}</td>
                            <td>{{$data->time}}</td>
                            <td>{{$data->tecktime}}</td>
                            <td>{{$data->vehicle}}</td>
                            <td>{{$data->price}}</td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
