<?php

namespace App\Repositories\Backend\Currencymanager;

use DB;
use Carbon\Carbon;
use App\Models\Currencymanager\Currencymanager;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CurrencymanagerRepository.
 */
class CurrencymanagerRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Currencymanager::class;

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
                config('module.currencies.table').'.id',
                config('module.currencies.table').'.name',
                config('module.currencies.table').'.code',
                config('module.currencies.table').'.symbol',
                config('module.currencies.table').'.format',
                config('module.currencies.table').'.created_at',
                config('module.currencies.table').'.updated_at',
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
        //$currencymanager = self::MODEL;
        $currencymanager = Currencymanager::create($input);
        if ($currencymanager) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.currencymanagers.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Currencymanager $currencymanager
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Currencymanager $currencymanager, array $input)
    {
    	if ($currencymanager->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.currencymanagers.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Currencymanager $currencymanager
     * @throws GeneralException
     * @return bool
     */
    public function delete(Currencymanager $currencymanager)
    {
        if ($currencymanager->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.currencymanagers.delete_error'));
    }
}
