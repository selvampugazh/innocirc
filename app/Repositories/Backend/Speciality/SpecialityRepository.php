<?php

namespace App\Repositories\Backend\Speciality;

use DB;
use Carbon\Carbon;
use App\Models\Speciality\Speciality;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SpecialityRepository.
 */
class SpecialityRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Speciality::class;

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
                config('module.specialities.table').'.id',
                config('module.specialities.table').'.name',
                config('module.specialities.table').'.created_at',
                config('module.specialities.table').'.updated_at',
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
        /** $speciality = self::MODEL;
        $speciality = new $speciality();
        if ($speciality->save($input)) {
            return true;
        } */
        $save = Speciality::create($input);
        if ($save) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.specialities.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Speciality $speciality
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Speciality $speciality, array $input)
    {
    	if ($speciality->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.specialities.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Speciality $speciality
     * @throws GeneralException
     * @return bool
     */
    public function delete(Speciality $speciality)
    {
        if ($speciality->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.specialities.delete_error'));
    }
}
