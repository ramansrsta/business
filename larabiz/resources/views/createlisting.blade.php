@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">Create Listings <span class="float-right"> <a href="/larabiz/public/dashboard" class="btn btn-success btn-xs"> Go Back </a> </span></div>

                <div class="card-body">
                {!! Form::open(['action' => 'ListingsController@store','method' => 'POST']) !!}
                    {{ Form::bsText('name','',['placeholder' => 'Company Name']) }}
                    {{ Form::bsText('email','',['placeholder' => 'Email']) }}
                    {{ Form::bsText('website','',['placeholder' => 'Website']) }}
                    {{ Form::bsText('phone','',['placeholder' => 'Phone']) }}
                    {{ Form::bsText('address','',['placeholder' => 'Address']) }}
                    {{ Form::bsTextArea('bio','',['placeholder' => 'ABout the business'])}}
                    {{ Form::bsSubmit('Submit',['class' => 'btn btn-primary']) }}
                {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection