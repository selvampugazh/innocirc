<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('mail_driver', trans('validation.attributes.backend.smtpsettings.mail_driver'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('mail_driver', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.mail_driver'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_hostname', trans('validation.attributes.backend.smtpsettings.smtp_hostname'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('smtp_hostname', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.smtp_hostname'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_username', trans('validation.attributes.backend.smtpsettings.smtp_username'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('smtp_username', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.smtp_username'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_password', trans('validation.attributes.backend.smtpsettings.smtp_password'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('smtp_password', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.smtp_password'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_port', trans('validation.attributes.backend.smtpsettings.smtp_port'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('smtp_port', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.smtp_port'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_encryption', trans('validation.attributes.backend.smtpsettings.smtp_encryption'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('smtp_encryption', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.smtpsettings.smtp_encryption'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('status', trans('validation.attributes.backend.smtpsettings.smtp_status'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                    {{ Form::checkbox('status', 1, true) }}
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('smtp_enabled', trans('validation.attributes.backend.smtpsettings.smtp_enabled'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                    {{ Form::checkbox('smtp_enabled', 1, true) }}
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div>
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
