<?php

namespace App\Models\Seo;

use Illuminate\Database\Eloquent\Model;

class SeoTranslation extends Model
{
    protected $table = 'seo_translation';

    protected $fillable = [
        'seo_id',
        'locale',
        'site_name',
        'locale',
    ];

    protected $attributes = [
        'site_description' => '',
        'site_owner' => '',
        'email' => '',
        'mobile' => '',
        'address' => '',
        'geocode_address' => '',
        'meta_title' => '',
        'meta_keywords' => '',
        'meta_description' => '',
        'footer_text' => '',
        'copyrights' => '',
    ];
}
