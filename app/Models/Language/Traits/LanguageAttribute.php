<?php

namespace App\Models\Language\Traits;

/**
 * Class LanguageAttribute.
 */
trait LanguageAttribute
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
                '.$this->getEditButtonAttribute("edit-language", "admin.languages.edit").'
                '.$this->getDeleteButtonAttribute("delete-language", "admin.languages.destroy").'
                </div>';
    }
}
