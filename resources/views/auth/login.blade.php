@extends('backend.layout.auth_master')
@section('page_title','Login')

@section('content')
    @if($errors->any())
                   @foreach($errors->all() as $error)
                    <p class="mb-0 text-danger">{{$error}}</p>
                   @endforeach

                  @endif
{!! Form:: open(['route'=>'login', 'method'=>'post']) !!}

    {!! Form:: label('email','Enter your name') !!}
    {!! Form:: text('email',null,['class'=>'form-control form-control-sm']) !!}
    {!! Form:: label('password','Enter your password',['class'=>'mt-3']) !!}
    {!! Form:: password('password',['class'=>'form-control form-control-sm']) !!}
    {!! Form:: button('login',['class'=>'btn btn-success btn-sm mt-3', 'type'=>'submit']) !!}

    <p class="mt-2">Not a Member? <a href="{{route('register')}}">register here</a></p>

{!! Form:: close() !!}

@endsection
