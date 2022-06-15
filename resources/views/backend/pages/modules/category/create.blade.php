@extends('backend.layout.master')
@section('page_title' , 'create category')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="card mt-5">
          <div class="card-header">
              <h4 class="mb-0">create category</h4>
              <div class="card-body ">

                <!--   @if($errors->any())
                   @foreach($errors->all() as $error)
                    <p class="mb-0 text-danger">{{$error}}</p>
                   @endforeach

                  @endif -->

                  {!! Form::open(['route'=>'category.store', 'method'=>'post'])!!}
                  @include('backend.pages.modules.category.form')
                  {!!Form::button('<i class="fa-solid fa-square-plus"></i> Create new Category',['class'=>'btn btn-success btn-sm mt-2', 'type'=>'submit'])!!}
                  {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>
</div>

                       
@endsection