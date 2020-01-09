{{-- <ul class="dropdown-menu lang-menu" role="menu">
        @foreach (array_keys(config('locale.languages')) as $lang)
                @if ($lang != App::getLocale())
                        <li>{{ link_to('lang/'.$lang, trans('menus.language-picker.langs.'.$lang)) }}</li>
                @endif
        @endforeach
</ul> --}}

@php
    $languages = \App\Models\Language\Language::where('status', 1)->get()
@endphp
<ul class="dropdown-menu lang-menu" role="menu">
@foreach($languages as $lang)
    @if ($lang->language_code != App::getLocale())
    
        <li>{{ link_to('lang/'.$lang->language_code, trans('menus.language-picker.langs.'.$lang->language_code)) }}</li>
   @endif
@endforeach
</ul>