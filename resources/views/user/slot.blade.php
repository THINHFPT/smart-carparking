@extends('user.layout');
@section('user');
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
                        <th style="width: 200px;">Address</th>
                        <th style="width: 100px;">Start Time</th>
                        <th style="width: 80px;">End Time</th>
                        <th style="width: 80px;" >Price</th>
                        <th style="width: 100px;">Desc</th>
                        <th style="width: 80px;">Blank</th>
                        <th style="width: 150px;">Max Slot</th>
                        <th style="width: 200px;" >Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($shows as $show)
                        <tr>
                            <td>{{$show->address}}</td>
                            <td>{{$show->start_time}}</td>
                            <td>{{$show->end_time}}</td>
                            <td>{{$show->price}}</td>
                            <td>{{$show->desc}}</td>
                            <td>{{$show->blank}}</td>
                            <td>{{$show->max_panking_slot}}</td>
                            <td>
                                <a href="{{route('user.bookCart',$show->id)}}" class="btn btn-primary" >
                                    Dat
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</main>
@endsection
