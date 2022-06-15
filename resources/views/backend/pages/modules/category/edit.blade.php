@extends('backend.layout.master')
@section('page_title' , 'edit category')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="card mt-5">
          <div class="card-header">
              <h4 class="mb-0">edit category</h4>
              <div class="card-body ">

                  {!! Form::model($category, ['route'=>['category.update' , $category->id], 'method'=>'put']) !!}
                  @include('backend.pages.modules.category.form')
                
                  {!!Form::button('<i class="fa-solid fa-edit"></i> Update Category',['class'=>'btn btn-success btn-sm mt-2', 'type'=>'submit'])!!}


                  {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>
</div>

                       
@endsection