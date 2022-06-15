@extends('backend.layout.master')
@section('page_title' , 'edit sub-categories')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="card mt-5">
          <div class="card-header">
              <h4 class="mb-0">edit sub-categories</h4>
              <div class="card-body ">

                  {!! Form::model($sub_categories, ['route'=>['sub_categories.update',$sub_categories->id], 'method'=>'put']) !!}
                  @include('backend.pages.modules.sub_category.form')
                
                  {!!Form::button('<i class="fa-solid fa-edit"></i> Update sub_categories',['class'=>'btn btn-success btn-sm mt-2', 'type'=>'submit'])!!}


                  {!! Form::close()!!}
              </div>
          </div>
      </div>
  </div>
</div>

                       
@endsection