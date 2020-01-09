<?php

namespace App\Models\Seo\Traits;

/**
 * Class SeoAttribute.
 */
trait SeoAttribute
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
                '.$this->getEditButtonAttribute("edit-seo", "admin.seos.edit").'
                '.$this->getDeleteButtonAttribute("delete-seo", "admin.seos.destroy").'
                </div>';
    }
}
