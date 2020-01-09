<?php

namespace App\Models\Language;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Language\Traits\LanguageAttribute;
use App\Models\Language\Traits\LanguageRelationship;
use Spatie\Activitylog\Traits\LogsActivity;

class Language extends Model
{
    use ModelTrait,
        LanguageAttribute,
        LogsActivity,
    	LanguageRelationship {
            // LanguageAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'languages';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'name', 'language_code', 'status', 'is_rtl'
    ];

    /**
     * Default values for model fields
     * @var array
     */
    protected $attributes = [

    ];

    /**
     * Dates
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at'
    ];

    /**
     * Guarded fields of model
     * @var array
     */
    protected $guarded = [
        'id'
    ];

    /**
     * Constructor of Model
     * @param array $attributes
     */
    // public function __construct(array $attributes = [])
    // {
    //     parent::__construct($attributes);
    // }
    
    /**
     * changes listening by the activity logger
     */
    protected static $logAttributes = [
        'name', 'language_code', 'status', 'is_rtl'
    ];
    /**
     * Modify the logging description
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} language details";
    }
}
