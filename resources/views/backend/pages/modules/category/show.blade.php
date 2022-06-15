@extends('backend.layout.master')
@section('page_title' , 'Category details')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-6">
      <div class="card mt-5">
          <div class="card-header">
              <h4 class="mb-0"> Category details</h4>
              <div class="card-body ">
                <table class="table table-bordered table-hover">
                    <tr>
                        <th>ID</th>
                        <th>{{$category->id}}</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>{{$category->name}}</th>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <th>{{$category->slug}}</th>
                    </tr>
                    <tr>
                        <th>Slug Id</th>
                        <th>{{$category->slug_id}}</th>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>{{$category->status==1? 'published': 'unpublished'}}</th>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <th>{{$category->order_by}}</th>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <th>{{$category->created_at->toDayDateTimeString()}}</th>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <th>{{$category->updated_at == $category->created_at ? 'Not updated' : $category->updated_at->toDayDateTimeString() }}</th>
                    </tr>

                </table>
                    <a href="{{route('category.index')}}"><button class=" btn btn-sm btn-success">Back</button></a>

              </div>
          </div>
      </div>
  </div>
  </div>
                       
@endsection