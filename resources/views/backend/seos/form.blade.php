<div class="box-body">
    @php
        $languages = \App\Models\Language\Language::where('status', 1)->get()
    @endphp
        
    <div class="form-group" id="localButtonGroup">
        <label class="col-lg-2 control-label required">{{ trans('validation.attributes.backend.language.name') }}</label>
        <div class="col-lg-10">
            <select class="form-control box-size" required>
                @foreach($languages as $lang)
                    <option value="{{ $lang->language_code }}" class="toggleLocaleFields" id="locale_{{ $lang->id }}">
                        {{ $lang->name }}
                    </option>
                @endforeach
            </select>
        </div>
        {{-- {{ Form::label('locale', trans('validation.attributes.backend.language.name'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            @foreach($languages as $lang)
                <label class="control control--checkbox">
                    <input type="checkbox" name="locale[]" value="{{ $lang->language_code }}" class="toggleLocaleFields" id="locale_{{ $lang->id }}"/> 
                    <label for="locale_{{ $lang->id }}">{{ $lang->name }}</label>
                    <div class="control__indicator"></div>
                </label>
            @endforeach
        </div> --}}
    </div>
        

    {{-- show the input fields based on the locale select--}}
    @foreach($languages as $lang)
        <div id="localeDiv-{{ $lang->language_code }}" class="toHideLocalDiv">
        <input type="hidden" readonly value="{{ $lang->language_code }}" name="locale[]" />
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_name', trans('validation.attributes.backend.seo.site_name'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_name[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_name')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_description', trans('validation.attributes.backend.seo.site_description'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_description[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_owner', trans('validation.attributes.backend.seo.site_owner'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_owner[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_owner')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('email', trans('validation.attributes.backend.seo.email'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('email[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.email')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('mobile', trans('validation.attributes.backend.seo.mobile'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('mobile[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.mobile')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('address', trans('validation.attributes.backend.seo.address'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('address[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.address')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('geocode_address', trans('validation.attributes.backend.seo.geocode_address'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('geocode_address[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.geocode_address')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_title', trans('validation.attributes.backend.seo.meta_title'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_title[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_title')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_keywords', trans('validation.attributes.backend.seo.meta_keywords'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_keywords[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_keywords')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_description', trans('validation.attributes.backend.seo.meta_description'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_description[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('footer_text', trans('validation.attributes.backend.seo.footer_text'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('footer_text[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.footer_text')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('copyrights', trans('validation.attributes.backend.seo.copyrights'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('copyrights[]', null, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.copyrights')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('active', trans('validation.attributes.backend.payment.active'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::select('active[]', ['1' => 'Active', '0' => 'Inactive'], null,  ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
        </div>
        @endforeach
    </div>
    
</div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //make the first radio button as checked
            //$('input[type=checkbox]:eq(0)').attr('checked', true);
            //hide all input fields except for the first locale
            $('div.toHideLocalDiv').not(':eq(0)').hide();
            //$("#localButtonGroup input:radio[disabled=false]:first-child").attr('checked', true);
            //based on the locale select, toggle the input fields
            $(".toggleLocaleFields").click(function(){
                $('.toHideLocalDiv').hide();
                $("#localeDiv-"+$(this).val()).show();
            })
            //Everything in here would execute after the DOM is ready to manipulated.
        });
    </script>
@endsection
