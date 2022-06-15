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
                        <th>{{$sub_categories->id}}</th>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <th>{{$sub_categories->name}}</th>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <th>{{$sub_categories->slug}}</th>
                    </tr>
                    <tr>
                        <th>Slug Id</th>
                        <th>{{$sub_categories->slug_id}}</th>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <th>{{$sub_categories->status==1? 'published': 'unpublished'}}</th>
                    </tr>
                    <tr>
                        <th>Order by</th>
                        <th>{{$sub_categories->order_by}}</th>
                    </tr>
                    <tr>
                        <th>Created At</th>
                        <th>{{$sub_categories->created_at->toDayDateTimeString()}}</th>
                    </tr>
                    <tr>
                        <th>Updated At</th>
                        <th>{{$sub_categories->updated_at == $sub_categories->created_at ? 'Not updated' : $sub_categories->updated_at->toDayDateTimeString() }}</th>
                    </tr>

                </table>
                    <a href="{{route('sub-categories.index')}}"><button class=" btn btn-sm btn-success">Back</button></a>

              </div>
          </div>
      </div>
  </div>
  </div>
                       
@endsection