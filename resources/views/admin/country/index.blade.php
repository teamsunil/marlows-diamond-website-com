@extends('layouts.admin.app')
@section('content')
<div class="content" bis_skin_checked="1">
@if(session()->has('alert-success'))
<div class="alert alert-success">
    <a href="#" style="color:#fff; opacity:1;"  class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ session()->get('alert-success') }}
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
                                    <input name="name" type="text" class="form-control" id="name" value="{{ request()->name }}" placeholder="Search by Country">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Search</button>
                            <a href="{{ url('admin/country') }}" class="btn btn-primary">Reset</a>
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


                    <div class="card-header text-right">
                        <a href="{{ url('admin/country/create') }}" class="btn btn-primary">Add New Country</a>
                        <a href="javascript:;"><button type="button" class="btn btn-primary search-button"><i class="fa fa-search"></i></button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>County Name</th>
                                    <th>County Code</th>
                                    <th>Language Code</th>
                                    <th>Corrency Code</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($country))
                                @php($i = 1)
                                @foreach ($country as $lang)
                                
                                <tr class="{{$lang->is_deleted ? 'bg-danger' : '' }}">
                                    <td>{{ $lang->name }}</td>
                                    <td>{{ $lang->shortname }}</td>
                                    <td>{{ $lang->language_code }}</td>
                                    <td>{{ $lang->currency }}</td>
                                    <td>{{ $lang->created_at }}</td>
                                    
                                    <td>
                                        {{-- @if ($lang->status == 1)
                                        <a title="Change Status" href="{{ url('admin/country/status/' . base64_encode($lang->id) . '/0') }}"><i class="fa fa-check " aria-hidden="true"></i></a>
                                        @else
                                        <a title="Change Status" href="{{ url('admin/country/status/' . base64_encode($lang->id) . '/1') }}"><i class="fa fa-times " aria-hidden="true"></i></a>
                                        @endif --}}
                                        <a title="Edit" href="{{ url('admin/country/update/' . base64_encode($lang->id)) }}"><i class="fa fa-edit " aria-hidden="true"></i></a>


                                        {{-- {{ url('admin/delete-language/' . base64_encode($lang->id)) }} --}}
                                        <a class="confirm-and-reload" title="Permanent Delete this record?" href="{{ url('admin/delete-country/' . base64_encode($lang->id)) }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                    </td>
                                </tr>
                                @php($i++)
                                @endforeach
                                @endif
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th>County Name</th>
                                    <th>County Code</th>
                                    <th>Language Code</th>
                                    <th>Currency Code</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                        <div class="pagination-container float-right">
                            {{ $country->appends($_GET)->links('layouts.pagination') }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    </div>
@endsection
<style>
select.defultAdminLanguage.form-control { display: none; }
</style>