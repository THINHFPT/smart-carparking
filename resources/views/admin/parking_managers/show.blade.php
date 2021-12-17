@extends('admin.layout-static')
@section('content_admin')
    <div class="container-fluid px-4">
        <h1 class="mt-4 mb-4">Name : {{ $datas[0] -> name }}</h1>
        <h1 class="mt-4 mb-4">Phone number : {{ $datas[0]->sdt }}</h1>
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                DataTable Parking Managers
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr>
                        <th style="width: 400px;">Address</th>
                        <th style="width: 100px;">Start Time</th>
                        <th style="width: 100px;">End Time</th>
                        <th style="width: 200px;">Max Panking Slot</th>
                    </tr>
                    </thead>
                    <tbody>
{{--                    @foreach($data->parking as $value)--}}
{{--                        <tr>--}}
{{--                            <td>{{$value->id}}</td>--}}
{{--                            <td>{{$value->address}}</td>--}}
{{--                            <td>{{$value->erea_code}}</td>--}}
{{--                            <td>{{$value->blank}}</td>--}}
{{--                        </tr>--}}
{{--                    @endforeach--}}

                    @foreach($datas as $data)
                        <tr>
                        <td>{{$data->address}}</td>
                        <td>{{$data->start_time}}</td>
                        <td>{{$data->end_time}}</td>
                        <td>{{$data->max_panking_slot}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

