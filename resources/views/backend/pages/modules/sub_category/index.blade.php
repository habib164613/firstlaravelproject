@extends('backend.layout.master')
@section('page_title' , 'Sub Category List')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card mt-5">
          <div class="card-header">
                  <div class="row">
                      <div class="col-md-6">
                      <h4 class="mb-0">Sub Category List</h4>
                      </div>
                      <div class="col-md-6 text-end">
                          <a href="{{route('sub-categories.create')}}"><button class="button btn btn-success btn-sm"><i class="fa-solid fa-plus"></i></button></a>
                      </div>
                  </div>
                 
              </div>
              
              <div class="card-body ">
                  <table class="table table-striped table-hover table table-bordered">
                      <thead>
                          <tr>
                              <th>SL</th>
                              <th>Sub Category Name</th>
                              <th> Category </th>
                              <th>Slug</th>
                              <th>Slug ID</th>
                              <th>Status</th>
                              <th>Order By</th>
                              <th>Time</th>
                              <th>Action</th>
                          </tr>
                      </thead>

                      <tbody>
                          @php $sl= 1 @endphp
                          @foreach($sub_categories as $sub_category )
                          <tr>
                              <td class="align-middle">{{$sl++}}</td>
                              <td class="align-middle">{{$sub_category->name}}</td>
                              <td class="align-middle">{{$sub_category->category->name}}</td>
                              <td class="align-middle">{{$sub_category->slug}}</td>
                              <td class="align-middle">{{$sub_category->slug_id}}</td>
                              <td class="align-middle">{{$sub_category->status==1? 'published' : 'unpublished' }}</td>
                              <td class="align-middle">{{$sub_category->order_by}}</td>

                              <td class="align-middle">
                                 <p class="text-success">{{$sub_category->created_at->toDayDateTimeString()}}</p> 
                                 <p class="text-info">{{$sub_category->updated_at == $sub_category->created_at ? 'Not updated' : $sub_category->updated_at->toDayDateTimeString() }}</p> 
                              </td>
                              
                              <td class="d-flex">
                                  <a href="{{route('sub-categories.show', $sub_category->id)}}">
                                      <button class="btn btn-info btn-sm ms-1"><i class="fa-solid fa-eye"></i></button>
                                  </a>
                                  <a href="{{route('sub-categories.edit', $sub_category->id)}}">
                                      <button class="btn btn-warning btn-sm ms-1"><i class="fa-solid fa-edit"></i></button>
                                  </a>
                                    {!! Form::open(['route'=>['sub-categories.destroy', $sub_category->id], 'method'=>'delete', 'id'=>'category_delete_form_' .$sub_category->id]) !!}
                                    {!! Form::button('<i class="fa-solid fa-trash"></i>', ['type'=>'button', 'data-id'=>$sub_category->id , 'id'=>'sub_category_delete_button_' .$sub_categories, 'class'=>'d-inline btn btn-sm btn-danger ms-1 category-delete-button']) !!}
                                    {!! Form::close() !!}


                                  
                              </td>
                          </tr>
                          @endforeach
                      </tbody>

                  </table>

              </div>
          </div>
      </div>
  </div>
 
  @push('script')
  <script>
      $(' .category-delete-button').on('click', function() {
          let id= $(this).attr('data-id')


    Swal.fire({
    title: 'Are you sure?',
    text: "You won't be able to revert this!",
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
    if (result.isConfirmed) {
      $('#category_delete_form_'+id).submit()
    }
  })
          
      })

  </script>

  @endpush



 @if(Session::has('mgs'))
  @push('script')
  <script>
      Swal.fire({
        position: 'top-end',
        icon: '<?php echo Session('class')?>',
        toast:true,
        title: '<?php echo Session('mgs')?>',
        showConfirmButton: false,
        timer: 5000
})
  </script>
  @endpush
  @endif
                       
@endsection