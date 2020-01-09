<?php

namespace App\Models\Currencymanager\Traits;

/**
 * Class CurrencymanagerAttribute.
 */
trait CurrencymanagerAttribute
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
                '.$this->getEditButtonAttribute("edit-currencymanager", "admin.currencymanagers.edit").'
                '.$this->getDeleteButtonAttribute("delete-currencymanager", "admin.currencymanagers.destroy").'
                </div>';
    }
}
