@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.smtps.management') . ' | ' . trans('labels.backend.smtps.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.smtps.management') }}
        <small>{{ trans('labels.backend.smtps.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($smtp, ['route' => ['admin.smtps.update', $smtp], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-smtp']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.smtps.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.smtps.partials.smtps-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.smtps.editform")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.smtps.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
