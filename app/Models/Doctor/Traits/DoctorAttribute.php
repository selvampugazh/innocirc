<?php

namespace App\Models\Doctor\Traits;

/**
 * Class DoctorAttribute.
 */
trait DoctorAttribute
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
                '.$this->getEditButtonAttribute("edit-doctor", "admin.doctors.edit").'
                '.$this->getDeleteButtonAttribute("delete-doctor", "admin.doctors.destroy").'
                </div>';
    }
}
