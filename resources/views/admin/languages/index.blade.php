@extends('layouts.admin.app')
@section('content')
<div class="content" bis_skin_checked="1">
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
                                    <input name="title" type="text" class="form-control" id="title" value="{{ request()->title }}" placeholder="Search by Language">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="btn btn-success">Search</button>
                            <a href="{{ url('admin/language') }}" class="btn btn-primary">Reset</a>
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
                        <a href="{{ url('admin/language/create') }}" class="btn btn-primary">Add New Language</a>
                        <a href="javascript:;"><button type="button" class="btn btn-primary search-button"><i class="fa fa-search"></i></button></a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>Language</th>
                                    <th>Language Code</th>
                                    <th>Created</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if (!empty($languages))
                                @php($i = 1)
                                @foreach ($languages as $lang)
                               
                                <tr class="{{$lang->is_deleted ? 'bg-danger' : '' }}">
                                    <td>{{ $lang->title }}</td>
                                    <td>{{ $lang->language_code }}</td>
                                  
                                    <td>{{ $lang->created_at }}</td>
                                    <td>
                                        @if ($lang->status == 1)
                                        <a title="Change Status" href="{{ url('admin/language/status/' . base64_encode($lang->id) . '/0') }}"><i class="fa fa-check " aria-hidden="true"></i></a>
                                        @else
                                        <a title="Change Status" href="{{ url('admin/language/status/' . base64_encode($lang->id) . '/1') }}"><i class="fa fa-times " aria-hidden="true"></i></a>
                                        @endif
                                        <a title="Edit" href="{{ url('admin/language/update/' . base64_encode($lang->id)) }}"><i class="fa fa-edit " aria-hidden="true"></i></a>


                                        {{-- {{ url('admin/delete-language/' . base64_encode($lang->id)) }} --}}
                                        <a class="confirm-and-reload" title="Permanent Delete this record?" href="{{ url('admin/delete-language/' . base64_encode($lang->id)) }}">
                                            <i class="fa fa-trash" aria-hidden="true"></i>
                                        </a>

                                    </td>
                                </tr>
                                @php($i++)
                                @endforeach
                                @endif
                            </tbody>
                          
                        </table>
                        <div class="pagination-container float-right">
                            {{ $languages->appends($_GET)->links('layouts.pagination') }}
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