<?php

namespace App\Http\Controllers\Backend\Doctor;

use App\Models\Doctor\Doctor;
use App\Models\Speciality\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Doctor\DoctorRepository;
use App\Http\Requests\Backend\Doctor\ManageDoctorRequest;
use App\Http\Requests\Backend\Doctor\CreateDoctorRequest;
use App\Http\Requests\Backend\Doctor\StoreDoctorRequest;
use App\Http\Requests\Backend\Doctor\EditDoctorRequest;
use App\Http\Requests\Backend\Doctor\UpdateDoctorRequest;
use App\Http\Requests\Backend\Doctor\DeleteDoctorRequest;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

/**
 * DoctorsController
 */
class DoctorsController extends Controller
{
    /**
     * variable to store the repository object
     * @var DoctorRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param DoctorRepository $repository;
     */
    public function __construct(DoctorRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Doctor\ManageDoctorRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageDoctorRequest $request)
    {
        return view('backend.doctors.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateDoctorRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateDoctorRequest $request)
    {
    	$specialities = Speciality::select('id', 'name')->orderBy('name', 'desc')->get();
        return view('backend.doctors.create',compact('specialities'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreDoctorRequestNamespace  $requests
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDoctorRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        //$this->repository->create($input);
        $Doctor = Doctor::create($input);
        
        //if vendor details saved, save services and location details
        if($Doctor->id){
            $doctorId = $Doctor->id;

            //update vendor qualifications
            if($request->filled('specialities')){
                $specialities = Input::get('specialities');
                foreach($specialities as $speciality){
                    DB::table('doctor_specialities')->insert([
                        "doctor_id" => $doctorId,
                        "speciality_id" => $speciality,
                        "created_at" => Carbon::now(),
                    ]);
                }
            }

        }

        //return with successfull message
        return redirect()->route('admin.doctors.index')->withFlashSuccess(trans('alerts.backend.doctors.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Doctor\Doctor  $doctor
     * @param  EditDoctorRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor, EditDoctorRequest $request)
    {
    	$specialities = Speciality::select('id', 'name')->orderBy('name', 'desc')->get();

    	$selectedSpecialities = DB::table('doctor_specialities')->where('doctor_id', $doctor->id)->get();

        $selSpecObj = [];
        foreach($selectedSpecialities as $s) {
            $selSpecObj = array_prepend($selSpecObj, $s->speciality_id);
        }

        return view('backend.doctors.edit', compact('doctor','specialities','selSpecObj'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateDoctorRequestNamespace  $request
     * @param  App\Models\Doctor\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDoctorRequest $request, Doctor $doctor)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $doctorSaved =  $this->repository->update( $doctor, $input );
        if($doctorSaved){
            $doctorId = $doctor->id;

            if($request->filled('specialities')){
                $specialities = Input::get('specialities');
                DB::table('doctor_specialities')->where('doctor_id', $doctorId)->delete();
                foreach($specialities as $speciality){
                    DB::table('doctor_specialities')->insert([
                        "doctor_id" => $doctorId,
                        "speciality_id" => $speciality,
                        "updated_at" => Carbon::now(),
                    ]);
                }
            }
        }
        //return with successfull message
        return redirect()->route('admin.doctors.index')->withFlashSuccess(trans('alerts.backend.doctors.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteDoctorRequestNamespace  $request
     * @param  App\Models\Doctor\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor, DeleteDoctorRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($doctor);
        //returning with successfull message
        return redirect()->route('admin.doctors.index')->withFlashSuccess(trans('alerts.backend.doctors.deleted'));
    }
    
}
