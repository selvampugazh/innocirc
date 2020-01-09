<?php

namespace App\Repositories\Backend\Seo;

use DB;
use Carbon\Carbon;
use App\Models\Seo\Seo;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SeoRepository.
 */
class SeoRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Seo::class;

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
                config('module.seos.table').'.id',
                config('module.seos.table').'.created_at',
                config('module.seos.table').'.updated_at',
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
        $seo = self::MODEL;
        $seo = new $seo();
        if ($seo->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.seos.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Seo $seo
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Seo $seo, array $input)
    {
    	if ($seo->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.seos.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Seo $seo
     * @throws GeneralException
     * @return bool
     */
    public function delete(Seo $seo)
    {
        if ($seo->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.seos.delete_error'));
    }
}
