<?php

namespace App\Repositories\Backend\Blogdir;

use DB;
use Carbon\Carbon;
use App\Models\Blogdir\Blogmodel;
use App\Exceptions\GeneralException;
use App\Repositories\BaseRepository;
use Illuminate\Database\Eloquent\Model;

/**
 * Class BlogmodelRepository.
 */
class BlogmodelRepository extends BaseRepository
{
    /**
     * Associated Repository Model.
     */
    const MODEL = Blogmodel::class;

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
                config('module.blogmodels.table').'.id',
                config('module.blogmodels.table').'.created_at',
                config('module.blogmodels.table').'.updated_at',
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
        $blogmodel = self::MODEL;
        $blogmodel = new $blogmodel();
        if ($blogmodel->save($input)) {
            return true;
        }
        throw new GeneralException(trans('exceptions.backend.blogmodels.create_error'));
    }

    /**
     * For updating the respective Model in storage
     *
     * @param Blogmodel $blogmodel
     * @param  $input
     * @throws GeneralException
     * return bool
     */
    public function update(Blogmodel $blogmodel, array $input)
    {
    	if ($blogmodel->update($input))
            return true;

        throw new GeneralException(trans('exceptions.backend.blogmodels.update_error'));
    }

    /**
     * For deleting the respective model from storage
     *
     * @param Blogmodel $blogmodel
     * @throws GeneralException
     * @return bool
     */
    public function delete(Blogmodel $blogmodel)
    {
        if ($blogmodel->delete()) {
            return true;
        }

        throw new GeneralException(trans('exceptions.backend.blogmodels.delete_error'));
    }
}
