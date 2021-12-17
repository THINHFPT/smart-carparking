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
                        <th style="width: 200px;">Address</th>
                        <th style="width: 100px;">Erea Code</th>
                        <th style="width: 100px;">Start Time</th>
                        <th style="width: 100px;">End Time</th>
                        <th style="width: 200px;">Desc</th>
                        <th style="width: 80px;">Blank</th>
                        <th style="width: 200px;">Max Panking Slot</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($datas as $data)
                        <tr>
                            <td>{{$data->address}}</td>
                            <td>{{$data->erea_code}}</td>
                            <td>{{$data->start_time}}</td>
                            <td>{{$data->end_time}}</td>
                            <td>{{$data->desc}}</td>
                            <td>{{$data->blank}}</td>
                            <td>{{$data->max_panking_slot}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
@endsection
