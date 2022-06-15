@extends('backend.layout.master')
@section('page_title' , 'Category List')
@section('content')
 
<div class="row justify-content-center">
  <div class="col-md-12">
      <div class="card mt-5">
          <div class="card-header">
                  <div class="row">
                      <div class="col-md-6">
                      <h4 class="mb-0"> Category List</h4>
                      </div>
                      <div class="col-md-6 text-end">
                          <a href="{{route('category.create')}}"><button class="button btn btn-success btn-sm"><i class="fa-solid fa-plus"></i></button></a>
                      </div>
                  </div>
                 
              </div>
              
              <div class="card-body ">
                  <table class="table table-striped table-hover table table-bordered">
                      <thead>
                          <tr>
                              <th>SL</th>
                              <th>Category Name</th>
                              <th>Slug</th>
                              <th>Slug ID</th>
                              <th>Status</th>
                              <th>Order By</th>
                              <th>Time</th>
                              <th>Action</th>
                          </tr>
                      </thead>

                      <tbody>
                          @php $SL= 1 @endphp
                          @foreach($categories as $category )
                          <tr>
                              <td class="align-middle">{{$SL++}}</td>
                              <td class="align-middle">
                                  <p>{{$category->name}}</p>
                                  <p>
                                      <small>
                                          @foreach($category?->sub_categories as $sub_category)
                                            <span class="me-2">{{$sub_category->name}}</span>
                                          @endforeach
                                      </small>
                                  </p>

                              </td>
                              <td class="align-middle">{{$category->slug}}</td>
                              <td class="align-middle">{{$category->slug_id}}</td>
                              <td class="align-middle">{{$category->status==1? 'published' : 'unpublished' }}</td>
                              <td class="align-middle">{{$category->order_by}}</td>

                              <td class="align-middle">
                                 <p class="text-success">{{$category->created_at->toDayDateTimeString()}}</p> 
                                 <p class="text-info">{{$category->updated_at == $category->created_at ? 'Not updated' : $category->updated_at->toDayDateTimeString() }}</p> 
                              </td>
                              
                              <td class="d-flex">
                                  <a href="{{route('category.show', $category->id)}}">
                                      <button class="btn btn-info btn-sm ms-1"><i class="fa-solid fa-eye"></i></button>
                                  </a>
                                  <a href="{{route('category.edit', $category->id)}}">
                                      <button class="btn btn-warning btn-sm ms-1"><i class="fa-solid fa-edit"></i></button>
                                  </a>
                                    {!! Form::open(['route'=>['category.destroy', $category->id], 'method'=>'delete', 'id'=>'category_delete_form_' .$category->id]) !!}
                                    {!! Form::button('<i class="fa-solid fa-trash"></i>', ['type'=>'button', 'data-id'=>$category->id , 'id'=>'category_delete_button_' .$category->id, 'class'=>'d-inline btn btn-sm btn-danger ms-1 category-delete-button']) !!}
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