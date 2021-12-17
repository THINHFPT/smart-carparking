@extends('nhaxe.layout-bootstrap');
@section('parking');
<div class="container">
    <div class="row mt-5">
        <div class="col-4 bg-dark text-center">
            <div class=" pt-5 pb-5">
                <div class="mt-5 mb-5 ">
                    <img class="rounded-circle" src="https://profile-picture-upload-nodejs.s3.amazonaws.com/download.png">
                </div>
            </div>
        </div>
        <div class="col-8">
            <div class="px-4">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Parking Manager</h1>
                    </div>
                </div>
                <div class="mt-5">
                    <form action="{{route('parking.updateHome',$data->id)}}" method="POST" >
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <div class="col-6 d-none">
                                <label for="example1" class="form-label">Parking Manager Id</label>
                                <input type="text" class="form-control" value="{{Auth::guard('parking')->user()->id}}" name="parking_manager_id" id="example1">
                                <span class="text-danger" >@error('parking_manager_id'){{$message}}@enderror</span>
                            </div>
                            <div class="col-6">
                                <label for="example1" class="form-label">Apartment number</label>
                                <input type="text" class="form-control" value="{{explode(", ",$data->address)[0]}}" name="apartment_number" id="example1" placeholder="vd : số nhà 45">
                                <span class="text-danger" >@error('apartment_number'){{$message}}@enderror</span>
                            </div>
                            <div class="col-6">
                                <label for="example2" class="form-label"> Alley</label>
                                <input type="text" class="form-control"  value="{{explode(", ",$data->address)[1]}}" name="alley" id="example2" placeholder="">
                                <span class="text-danger" >@error('alley'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6 ">
                                <label for="example3" class="form-label">Quarter</label>
                                <input type="text" class="form-control"  value="{{explode(", ",$data->address)[2]}}" name="quarter" id="example3" />
                                <span class="text-danger" >@error('quarter'){{$message}}@enderror</span>
                            </div>
                            <div class="col-6">
                                <label for="example4" class="form-label">Street/Ward</label>
                                <select class="form-control"  name="street_ward">
                                    <option value="{{explode(", ",$data->address)[3]}}">{{explode(", ",$data->address)[3]}}</option>
                                </select>
                                <span class="text-danger" >@error('street_ward'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6 ">
                                <label for="example5" class="form-label">district</label>
                                <select class="form-control" name="district">
                                    <option value="Nam Từ Liêm">Nam Từ Liêm</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="example6" class="form-label">Phone Number</label>
                                <input type="text" name="sdt" value="{{$data->sdt}}" class="form-control" id="example6">
                                <span class="text-danger" >@error('sdt'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-6 ">
                                <label for="example7" class="form-label">House area</label>
                                <input type="text" name="area"  value="{{$data->area}}" class="form-control" id="example7">
                                <span class="text-danger" >@error('area'){{$message}}@enderror</span>
                            </div>
                            <div class="col-6">
                                <label for="example8" class="form-label">Max slot Parking</label>
                                <input type="text" name="max_panking_slot"  value="{{$data->max_panking_slot}}" class="form-control" id="example8">
                                <span class="text-danger" >@error('max_panking_slot'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-4 ">
                                <label for="example9" class="form-label">Price</label>
                                <input type="text" name="price"  value="{{$data->price}}" class="form-control" id="example9">
                                <span class="text-danger" >@error('price'){{$message}}@enderror</span>
                            </div>
                            <div class="col-4">
                                <label for="example10" class="form-label">Start Time</label>
                                <input type="text" name="start_time" value="{{$data->start_time}}" class="form-control" id="example10">
                                <span class="text-danger" >@error('start_time'){{$message}}@enderror</span>
                            </div>
                            <div class="col-4 ">
                                <label for="example11" class="form-label">End Time</label>
                                <input type="text" name="end_time"  value="{{$data->end_time}}" class="form-control" id="example11">
                                <span class="text-danger" >@error('end_time'){{$message}}@enderror</span>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
