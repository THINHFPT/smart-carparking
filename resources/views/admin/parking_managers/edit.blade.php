

@extends('admin.layout-form');
@section('content_form');
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Parking Manager </h3></div>
                            <div class="card-body">
                                <form action="{{route('admin.parking_managers.update', $parking_manager->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input class="form-control" value="{{$parking_manager->name}}" id="inputName" name="name" type="text"  />
                                        <label for="inputEmail">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPosition" value="{{$parking_manager->sdt}}" name="sdt" type="text"  />
                                        <label for="inputPassword">SDT</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputAge" value="{{$parking_manager->password}}" name="password" type="password" />
                                        <label for="inputPassword">Password</label>
                                    </div>
                                    <button type="submit" class="d-flex align-items-center btn btn-primary justify-content-between mt-4 mb-0">
                                        Create
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
@endsection
