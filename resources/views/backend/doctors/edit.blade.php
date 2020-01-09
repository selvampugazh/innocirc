@extends ('backend.layouts.app')

@section ('title', trans('labels.backend.doctors.management') . ' | ' . trans('labels.backend.doctors.edit'))

@section('page-header')
    <h1>
        {{ trans('labels.backend.doctors.management') }}
        <small>{{ trans('labels.backend.doctors.edit') }}</small>
    </h1>
@endsection

@section('content')
    {{ Form::model($doctor, ['route' => ['admin.doctors.update', $doctor], 'class' => 'form-horizontal', 'role' => 'form', 'method' => 'PATCH', 'id' => 'edit-doctor']) }}

        <div class="box box-info">
            <div class="box-header with-border">
                <h3 class="box-title">{{ trans('labels.backend.doctors.edit') }}</h3>

                <div class="box-tools pull-right">
                    @include('backend.doctors.partials.doctors-header-buttons')
                </div><!--box-tools pull-right-->
            </div><!--box-header with-border-->

            <div class="box-body">
                <div class="form-group">
                    {{-- Including Form blade file --}}
                    @include("backend.doctors.edit_form")
                    <div class="edit-form-btn">
                        {{ link_to_route('admin.doctors.index', trans('buttons.general.cancel'), [], ['class' => 'btn btn-danger btn-md']) }}
                        {{ Form::submit(trans('buttons.general.crud.update'), ['class' => 'btn btn-primary btn-md']) }}
                        <div class="clearfix"></div>
                    </div><!--edit-form-btn-->
                </div><!--form-group-->
            </div><!--box-body-->
        </div><!--box box-success -->
    {{ Form::close() }}
@endsection
