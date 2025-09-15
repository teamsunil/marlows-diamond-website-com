@extends('layouts.admin.app')
@section('content')
<div class="content">
@if(session()->has('alert-success'))
   <div class="alert alert-success">
      <a href="#" class="close" style="color:#fff; opacity:1;" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-success') }}
   </div>
   @endif

<section class="content search-container  {{ request()->search_open == 'open' ? '' : 'd-none' }}">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-success">
                    <div class="card-header">
                        <h3 class="card-title">Search here</h3>
                    </div>
                    <form method="GET">
                        <input name="search_open" type="hidden" class="form-control" id="search_open" value="open">
                        <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-12">
<input name="currency_name" type="text" class="form-control" id="title" value="{{ request()->currency_name }}" placeholder="Search by Currency Name">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Search</button>
                            <a href="{{ url('admin/currency') }}" class="btn btn-primary">Reset</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-left">
                        Default Pound Currency GBP
                            
                        </div>
                    <div class="card-header text-right">
                        
                            <a href="{{ url('admin/currency/create') }}" class="btn btn-primary">Add New Currency</a>
                            <a href="javascript:;"><button type="button" class="btn btn-primary search-button"><i class="fa fa-search"></i></button></a>
                        </div>
                            
                        
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>SR Number</th>
                                        <th>Currency Name</th>
                                        <th>Currency Code</th>
                                        <th>Currency Sign</th>
                                        <th>Base Price</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    @if (!empty($currencies))
                                        @php($i = 1)
                                        @foreach ($currencies as $currency)
                                            <tr  class="{{$currency->is_deleted ? 'bg-danger' : '' }}" id="{{ $currency->currency_name }}">
                                                <td> {{ $i }}</td>
                                                <td>{{ $currency->currency_title }}</td>
                                                <td>{{ $currency->currency_name }}</td>
                                                
                                                <td>{{ $currency->currency_sign }}</td>
                                                <td>{{ $currency->base_price }}</td>
                                                <td>
                                                    @if ($currency->status == 1)
                                                        <a title="Change Status"
                                                            href="{{ url('admin/currency/status/' . base64_encode($currency->id) . '/0') }}"><i
                                                                class="fa fa-check " aria-hidden="true"></i></a>
                                                    @else
                                                        <a title="Change Status"
                                                            href="{{ url('admin/currency/status/' . base64_encode($currency->id) . '/1') }}"><i
                                                                class="fa fa-times " aria-hidden="true"></i></a>
                                                    @endif
                                                    <a title="Edit"
                                                        href="{{ url('admin/currency/update/' . base64_encode($currency->id)) }}"><i
                                                            class="fa fa-edit " aria-hidden="true"></i></a>


                                                    
                                                    <a class="confirm-and-reload" title="Permanent Delete this record?" href="{{ url('admin/delete-currency/' . base64_encode($currency->id)) }}">
                                                        <i class="fa fa-trash" aria-hidden="true"></i>
                                                    </a>
                                                    <?php $lower1 = Str::lower($currency->currency_name); ?>
                                                    <a href="{{ url('/admin/product-currency') }}/{{ $lower1 }}">
                                                    Product List
                                                    </a>
                                                    

                                                </td>
                                            </tr>
                                            @php($i++)
                                        @endforeach
                                    @endif
                                </tbody>
                                
                            </table>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
<style>
tr#GBP td a.confirm-and-reload{display: none;}
select.defultAdminLanguage.form-control {
    display: none;
}
</style>