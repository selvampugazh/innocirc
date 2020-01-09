<?php

namespace App\Models\Payment;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Payment\Traits\PaymentAttribute;
use App\Models\Payment\Traits\PaymentRelationship;
use Spatie\Activitylog\Traits\LogsActivity;

class Payment extends Model
{
    use ModelTrait,
        PaymentAttribute,
        LogsActivity,
    	PaymentRelationship {
            // PaymentAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'payments';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [
        'gateway_name', 
        'account_id', 
        'account_key', 
        'api_key', 
        'account_secret', 
        'account_password', 
        'account_env', 
        'active',
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
        'gateway_name', 
        'account_id', 
        'account_key', 
        'api_key', 
        'account_secret', 
        'account_password', 
        'account_env', 
        'active',
    ];
    /**
     * Modify the logging description
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} Payment settings";
    }
}
