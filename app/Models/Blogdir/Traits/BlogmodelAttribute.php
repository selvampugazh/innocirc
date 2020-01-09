<?php

namespace App\Models\Blogdir\Traits;

/**
 * Class BlogmodelAttribute.
 */
trait BlogmodelAttribute
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
                '.$this->getEditButtonAttribute("edit-blogmodel", "admin.blogmodels.edit").'
                '.$this->getDeleteButtonAttribute("delete-blogmodel", "admin.blogmodels.destroy").'
                </div>';
    }
}
