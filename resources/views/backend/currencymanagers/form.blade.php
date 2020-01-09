<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('code', trans('validation.attributes.backend.currency.code'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('code', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.currency.code'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('name', trans('validation.attributes.backend.currency.name'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.currency.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('symbol', trans('validation.attributes.backend.currency.symbol'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('symbol', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.currency.symbol'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('format', trans('validation.attributes.backend.currency.format'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('format', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.currency.format'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('status', trans('validation.attributes.backend.currency.status'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::select('status', ['1' => 'Active', '0' => 'Inactive'], null,  ['class' => 'form-control box-size']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
