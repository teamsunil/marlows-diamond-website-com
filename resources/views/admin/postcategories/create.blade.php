@extends('layouts.admin.app')

@section('content')


<?php 
   if(isset($getData->parent_id) && $getData->parent_id != 0){
      $selectedParentId = $getData->parent_id;
   }elseif(isset($getData->parent_id) && $getData->parent_id == 0){
      $selectedParentId = $getData->id;
   }else{
      $selectedParentId = null;
   }
?>
@if (\Session::has('success'))
    <div class="alert alert-success">
        <ul>
            <li>{!! \Session::get('success') !!}</li>
        </ul>
    </div>
@endif
@if (\Session::has('error'))
    <div class="alert alert-error">
        <ul>
            <li>{!! \Session::get('error') !!}</li>
        </ul>
    </div>
@endif
@if ($errors->any())
   <div class="alert alert-danger">
      @foreach ($errors->all() as $error)
         {{$error}}
      @endforeach
   </div>
@endif
<div class="content">
   <!-- DataTables Example -->
   <section class="content">
      <div class="container-fluid">
         <form id="addForm" action="{{ asset('admin/posts/categories/add') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <input type="hidden" name="table_id" id="table_id" value="{{isset($getData->id)?$getData->id:''}}">
            <input type="hidden" name="slug_bk" id="slug_bk" value="{{isset($getData->slug)?$getData->slug:''}}">
            <input type="hidden" name="image_url_bk" id="image_url_bk" value="{{isset($getData->image_url)?$getData->image_url:''}}">
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Add Category</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Name</label>
                              <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{isset($getData->name)?$getData->name:''}}">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Slug</label>
                              <input type="text" id="slug" name="slug" class="form-control" placeholder="Slug" value="{{isset($getData->slug)?$getData->slug:''}}">
                           </div>
                        </div>
                        <div class="form-group">
                            <div class="form-label-group">
                                <label for="product_name">Parent Category</label>
                                <select name="parent_id" id="parent_id" class="form-control" >

                                </select>             
                            </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Description</label>
                              <textarea id="description" name="description" class="form-control ckeditor">{{isset($getData->description)?$getData->description:''}}</textarea>                    
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card card-header">
                     <div class="form-group">
                        <div class="form-label-group">
                          <label for="product_name">Language</label>
                          {{ adminLanguageDropDown() }} 
                         
                        </div>
                    </div> 

                     <div class="form-group">
                        <label for="exampleInputFile">Category Image</label>
                        <div class="input-group">
						@if(isset($getData->image_url) && !empty($getData->image_url))
                           <img src="{{asset('storage').'/categories/'.$getData->image_url}}" alt="" width="50px">
                        @endif
                           <div class="custom-file">
                              <input type="file" id="image" name="image" class="custom-file-input" accept="image/*">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <select id="status" name="status" class="form-control">
                              <option value="">Select Status</option>
                              @if(isset($getData->status) && $getData->status == 1)
                                 <option value="1" selected>Enable</option>
                                 <option value="0">Disable</option>
                              @elseif(isset($getData->status) && $getData->status == 0)
                                 <option value="1">Enable</option>
                                 <option value="0" selected>Disable</option>
                              @else
                                 <option value="1">Enable</option>
                                 <option value="0">Disable</option>
                              @endif
                           </select>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <label for="meta_title">Meta Title</label>
                           <input type="text" id="meta_title" name="meta_title" class="form-control" placeholder="Meta Title" value="{{isset($getData->meta_title)?$getData->meta_title:''}}">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <label for="meta_keyword">Meta Keywords</label>
                           <input type="text" id="meta_keyword" name="meta_keyword" class="form-control" placeholder="Meta Title" value="{{isset($getData->meta_keyword)?$getData->meta_keyword:''}}">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <label for="meta_keyword">Meta Description</label>
                           <textarea id="meta_description" name="meta_description" class="form-control ckeditor" placeholder="Meta Description" >{{isset($getData->meta_description)?$getData->meta_description:''}}</textarea>                    
                        </div>
                     </div>
                     <div class="form-group">
                        <button type="submit" class="btn btn-primary">Submit</button>
                     </div>
                  </div>
               </div>
            </div>
         </form>
      </div>
   </section>
</div>
<!-- Sticky Footer -->

@endsection

@section('js')
    <script>
		$(document).on('change', '.custom-file-input', function (event) {
		$(this).next('.custom-file-label').html(event.target.files[0].name);
		})	
	
         $(function () {
               // Summernote
               $('#description').summernote({
				 height:250
				})
         
         });

         var selectedCategoryData = '{{$selectedParentId}}';
        
         getParentCategory(selectedCategoryData);

         function getParentCategory(selectedCategoryData){
               // console.log("selectedCategoryData");
               // console.log(selectedCategoryData);
               $.ajax({
                  type:'POST',
                  url:'{{asset("admin/get-postcategories")}}',
                  data:{
                     '_token':"{{csrf_token()}}",
                     'id':$(this).data('record'),
                     'status':$(this).data('value')
                  },
                  success:function(res){
                        if(res){
                           $("#parent_id").append('<option value="">Select Category</option>'+res);
                           /*$.each(res,function(key,value){
                              if(value.parent_id == 0){
                                 if(selectedCategoryData == value.id){
                                    $("#parent_id").append('<option value="'+value.id+'" selected>'+value.name+'(Parent)</option>');
                                 }else{
                                    $("#parent_id").append('<option value="'+value.id+'">'+value.name+'(Parent)</option>');
                                 }
                              }
                           });*/
                        }
                  }
               })
         }
    </script>  
@endsection
