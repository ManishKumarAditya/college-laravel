@extends('base')
@section('title')
this is|insertpage
@endsection
@section('content')
<div class="container bg-light mt-5">
    <div class="row">
        <div class="col-lg-6 mx-auto">
            <div class="card bg-light">
                <div class="card-header bg-dark text-white text-center">
                    <h3 class="lead">Insert college information</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('insert')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Type</label>
                            <select name="type" id="" class="form-control">
                                <option>Law college</option>
                                <option>Women's college</option>
                                <option> Technical Institutes and Professional Schools</option>
                                <option>Fashion's Colleges</option>
                            </select>
                            <small class="text-danger">{{$errors->first('type')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">College Name</label>
                            <input type="text" name="college_name" class="form-control" value="{{old('college_name')}}">
                            <small class="text-danger">{{$errors->first('college_name')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">Course_name</label>
                            <input type="text" name="course" class="form-control" value="{{old('course')}}">
                            <small class="text-danger">{{$errors->first('course')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">city</label>
                            <input type="text" name="city" class="form-control" value="{{old('city')}}">
                            <small class="text-danger">{{$errors->first('city')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">Disit</label>
                            <input type="text" name="disit" class="form-control" value="{{old('disit')}}">
                            <small class="text-danger">{{$errors->first('disit')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">state</label>
                            <input type="text" name="state" class="form-control" value="{{old('state')}}">
                            <small class="text-danger">{{$errors->first('state')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">Est_year</label>
                            <input type="date" name="est_year" class="form-control" value="{{old('est_year')}}">
                            <small class="text-danger">{{$errors->first('est_year')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">contact Us</label>
                            <input type="text" name="contact" class="form-control" value="{{old('contact')}}">
                            <small class="text-danger">{{$errors->first('contact')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">website</label>
                            <input type="text" name="website" class="form-control" value="{{old('website')}}">
                            <small class="text-danger">{{$errors->first('website')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control" value="{{old('image')}}">
                            <small class="text-danger">{{$errors->first('image')}}</small>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea name="description" id="" rows="10" class="form-control"></textarea>
                            <small class="text-danger">{{$errors->first('description')}}</small>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="send" class="btn btn-danger btn-block">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
