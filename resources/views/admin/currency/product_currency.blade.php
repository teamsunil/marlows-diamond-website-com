@extends('layouts.admin.app')
@section('content')
    @if (session()->has('alert-success'))
        <div class="alert alert-success">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            {{ session()->get('alert-success') }}
        </div>
    @endif
    <div id="ladingPage">
        <center>
            <h1>Loading...</h1>
        </center>
    </div>
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
                                        <input name="product_name" type="text" class="form-control" id="title"
                                            value="{{ request()->product_name }}" placeholder="Search by Currency Name">
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="btn btn-success">Search</button>
                                <a href="{{ URL::to('admin/product-currency/' . $currency) }}"
                                    class="btn btn-primary">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content"  id="content" style="visibility: hidden;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header text-right">
                            <a href="{{ url('admin/currency') }}" class="btn btn-primary">Back Currency List</a>
                            <a href="javascript:;"><button type="button" class="btn btn-primary search-button"><i
                                        class="fa fa-search"></i></button></a>
                        </div>
                        <div class="card-body">
                            <div class="topRow" id="toptablevalue">
                      
                                <div class="cell">
                                    <strong>Margin</strong>
                                    <div class="pcm_data">0</div>
                                    <input data-id="1" type="text" placeholder="margin" class="pcm_inputs"
                                        name="margin" value="0" />
                                </div>

                                <div class="cell"> <strong>Discount</strong>
                                    <div class="pcm_data">0</div>
                                    <input data-id="2" type="text" placeholder="discount" class="pcm_inputs"
                                        name="discount" value="0" />
                                </div>
                                <div class="cell"> <strong>Vat</strong>
                                    <div class="pcm_data">0</div>
                                    <input data-id="3" type="text" placeholder="vat" class="pcm_inputs" name="vat"
                                        value="0" />
                                </div>
                                
                            </div>
                            <a href="{{ url('#') }}" class="btn btn-primary global">Submit</a>

                            <table id="pcm_table" class="table table-bordered table-hover">
                                <thead>

                                    <tr>
                                        <th>Product ID</th>
                                        <th>DiamondType</th>
                                        <th>Variation ID</th>
                                        <th>Product Name</th>
                                        <th>Product Price</th>
                                        <th>Coverted price</th>
                                        <th>Margin</th>
                                        <th>Discount</th>
                                        <th>Total</th>
                                        <th>VAT</th>
                                        <th>Grand Total</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @if (!empty($finalData))
                                        @php($i = 1)
                                        @foreach ($finalData as $item)
                                            <tr class="pcm_row">
                                                <td>
                                                    {{ $item->product_id }}
                                                </td>
                                                <td>
                                                    {{ $item->diamond_type }}
                                                </td>
                                                <td>
                                                    {{ $item->variation_id }}
                                                </td>
                                                <td>
                                                    {{ $item->product_name }}
                                                </td>
                                                <td>
                                                    {{ $item->product_price }}
                                                </td>
                                                <td>
                                                    {{ $item->coverted_price }}
                                                </td>
                                                <td>
                                                    <div class="pcm_data">{{ $item->margin }}</div>
                                                    <input data-id="{{ $item->id }}" type="text" class="pcm_input"
                                                        name="margin" value="{{ $item->margin }}" />
                                                </td>
                                                <td>
                                                    <div class="pcm_data">{{ $item->discount }}</div>
                                                    <input data-id="{{ $item->id }}" type="text" class="pcm_input"
                                                        name="discount" value="{{ $item->discount }}" />
                                                </td>
                                                <td>


                                                    {{ $item->total }}
                                                </td>
                                                <td>
                                                    <div class="pcm_data">{{ $item->vat }}</div>
                                                    <input data-id="{{ $item->id }}" type="text" class="pcm_input"
                                                        name="vat" value="{{ $item->vat }}" />
                                                </td>
                                                <td>
                                                    {{ $item->grand_total }}
                                                </td>
                                            </tr>
                                            @php($i++)
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                            <div class="pagination-container float-right">
                                {{ $finalData->appends($_GET)->links('layouts.pagination') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>
        .pcm_input {
            display: none;
        }

        .pcm_inputs {
            display: none;
        }
        #toptablevalue
    {
        display: flex;
        justify-content: space-between;
        width: 50%;
       
    }
    select.defultAdminLanguage.form-control {
    display: none;
}
    </style>
@endsection
@section('js')
    <script>
        $(document).ready(function() {
            $('#pcm_table').DataTable({
                "paging": false,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });

            $('.pcm_row td').on('click', function() {
                cellEdit($(this));
            });

            $('input.pcm_input').bind('keypress', function(e) {
                if (e.keyCode == 13) {
                    cellEdit($(this));
                    location.reload();
                }
            });

            $('.topRow .cell').on('click', function() {
                //alert("Hello")
                rowEdit($(this));
            });
            $('.global').on('click', function() {
                location.reload();
            });

            $('input.pcm_inputs').bind('keypress', function(e) {
                if (e.keyCode == 13) {
                    rowEdit($(this));
                    //location.reload();
                }
            });
        });

        function cellEdit(e) {
            $('.pcm_row td').each(function() {

                if ($(this).find('.pcm_data').css('display') == 'none') {
                    temp_value = $(this).find('.pcm_input').val();

                    updateCellValue($(this).find('.pcm_input').attr('data-id'), $(this).find('.pcm_input').attr(
                        'name'), temp_value);
                    $(this).find('.pcm_data').html(temp_value);
                    $(this).find('.pcm_input').hide();
                    $(this).find('.pcm_data').show();
                }
            });
            $(e).find('.pcm_data').hide();
            $(e).find('.pcm_input').show();
        }

        function updateCellValue(id, cellName, value) {
            $.ajax('/admin/product-currency/update-cell', {
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    cellName: cellName,
                    value: value
                },
                success: function(data, status, xhr) {
                    //console.log(cellName);
                    console.log('status: ' + status + ', data: ' + data);
                },
                error: function(jqXhr, textStatus, errorMessage) {

                    console.log('Error' + errorMessage);
                }
            });
        }

        function rowEdit(e) {
            $('.topRow .cell').each(function() {

                if ($(this).find('.pcm_data').css('display') == 'none') {
                    temp_value = $(this).find('.pcm_inputs').val();
                    updateRowsValue($(this).find('.pcm_inputs').attr('data-id'), $(this).find('.pcm_inputs').attr(
                        'name'), temp_value);
                    $(this).find('.pcm_data').html(temp_value);
                    $(this).find('.pcm_inputs').hide();
                    $(this).find('.pcm_data').show();
                }
            });
            $(e).find('.pcm_data').hide();
            $(e).find('.pcm_inputs').show();
        }

        function updateRowsValue(id, rowsName, value) {
            $.ajax('/admin/product-currency/update-rows', {
                type: 'POST',
                data: {
                    _token: "{{ csrf_token() }}",
                    id: id,
                    rowsName: rowsName,
                    value: value
                },
                success: function(data, status, xhr) {
                    //console.log(id);
                    console.log('status: ' + status + ', data: ' + data);
                },
                error: function(jqXhr, textStatus, errorMessage) {

                    console.log('Error' + errorMessage);
                }
            });
        }

        document.onreadystatechange = function() {
            var state = document.readyState
            if (state == 'interactive') {

                // when page will be lading.
                document.getElementById('content').style.visibility = "hidden";
            } else if (state == 'complete') {
                setTimeout(function() {
                    document.getElementById('ladingPage').style.visibility = "hidden";
                    document.getElementById('content').style.visibility = "visible";

                }, 1000);
            }
        }
    </script>
@endsection
