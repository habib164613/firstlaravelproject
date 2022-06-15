@extends('backend.layout.auth_master')
@section('page_title','Register')
@section('content')
{!! Form:: open(['route'=>'register', 'method'=>'post']) !!}

    {!! Form:: label('name','Enter your name') !!}
    {!! Form:: text('name',null,['class'=>'form-control form-control-sm']) !!}
    {!! Form:: label('email','Enter your email',['class'=>'mt-3']) !!}
    {!! Form:: text('email',null,['class'=>'form-control form-control-sm']) !!}
    {!! Form:: label('password','Enter your password',['class'=>'mt-3']) !!}
    {!! Form:: password('password',['class'=>'form-control form-control-sm']) !!}
    {!! Form:: label('password_confirmation','Retype your password',['class'=>'mt-3']) !!}
    {!! Form:: password('password_confirmation',['class'=>'form-control form-control-sm']) !!}
    {!! Form:: button('Register',['class'=>'btn btn-success btn-sm mt-3', 'type'=>'submit']) !!}

    <p class="mt-2">Already member? <a href="{{route('login')}}">login here</a></p>

{!! Form:: close() !!}

@endsection
