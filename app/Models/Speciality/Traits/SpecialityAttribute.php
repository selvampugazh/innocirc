<?php

namespace App\Models\Speciality\Traits;

/**
 * Class SpecialityAttribute.
 */
trait SpecialityAttribute
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
                '.$this->getEditButtonAttribute("edit-speciality", "admin.specialities.edit").'
                '.$this->getDeleteButtonAttribute("delete-speciality", "admin.specialities.destroy").'
                </div>';
    }
}
