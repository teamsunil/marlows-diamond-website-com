@extends('layouts.admin.app')
@section('content')
<div class="content">
   <!-- Breadcrumbs-->
   @if(session()->has('alert-danger'))
   <div class="alert alert-danger">
      <a href="#" class="close" style="color:#fff; opacity:1;" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-danger') }}
   </div>
   @endif
   @if ($errors->has('title'))
   <div class="alert alert-danger">
      <a href="#" class="close" style="color:#fff; opacity:1;" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('title') }}
   </div>
   @endif
   @if ($errors->has('description'))
   <div class="alert alert-danger">
      <a href="#" class="close" style="color:#fff; opacity:1;" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('description') }}
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

         <form action="{{ url('admin/language/edit/'.base64_encode($result['languages']->id)) }}" enctype="multipart/form-data" method="post" id="cmsForm">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Edit Language</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Language Name</label>
                              <input type="text" id="title" name="title" value="{{ $result['languages']->title }}" class="form-control" placeholder="Language Name">
                           </div>
                        </div>

                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Language Code</label>
                              <input type="text" id="language_code" name="language_code" value="{{ $result['languages']->language_code }}" class="form-control" placeholder="Language Code">
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card card-header">
                  <?php //dd($result['languages']); ?>
                     <div class="form-group">
                        <div class="form-label-group">
                           <select id="status" name="status" class="form-control">
                              <option value="">Select Status</option>
                              <option value="1" {{ $result['languages']->status=='1' ? 'selected' : '' }}>Enable</option>
                              <option value="0" {{ $result['languages']->status=='0' ? 'selected' : '' }}>Disable</option>
                           </select>
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
<style>
select.defultAdminLanguage.form-control { display: none; }
</style>