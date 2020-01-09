<?php

namespace App\Models\Payment\Traits;

/**
 * Class PaymentAttribute.
 */
trait PaymentAttribute
{
    // Make your attributes functions here
    // Further, see the documentation : https://laravel.com/docs/5.4/eloquent-mutators#defining-an-accessor


    /**
     * Action Button Attribute to show in grid
     * @return string
     */
    public function getActionButtonsAttribute()
    {
        return '<div class="btn-group action-btn">
                '.$this->getEditButtonAttribute("edit-payment", "admin.payments.edit").'
                '.$this->getDeleteButtonAttribute("delete-payment", "admin.payments.destroy").'
                </div>';
    }
}
