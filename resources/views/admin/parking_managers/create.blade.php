
@extends('admin.layout-form');
@section('content_form');
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Parking Mangager </h3></div>
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>
                                            @foreach($errors->all() as $error)
                                                <li>{{ $error }}<li>
                                                @endforeach
                                        </li>
                                    </ul>
                                </div>
                            @endif
                            <div class="card-body">
                                <form action="{{route('admin.parking_managers.store')}}" method="POST">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputName" name="name" type="text"  />
                                        <label for="inputEmail">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPosition" name="sdt" type="text"  />
                                        <label for="inputPassword">sdt</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" name="password" type="text" />
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
