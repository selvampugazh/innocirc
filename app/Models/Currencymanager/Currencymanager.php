<?php

namespace App\Models\Currencymanager;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Currencymanager\Traits\CurrencymanagerAttribute;
use App\Models\Currencymanager\Traits\CurrencymanagerRelationship;
use Spatie\Activitylog\Traits\LogsActivity;

class Currencymanager extends Model
{
    use ModelTrait,
        LogsActivity,
        CurrencymanagerAttribute,
    	CurrencymanagerRelationship {
            // CurrencymanagerAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'currencies';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'name', 'code', 'symbol','format', 'active'
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
        'name', 'code', 'symbol','format', 'active'
    ];
    /**
     * Modify the logging description
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} Currency details";
    }
}
