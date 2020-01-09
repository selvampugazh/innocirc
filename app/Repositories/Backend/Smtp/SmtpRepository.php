<?php

namespace App\Repositories\Backend\Smtp;

use DB;
use Carbon\Carbon;
use App\Models\Smtp\Smtp;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SmtpRepository.
 */
class SmtpRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Smtp::class;

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
                config('module.smtpsettings.table').'.id',
                config('module.smtpsettings.table').'.smtp_hostname',
                config('module.smtpsettings.table').'.mail_driver',
                config('module.smtpsettings.table').'.created_at',
                config('module.smtpsettings.table').'.updated_at',
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
        $smtp = self::MODEL;
        $smtp = new $smtp();
        if ($smtp->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.smtps.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Smtp $smtp
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Smtp $smtp, array $input)
    {
    	if ($smtp->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.smtps.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Smtp $smtp
     * @throws GeneralException
     * @return bool
     */
    public function delete(Smtp $smtp)
    {
        if ($smtp->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.smtps.delete_error'));
    }
}
