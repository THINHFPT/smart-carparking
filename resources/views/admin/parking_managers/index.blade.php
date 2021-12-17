@extends('admin.layout-static');

@section('content_admin');

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Parking Managers</h1>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    DataTable Parking Managers
                </div>
                <div class="card-body">
                    <table id="datatablesSimple">
                        <thead>
                        <tr>
                            <th style="width: 5%;">Id</th>
                            <th style="width: 15%;">Name</th>
                            <th style="width: 15%;">Email</th>
                            <th style="width: 25%;" >Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($parking_managers as $parking_manager)
                             <tr>
                                 <td>{{$parking_manager->id}}</td>
                                 <td>{{$parking_manager->name}}</td>
                                 <td>{{$parking_manager->email}}</td>
                                 <th style="width: 200px;" >
                                     <form action="{{route('admin.parking_managers.destroy',$parking_manager->id)}}" method="POST">
                                         <a class="btn btn-info" href="{{route('admin.parking_managers.show', $parking_manager->id)}}" >
                                             Show
                                         </a>
                                         <a class="btn btn-primary" href="{{route('admin.parking_managers.edit', $parking_manager->id)}}" >Edit</a>
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
