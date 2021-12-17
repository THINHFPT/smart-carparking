@extends('admin.layout-static');

@section('content_admin');
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
                            <th style="width: 300px;">Address</th>
                            <th style="width: 150px;">SDT</th>
                            <th style="width: 100px;">Start Time</th>
                            <th style="width: 80px;">End Time</th>
                            <th style="width: 80px;" >Price</th>
                            <th style="width: 150px;">Max Panking Slot</th>
                            <th style="width: 200px;" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parking_homes as $parking_home)
                            <tr>
                                <td>{{$parking_home->address}}</td>
                                <td>{{$parking_home->sdt}}</td>
                                <td>{{$parking_home->start_time}}</td>
                                <td>{{$parking_home->end_time}}</td>
                                <td>{{$parking_home->price}}</td>
                                <td>{{$parking_home->max_panking_slot}}</td>
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
                    <span>
                        {{$parking_homes -> links()}}
                    </span>
                </div>
            </div>
        </div>
    </main>
@endsection

<style>
    .w-5{
        display: none;
    }
</style>
