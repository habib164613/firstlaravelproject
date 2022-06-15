                  
                 
           
                
 
                   {!!Form::label('name', 'Category name')!!}
                  {!!Form::text('name', null, ['id'=>'name','class'=>'form-control form-control-sm' , 'placeholder'=>'Enter Category name'])!!}
                   
                   @error('name')
                    <p class="text-danger mb-0"><i class="fa-solid fa-triangle-exclamation"></i><small>{{ $message }}</small></p>
                    @enderror 
                

                  {!!Form::label('slug', 'Category slug',['class'=>'mt-3'])!!}
                  {!!Form::text('slug', null, ['id'=>'slug','class'=>'form-control form-control-sm' , 'placeholder'=>'Enter Category slug'])!!}
                   @error('slug')
                    <p class="text-danger mb-0"><i class="fa-solid fa-triangle-exclamation"></i><small>{{ $message }}</small></p>
                   @enderror

                  {!!Form::label('status', 'Category status',['class'=>'mt-3'])!!}
                  {!!Form::select('status', [1=>'publish',0=>'unpublish'],null, ['class'=>'form-select form-select-sm' , 'placeholder'=>'select category status'])!!}
                  @error('status')
                    <p class="text-danger mb-0"><i class="fa-solid fa-triangle-exclamation"></i><small>{{ $message }}</small></p>
                   @enderror

                   {!!Form::label('order_by', 'Category serial',['class'=>'mt-3'])!!}
                  {!!Form::number('order_by', null, ['class'=>'form-control form-control-sm' , 'placeholder'=>'Enter Category serial'])!!}
                  @error('order_by')
                    <p class="text-danger mb-0"><i class="fa-solid fa-triangle-exclamation"></i><small>{{ $message }}</small></p>
                   @enderror

                   @push('script')
                   <script>
                            $('#name').on('input', function() {
                            let value = $(this).val()
                            value= value.replaceAll(' ', '-').toLowerCase()
                            $('#slug').val(value)

                             })

                   </script>

                  @endpush

                   