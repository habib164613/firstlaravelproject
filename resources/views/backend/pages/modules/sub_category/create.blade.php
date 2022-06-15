@extends('backend.layout.master')
@section('page_title' , 'Create Sub Category')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="card mt-5">
          <div class="card-header">
              <h4 class="mb-0">Create New Sub Category</h4>
              <div class="card-body ">

                <!--   @if($errors->any())
                   @foreach($errors->all() as $error)
                    <p class="mb-0 text-danger">{{$error}}</p>
                   @endforeach

                  @endif -->

                  {!! Form::open(['route'=>'sub-categories.store', 'method'=>'post'])!!}
                  @include('backend.pages.modules.sub_category.form')
                  {!!Form::button('<i class="fa-solid fa-square-plus"></i> Create New Sub Category',['class'=>'btn btn-success btn-sm mt-2', 'type'=>'submit'])!!}
                  {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>
</div>

                       
@endsection