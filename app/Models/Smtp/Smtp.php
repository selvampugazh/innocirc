<?php

namespace App\Models\Smtp;

use App\Models\ModelTrait;
use Illuminate\Database\Eloquent\Model;
use App\Models\Smtp\Traits\SmtpAttribute;
use App\Models\Smtp\Traits\SmtpRelationship;
use Spatie\Activitylog\Traits\LogsActivity;

class Smtp extends Model
{
    use ModelTrait,
        SmtpAttribute,
        LogsActivity,
    	SmtpRelationship {
            // SmtpAttribute::getEditButtonAttribute insteadof ModelTrait;
        }

    /**
     * NOTE : If you want to implement Soft Deletes in this model,
     * then follow the steps here : https://laravel.com/docs/5.4/eloquent#soft-deleting
     */

    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'smtps';

    /**
     * Mass Assignable fields of model
     * @var array
     */
    protected $fillable = [

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
    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
    /**
     * changes listening by the activity logger
     */
    protected static $logAttributes = [
        'mail_driver', 
        'smtp_hostname', 
        'smtp_username', 
        'smtp_password', 
        'smtp_port', 
        'smtp_encryption', 
        'status', 
        'smtp_enabled',
        'created_by',
    ];
    /**
     * Modify the logging description
     */
    public function getDescriptionForEvent(string $eventName): string
    {
        return "{$eventName} SMTP settings";
    }
}
