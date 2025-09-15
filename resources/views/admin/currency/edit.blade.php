@extends('layouts.admin.app')
@section('content')
<div class="content">
   <!-- Breadcrumbs-->
   @if(session()->has('alert-danger'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-danger') }}
   </div>
   @endif
   @if ($errors->has('currency_title'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency_title') }}
   </div>
   @endif
   @if ($errors->has('currency_name'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('currency_name') }}
   </div>
   @endif
   @if ($errors->has('status'))
   <div class="alert alert-danger">
      <a href="#" style="color:#fff; opacity:1;" class="close" data-dismiss="alert" aria-label="close">&times;</a>{{ $errors->first('status') }}
   </div>
   @endif
   <!-- DataTables Example -->
   <section class="content">
      <div class="container-fluid">
         <form action="{{ url('admin/currency/edit/'.base64_encode($currency->id)) }}" enctype="multipart/form-data" method="post"  id="cmsForm">
            @csrf
            <div class="row">
               <div class="col-md-8">
                  <div class="card card-primary">
                     <div class="card-header">
                        <h3 class="card-title">Edit Faq</h3>
                     </div>
                     <div class="card-body">
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Currency Name</label>
                              <input type="text" id="currency_title" name="currency_title" value="{{ $currency->currency_title }}" class="form-control" placeholder="Currency Title">
                           </div>
                        </div>
                        
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Currency Code</label>
                              <input type="text" id="title" name="currency_name" value="{{ $currency->currency_name }}" class="form-control" placeholder="Currency Code">
                           </div>
                        </div>
                       
                        
                        <div class="form-group">
                           <div class="form-label-group">
                               <label for="product_name">Currency Sign</label>
                               <input type="text" id="currencySign" name="currency_sign" value="{{ $currency->currency_sign }}"  class="form-control" placeholder="Currency Sign" >
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="form-label-group">
                              <label for="product_name">Base Price</label>
                              <input type="text" id="price" name="base_price" value="{{ $currency->base_price }}" class="form-control" placeholder="Base Price" >
                                                
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
                              <option value="1" {{ $currency->status=='1' ? 'selected' : '' }} >Enable</option>
                              <option value="0" {{ $currency->status=='0' ? 'selected' : '' }} >Disable</option>
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

