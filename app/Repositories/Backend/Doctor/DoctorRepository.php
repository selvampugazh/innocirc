<?php

namespace App\Repositories\Backend\Doctor;

use DB;
use Carbon\Carbon;
use App\Models\Doctor\Doctor;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DoctorRepository.
 */
class DoctorRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Doctor::class;

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
                config('module.doctors.table').'.id',
                config('module.doctors.table').'.first_name',
                config('module.doctors.table').'.last_name',
                config('module.doctors.table').'.email',
                config('module.doctors.table').'.phone_number',
                config('module.doctors.table').'.address',
                config('module.doctors.table').'.status',
                config('module.doctors.table').'.created_at',
                config('module.doctors.table').'.updated_at',
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
        /* $doctor = self::MODEL;
        $doctor = new $doctor();
        if ($doctor->save($input)) {
            return true;
        }*/

        $save = Doctor::create($input);
        if ($save) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.doctors.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Doctor $doctor
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Doctor $doctor, array $input)
    {
    	if ($doctor->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.doctors.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Doctor $doctor
     * @throws GeneralException
     * @return bool
     */
    public function delete(Doctor $doctor)
    {
        if ($doctor->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.doctors.delete_error'));
    }
}
