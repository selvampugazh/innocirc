<?php

namespace App\Repositories\Backend\Language;

use DB;
use Carbon\Carbon;
use App\Models\Language\Language;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class LanguageRepository.
 */
class LanguageRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Language::class;

    /**
     * This method is used by Table Controller
     * For getting the table data to show in
     * the grid
     * @return mixed
     */
    public function getForDataTable()
    {
        return $this->query()
            ->select([
                config('module.languages.table').'.id',
                config('module.languages.table').'.name',
                config('module.languages.table').'.language_code',
                config('module.languages.table').'.status',
                config('module.languages.table').'.is_rtl',
                config('module.languages.table').'.created_at',
            ]);
    }

    /**
     * For Creating the respective model in storage
     *
     * @param array $input
     * @throws GeneralException
     * @return bool
     */
    public function create(array $input)
    {
        $language = Language::create($input);
        if ($language) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.languages.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Language $language
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Language $language, array $input)
    {
    	if ($language->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.languages.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Language $language
     * @throws GeneralException
     * @return bool
     */
    public function delete(Language $language)
    {
        if ($language->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.languages.delete_error'));
    }
}
