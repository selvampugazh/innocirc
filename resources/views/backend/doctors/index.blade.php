@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.doctors.management'))

@section('page-header')
    <h1>{{ trans('labels.backend.doctors.management') }}</h1>
@endsection

@section('content')
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">{{ trans('labels.backend.doctors.management') }}</h3>

            <div class="box-tools pull-right">
                @include('backend.doctors.partials.doctors-header-buttons')
            </div>
        </div><!--box-header with-border-->

        <div class="box-body">
            <div class="table-responsive data-table-wrapper">
                <table id="doctors-table" class="table table-condensed table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>{{ trans('labels.backend.doctors.table.id') }}</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone Numebr</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>{{ trans('labels.backend.doctors.table.createdat') }}</th>
                            <th>{{ trans('labels.general.actions') }}</th>
                        </tr>
                    </thead>
                    <thead class="transparent-bg">
                        <tr>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
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
            var dataTable = $('#doctors-table').dataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: '{{ route("admin.doctors.get") }}',
                    type: 'post'
                },
                columns: [
                    {data: 'id', name: '{{config('module.doctors.table')}}.id'},
                    {data: 'first_name', name: '{{config('module.doctors.table')}}.fisrt_name'},
                    {data: 'last_name', name: '{{config('module.doctors.table')}}.last_name'},
                    {data: 'email', name: '{{config('module.doctors.table')}}.email'},
                    {data: 'phone_number', name: '{{config('module.doctors.table')}}.address'},
                    {data: 'address', name: '{{config('module.doctors.table')}}.address'},
                    {data: 'status', name: '{{config('module.doctors.table')}}.status'},
                    {data: 'created_at', name: '{{config('module.doctors.table')}}.created_at'},
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
