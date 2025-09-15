@extends('layouts.admin.app')
@section('content')
<div class="content">
   <!-- Breadcrumbs-->
   @if(session()->has('alert-danger'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-danger') }}
   </div>
   @endif
   
  
   @if ($errors->has('name'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('name') }}
   </div>
   @endif
   @if ($errors->has('shortname'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('shortname') }}
   </div>
   @endif
  
   @if ($errors->has('currency'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency') }}
   </div>
   @endif
   @if ($errors->has('language_code'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('language_code') }}
   </div>
   @endif

   @if ($errors->has('status'))
   <div class="alert alert-danger">
      <a href="#" class="close" style="color:#fff; opacity:1;" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('status') }}
   </div>
   @endif
   <!-- DataTables Example -->
   <section class="content">
      <div class="container-fluid">
         <form id="cmsForm" action="{{ url('admin/country/add') }}" enctype="multipart/form-data" method="post">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Add Country</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Country Name</label>
                              <input type="text" id="name" name="name" class="form-control" placeholder="Country Name">
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Country Code</label>
                              <input type="text" id="shortname" name="shortname" class="form-control" placeholder="Country Code">
                                                
                           </div>
                        </div>

                     </div>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="card card-header">



                     <div class="form-group">
                        <div class="form-label-group">
                           <select id="status" name="status" class="form-control">
                             
                              <option selected value="1">Enable</option>
                              {{-- <option value="0">Disable</option> --}}
                           </select>
                        </div>
                     </div>
                    
                     <div class="form-group">
                       
                        <div class="form-label-group">
                           <label for="product_name">Select Currency</label>
                           <select name="currency" id="currency" class="form-control">
                              <option value="">Select Currency</option>
                              @foreach($result['currencyArray'] as $key => $value)
                              <option value={{ $value['name'] }}>{{ $value['name'] }}</option>
                              @endforeach
                           </select>
                        </div>
                     </div>

                     <div class="form-group">
                       <div class="form-label-group">
                           <label for="product_name">Select Language</label>
                           <select name="language_code" id="language_code" class="form-control">
                              <option value="">Select Language</option>
                              @foreach($result['languagesArray'] as $key => $value)
                              <option value={{ $value['language_code'] }}>{{ $value['title'] }}</option>
                              @endforeach
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