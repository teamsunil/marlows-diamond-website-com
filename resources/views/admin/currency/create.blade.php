@extends('layouts.admin.app')
@section('content')
<div class="content">
   <!-- Breadcrumbs-->
   @if(session()->has('alert-danger'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-danger') }}
   </div>
   @endif
   @if ($errors->has('currency_sign'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency_sign') }}
   </div>
   @endif
   @if ($errors->has('currency_name'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency_name') }}
   </div>
   @endif

   @if ($errors->has('currency_title'))
   <div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency_title') }}
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
         <form id="cmsForm" action="{{ url('admin/currency/add') }}" enctype="multipart/form-data" method="post" >
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Add Currency</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Currency Name</label>
                              <input type="text" id="currency_title" name="currency_title" class="form-control" placeholder="Currency Name" >
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Currency Code</label>
                              <input type="text" id="title" name="currency_name" class="form-control" placeholder="Currency Code" >
                           </div>
                        </div>
                      
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Currency Sign</label>
                              <input type="text" id="currencySign" name="currency_sign" class="form-control" placeholder="Currency Sign" >
                                                
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Base Price</label>
                              <input type="text" id="price" name="base_price" class="form-control" placeholder="Base Price" >
                                                
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
                              <option value="">Select Status</option>
                              <option value="1" selected>Enable</option>
                              <option value="0">Disable</option>
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
