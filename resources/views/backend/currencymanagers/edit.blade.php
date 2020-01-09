@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.currencymanagers.management') . ' | ' . trans('labels.backend.currencymanagers.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.currencymanagers.management') }}
        <small>{{ trans('labels.backend.currencymanagers.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($currencymanager, ['route' => ['admin.currencymanagers.update', $currencymanager], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-currencymanager']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.currencymanagers.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.currencymanagers.partials.currencymanagers-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.currencymanagers.editform")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.currencymanagers.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
