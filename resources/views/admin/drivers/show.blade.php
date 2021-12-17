
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
                            <th style="width: 20%;" >Parking Manager</th>
                            <th style="width: 20%;">Address</th>

                            <th style="width: 20%;">Blank</th>
                            <th style="width: 15%;">Erea Code</th>
                            <th style="width: 20%;" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parking_homes as $parking_home)
                            <tr>
                                <td>{{$parking_home->parking_manager_id}}</td>
                                <td>{{$parking_home->address}}</td>
                                <td>{{$parking_home->blank}}</td>
                                <td>{{$parking_home->erea_code}}</td>
                                <th style="width: 200px;" >
                                    <form action="{{route('admin.parking_managers.destroy',$parking_home->id)}}" method="POST">
                                        <a class="btn btn-info">
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
