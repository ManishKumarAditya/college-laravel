@extends('base')
@section('title')
this is|homepage
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3">
            <div class="list-group mt-5">
                <a href="" class=" list-group-item list-group-item-action bg-danger text-white"> Categories of
                    colleges</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white ">Women's college</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Law college</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Fashin's college</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Technical Institutes and
                    Professional Schools</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Technical Institutes and
                    Professional Schools</a>
                <a href="" class="list-group-item list-group-item-action bg-dark text-white">Technical Institutes and
                    Professional Schools</a>
            </div>
        </div>
        <div class="col-lg-9">
            @foreach ($data as $c)
            <div class="card mt-3">
                <div class="card-header bg-warning text-center">
                    <h4 class=""><i>{{$c->college_name}}</i></h2>
                </div>
                <div class="card-body bg-secondary">
                    <img src="{{asset('images/'.$c->image)}}" alt="" width="300px" height="280px" class="float-right">
                    <div class="mt-5 ml-5 text-white">
                        <b>
                            <h5 class="lead text-warning"><b>{{$c->type}}</b></h5>
                        </b>
                        <h5 class="lead">City name:-{{$c->city}}</h5>
                        <h6 class="lead">Dist:-{{$c->disit}}</h6>
                        <h6 class="lead">Est_year:-{{$c->est_year}}</h6>
                        <h6 class="lead">Course available:-{{$c->course}}</h6>
                        <h6 class="lead">Contact US:-{{$c->contact}}</h6>
                        <hr>
                        <h6 class="lead">
                            <h4 class="text-warning">Dscription:-</h4>{{$c->description}}
                        </h6>
                        <hr>
                        <h6 class="lead">Go to website:-{{$c->website}}</h6>
                        <hr>
                        <h5 class="lead">Contact Us:-{{$c->contact}}</h5>
                    </div>
                    <div class="text-center">
                        <a href="" class="btn btn-danger">View</a>
                        <a href="{{route('edit',['id'=>$c->id])}}" class="btn btn-danger">Edit</a>
                        <a href="{{route('destroy',['id'=>$c->id])}}" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
