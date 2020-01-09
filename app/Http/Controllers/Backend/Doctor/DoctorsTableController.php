<?php

namespace App\Http\Controllers\Backend\Doctor;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Doctor\DoctorRepository;
use App\Http\Requests\Backend\Doctor\ManageDoctorRequest;

/**
 * Class DoctorsTableController.
 */
class DoctorsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var DoctorRepository
     */
    protected $doctor;

    /**
     * contructor to initialize repository object
     * @param DoctorRepository $doctor;
     */
    public function __construct(DoctorRepository $doctor)
    {
        $this->doctor = $doctor;
    }

    /**
     * This method return the data of the model
     * @param ManageDoctorRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageDoctorRequest $request)
    {
        return Datatables::of($this->doctor->getForDataTable())
            ->escapeColumns(['id'])
             ->addColumn('first_name', function ($doctor) {
                return $doctor->first_name;
            })
             ->addColumn('last_name', function ($doctor) {
                return $doctor->last_name;
            })
            ->addColumn('email', function ($doctor) {
                return $doctor->email;
            })
            ->addColumn('phone_number', function ($doctor) {
                return $doctor->phone_number;
            })
            ->addColumn('address', function ($doctor) {
                return $doctor->address;
            })
            ->addColumn('status', function ($doctor) {
                if($doctor->status){
                    return '<span class="label label-success">Active</span>';
                }else{
                    return '<span class="label label-danger">Disabled</span>';
                }
            })
            ->addColumn('created_at', function ($doctor) {
                return Carbon::parse($doctor->created_at)->toDateString();
            })
            ->addColumn('actions', function ($doctor) {
                return $doctor->action_buttons;
            })
            ->make(true);
    }
}
