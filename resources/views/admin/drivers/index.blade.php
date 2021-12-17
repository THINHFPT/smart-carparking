@extends('admin.layout-static');

@section('content_admin');
<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Parking Homes</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Parking Homes
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th style="width: 150px;">Address</th>
                            <th style="width: 100px;">Erea Code</th>
                            <th style="width: 100px;">Start Time</th>
                            <th style="width: 80px;">End Time</th>
                            <th style="width: 100px;">Desc</th>
                            <th style="width: 80px;">Blank</th>
                            <th style="width: 150px;">Max Panking Slot</th>
                            <th style="width: 200px;" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($drivers as $driver)
                            <tr>
                                <td>{{$driver->address}}</td>
                                <td>{{$driver->erea_code}}</td>
                                <td>{{$driver->start_time}}</td>
                                <td>{{$driver->end_time}}</td>
                                <td>{{$driver->desc}}</td>
                                <td>{{$driver->blank}}</td>
                                <td>{{$driver->max_panking_slot}}</td>
                                <th style="width: 100px;" >
                                    <form action="{{route('admin.parking_managers.destroy',$parking_home->id)}}" method="POST">
                                        <a class="btn btn-info" href="{{route('admin.parking_homes.show', $parking_home->id)}}" >
                                            Show
                                        </a>
                                        <a class="btn btn-primary" href="{{route('admin.parking_homes.edit', $parking_home->id)}}" >Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" >Delete</button>
                                    </form>
                                </th>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
