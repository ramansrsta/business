@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Listings <span class="float-right"> <a href="/larabiz/public/dashboard" class="btn btn-success btn-xs"> Go Back </a> </span></div>

                <div class="card-body">
                {!! Form::open(['action' => ['ListingsController@update',$listing->id],'method' => 'POST']) !!}
                    {{ Form::bsText('name',$listing->name,['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email',$listing->email,['placeholder' => 'Email']) }}
                    {{ Form::bsText('website',$listing->website,['placeholder' => 'Website']) }}
                    {{ Form::bsText('phone',$listing->phone,['placeholder' => 'Phone']) }}
                    {{ Form::bsText('address',$listing->address,['placeholder' => 'Address']) }}
                    {{ Form::bsTextArea('bio',$listing->bio,['placeholder' => 'ABout the business'])}}
                    {{Form::hidden('_method', 'PUT')}}
                    {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection