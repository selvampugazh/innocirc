<div class="box-body">
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('name', trans('validation.attributes.backend.language.name'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('name', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.language.name'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('language_code', trans('validation.attributes.backend.language.language_code'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            {{ Form::text('language_code', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.language.language_code'), 'required' => 'required']) }}
        </div><!--col-lg-10-->
    </div><!--form-group-->
    
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('status', trans('validation.attributes.backend.language.status'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                    {{ Form::checkbox('status', 0, false) }}
                    <div class="control__indicator"></div>
                </label>
            </div>
        </div><!--col-lg-10-->
    </div><!--form-group-->
    <div class="form-group">
        <!-- Create Your Field Label Here -->
        {{ Form::label('is_rtl', trans('validation.attributes.backend.language.is_rtl'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            <div class="control-group">
                <label class="control control--checkbox">
                    {{ Form::checkbox('is_rtl', 1, true) }}
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
