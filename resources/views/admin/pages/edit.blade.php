@extends('layouts.admin.app')
@section('content')
<div class="content">

	<?php 
		// echo "<pre>";
		// print_r($pages->image);
		// die;
	
	
	?>

   <!-- Breadcrumbs-->
   @if(session()->has('alert-danger'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-danger') }}
   </div>
   @endif
   @if ($errors->has('title'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('title') }}
   </div>
   @endif
   @if ($errors->has('description'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('description') }}
   </div>
   @endif
   @if ($errors->has('status'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('status') }}
   </div>
   @endif
   <!-- DataTables Example -->
   <section class="content">
      <div class="container-fluid">
         <form action="{{ url('admin/pages/edit/'.base64_encode($pages->id)) }}" enctype="multipart/form-data" method="post"  id="cmsForm">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Edit Page</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Title</label>
                              <input type="text" id="title" name="title" value="{{ $pages->title }}" class="form-control" placeholder="Page Name">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Sub title</label>
                              <input type="text" id="subtitle" name="subtitle" value="{{ $pages->subtitle }}" class="form-control" placeholder="Subtitle" >
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Slug</label>
                              <input type="text" id="slug" name="slug" value="{{ $pages->slug }}" class="form-control" placeholder="Slug" >
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Short Description</label>
                              <textarea id="short_description" name="short_description" class="form-control">{{ $pages->short_description }}</textarea>                    
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <textarea id="description" name="description" class="form-control ckeditor" placeholder="Page Description" >{{ $pages->description }}</textarea>
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
                        <label for="exampleInputFile">Page Banner</label>
                        <div class="input-group">
							@if(isset($pages->image) && !empty($pages->image))
								<img src="{{asset('storage').'/'.$pages->image}}" width="50px">
							@endif
                           <div class="custom-file">
                              <input type="file" id="image" name="image" value="{{ $pages->image }}" class="custom-file-input" accept="image/*">
                              <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <select id="status" name="status" class="form-control">
                              <option value="">Select Status</option>
                              <option value="1" {{ $pages->status=='1' ? 'selected' : '' }} >Enable</option>
                              <option value="0" {{ $pages->status=='0' ? 'selected' : '' }} >Disable</option>
                           </select>
                        </div>
                     </div>
					 
					 @if(count($templates)>0)
                     <div class="form-group">
                        <div class="form-label-group">
                           
                           <select id="template" name="template" class="form-control">
                              @foreach($templates as $template)
                                 <option value="{{$template['value']}}" {{$template['value']=="$pages->template"?'selected':''}}>{{$template['name']}}</option>
                              @endforeach
                           </select>

                        </div>
                     </div>
                     @endif
					 
                     <div class="form-group">
                        <div class="form-label-group">
                           <label for="product_name">Meta Title</label>
                           <input type="text" id="meta_title" name="meta_title" value="{{ $pages->meta_title }}" class="form-control" placeholder="Meta Title">
                        </div>
                     </div>
                     <div class="form-group">
                        <div class="form-label-group">
                           <textarea id="meta_description" name="meta_description" class="form-control ckeditor" placeholder="Meta Description" >{{ $pages->meta_description }}</textarea>
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
<script>
   $(function () {
     // Summernote
     $('#description').summernote()
   
   })
</script>
@endsection

