@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{$listing->name}}  <span class="float-right"> <a href="/larabiz/public/dashboard" class="btn btn-success btn-xs"> Go Back </a> </span></div>

                <div class="card-body">
                    <ul class="list-group">                  
                        <li class="list-group-item"> Address: {{$listing->name}} </a> </li>
                        <li class="list-group-item"> Email: {{$listing->email}} </a> </li>
                    </ul>
                    <hr>
                    <div class="card card-body bg-light">
                        <h3> Bio </h3>
                         {{$listing->bio}}
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection