@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.seos.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.seos.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.seos.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.seos.partials.seos-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="seos-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.seos.table.id') }}</th>
                            <th>{{ trans('labels.backend.seos.table.site_name') }}</th>
                            <th>{{ trans('labels.backend.seos.table.locale') }}</th>
                            <th>{{ trans('labels.backend.seos.table.active') }}</th>
                            <th>{{ trans('labels.backend.seos.table.createdat') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th><th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </thead>
                </table>
            </div><!--table-responsive-->
        </div><!-- /.box-body -->
    </div><!--box-->
@endsection

@section('after-scripts')
    {{-- For DataTables --}}
    {{ Html::script(mix('js/dataTable.js')) }}

    <script>
        //Below written line is short form of writing $(document).ready(function() { })
        $(function() {
            var dataTable = $('#seos-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.seos.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.seos.table')}}.id'},
                    {data: 'site_name', name: '{{config('module.seos.table')}}.site_name'},
                    {data: 'locale', name: '{{config('module.seos.table')}}.locale'},
                    {data: 'active', name: '{{config('module.seos.table')}}.active'},
                    {data: 'created_at', name: '{{config('module.seos.table')}}.created_at'},
                    {data: 'actions', name: 'actions', searchable: false, sortable: false}
                ],
                order: [[0, "asc"]],
                searchDelay: 500,
                dom: 'lBfrtip',
                buttons: {
                    buttons: [
                        { extend: 'copy', className: 'copyButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'csv', className: 'csvButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'excel', className: 'excelButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'pdf', className: 'pdfButton',  exportOptions: {columns: [ 0, 1 ]  }},
                        { extend: 'print', className: 'printButton',  exportOptions: {columns: [ 0, 1 ]  }}
                    ]
                }
            });

            FinBuilders.DataTableSearch.init(dataTable);
        });
    </script>
@endsection
