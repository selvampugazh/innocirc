<?php

namespace App\Http\Controllers\Backend\Speciality;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Speciality\SpecialityRepository;
use App\Http\Requests\Backend\Speciality\ManageSpecialityRequest;

/**
 * Class SpecialitiesTableController.
 */
class SpecialitiesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var SpecialityRepository
     */
    protected $speciality;

    /**
     * contructor to initialize repository object
     * @param SpecialityRepository $speciality;
     */
    public function __construct(SpecialityRepository $speciality)
    {
        $this->speciality = $speciality;
    }

    /**
     * This method return the data of the model
     * @param ManageSpecialityRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSpecialityRequest $request)
    {
        return Datatables::of($this->speciality->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($speciality) {
                return Carbon::parse($speciality->created_at)->toDateString();
            })
             ->addColumn('name', function ($speciality) {
                return $speciality->name;
            })
            ->addColumn('actions', function ($speciality) {
                return $speciality->action_buttons;
            })
            ->make(true);
    }
}
