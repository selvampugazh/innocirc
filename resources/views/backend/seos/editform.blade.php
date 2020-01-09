<div class="box-body">
    @php
        $languages = \App\Models\Language\Language::where('status', 1)->get()
    @endphp
    
    <div class="form-group">
        {{ Form::label('locale', trans('validation.attributes.backend.language.name'), ['class' => 'col-lg-2 control-label required']) }}  
        <div class="col-lg-10">
            <select class="form-control box-size" required>
                @foreach($seoTranslation as $seo)
                    <option value="{{ $seo->locale }}" class="toggleLocaleFields" id="locale_{{ $seo->locale }}">
                        {{ $seo->locale }}
                    </option>
                @endforeach
            </select>
        {{-- @foreach($seoTranslation as $seo)
            <label class="control control--checkbox">
                <input type="checkbox" name="locale[]" value="{{ $seo->locale }}" class="toggleLocaleFields" id="locale_{{ $seo->locale }}" /> 
                <label for="locale_{{ $seo->locale }}">{{ $seo->locale }}</label>
                <div class="control__indicator"></div>
            </label>
        @endforeach --}}
        </div>
    </div>


    @foreach($seoTranslation as $seoTranslation)
        <div id="localeDiv-{{ $seoTranslation->locale }}" class="toHideLocalDiv">
            <input type="hidden" readonly value="{{ $seoTranslation->locale }}" name="locale[]" />
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_name', trans('validation.attributes.backend.seo.site_name'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_name[]', $seoTranslation->site_name, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_name'), 'required' => 'required']) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_description', trans('validation.attributes.backend.seo.site_description'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_description[]', $seoTranslation->site_description, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('site_owner', trans('validation.attributes.backend.seo.site_owner'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('site_owner[]', $seoTranslation->site_owner, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.site_owner')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('email', trans('validation.attributes.backend.seo.email'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('email[]', $seoTranslation->email, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.email')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('mobile', trans('validation.attributes.backend.seo.mobile'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('mobile[]', $seoTranslation->mobile, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.mobile')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('address', trans('validation.attributes.backend.seo.address'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('address[]', $seoTranslation->address, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.address')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('geocode_address', trans('validation.attributes.backend.seo.geocode_address'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('geocode_address[]', $seoTranslation->geocode_address, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.geocode_address')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_title', trans('validation.attributes.backend.seo.meta_title'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_title[]', $seoTranslation->meta_title, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_title')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_keywords', trans('validation.attributes.backend.seo.meta_keywords'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_keywords[]', $seoTranslation->meta_keywords, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_keywords')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('meta_description', trans('validation.attributes.backend.seo.meta_description'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('meta_description[]', $seoTranslation->meta_description, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.meta_description')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('footer_text', trans('validation.attributes.backend.seo.footer_text'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('footer_text[]', $seoTranslation->footer_text, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.footer_text')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('copyrights', trans('validation.attributes.backend.seo.copyrights'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::text('copyrights[]', $seoTranslation->copyrights, ['class' => 'form-control box-size', 'placeholder' => trans('validation.attributes.backend.seo.copyrights')]) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
            <div class="form-group">
                <!-- Create Your Field Label Here -->
                {{ Form::label('active', trans('validation.attributes.backend.payment.active'), ['class' => 'col-lg-2 control-label required']) }}  
                <div class="col-lg-10">
                    {{ Form::select('active[]', ['1' => 'Active', '0' => 'Inactive'], $seoTranslation->active,  ['class' => 'form-control box-size']) }}
                </div><!--col-lg-10-->
            </div><!--form-group-->
        </div>
    @endforeach
        
    </div><!--box-body-->

@section("after-scripts")
    <script type="text/javascript">
        //Put your javascript needs in here.
        //Don't forget to put `@`parent exactly after `@`section("after-scripts"),
        //if your create or edit blade contains javascript of its own
        $( document ).ready( function() {
            //hide all input fields except for the first locale
            $('div.toHideLocalDiv').not(':eq(0)').hide();
            //$("#localButtonGroup input:radio[disabled=false]:first-child").attr('checked', true);
            //based on the locale select, toggle the input fields
            $(".toggleLocaleFields").click(function(){
                $('.toHideLocalDiv').hide();
                console.log('show #localeDiv-'+$(this).val())
                $("#localeDiv-"+$(this).val()).show();
            })
        });
    </script>
@endsection
    