<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('gateway_name', trans('validation.attributes.backend.payment.gateway_name'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('gateway_name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.gateway_name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('account_id', trans('validation.attributes.backend.payment.account_id'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('account_id', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.account_id'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('account_key', trans('validation.attributes.backend.payment.account_key'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('account_key', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.account_key'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('api_key', trans('validation.attributes.backend.payment.api_key'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('api_key', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.api_key'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('account_secret', trans('validation.attributes.backend.payment.account_secret'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('account_secret', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.account_secret'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('account_password', trans('validation.attributes.backend.payment.account_password'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('account_password', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.payment.account_password'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('account_env', trans('validation.attributes.backend.payment.account_env'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::select('account_env', ['0' => 'Test', '1' => 'Prod'], null,  ['class' => 'form-control box-size']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('active', trans('validation.attributes.backend.payment.active'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::select('active', ['1' => 'Active', '0' => 'Inactive'], null,  ['class' => 'form-control box-size']) }}
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
