
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login - SB Admin</title>
    <link href="/admin/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Create Parking Homes </h3></div>
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
                                <form action="{{route('admin.parking_homes.update',$parking_home->id)}}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputAddress" name="address" value="{{$parking_home->address}}" type="text"  />
                                        <label for="inputEmail">Address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputErer_Code" name="erea_code"  value="{{$parking_home->erea_code}}" type="text"  />
                                        <label for="inputPassword">Erea Code</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputBlank" name="blank"  value="{{$parking_home->blank}}" type="text"  />
                                        <label for="inputPassword">Blank</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="input_Parking_Manager_Id"  value="{{$parking_home->parking_manager_id}}" name="parking_manager_id" type="text" />
                                        <label for="inputPassword">Parking Manager Id</label>
                                    </div>
                                    <div  class="d-flex">
                                        <button type="submit" class=" align-items-center btn btn-primary justify-content-between mt-4 mb-0"> Update</button>
                                        <button  class="align-items-center btn btn-danger justify-content-between mt-4 mb-0 mx-4">
                                            <a  href="{{route('parking_homes.index')}}" >Back</a>
                                        </button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="/admin/assets/js/scripts.js"></script>
</body>
</html>
