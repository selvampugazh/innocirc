<?php

namespace App\Http\Controllers\Backend\Speciality;

use App\Models\Speciality\Speciality;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Speciality\SpecialityRepository;
use App\Http\Requests\Backend\Speciality\ManageSpecialityRequest;
use App\Http\Requests\Backend\Speciality\CreateSpecialityRequest;
use App\Http\Requests\Backend\Speciality\StoreSpecialityRequest;
use App\Http\Requests\Backend\Speciality\EditSpecialityRequest;
use App\Http\Requests\Backend\Speciality\UpdateSpecialityRequest;
use App\Http\Requests\Backend\Speciality\DeleteSpecialityRequest;

/**
 * SpecialitiesController
 */
class SpecialitiesController extends Controller
{
    /**
     * variable to store the repository object
     * @var SpecialityRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param SpecialityRepository $repository;
     */
    public function __construct(SpecialityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Speciality\ManageSpecialityRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageSpecialityRequest $request)
    {
        return view('backend.specialities.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateSpecialityRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateSpecialityRequest $request)
    {
        return view('backend.specialities.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSpecialityRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSpecialityRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.specialities.index')->withFlashSuccess(trans('alerts.backend.specialities.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Speciality\Speciality  $speciality
     * @param  EditSpecialityRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Speciality $speciality, EditSpecialityRequest $request)
    {
        return view('backend.specialities.edit', compact('speciality'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSpecialityRequestNamespace  $request
     * @param  App\Models\Speciality\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSpecialityRequest $request, Speciality $speciality)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $speciality, $input );
        //return with successfull message
        return redirect()->route('admin.specialities.index')->withFlashSuccess(trans('alerts.backend.specialities.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteSpecialityRequestNamespace  $request
     * @param  App\Models\Speciality\Speciality  $speciality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Speciality $speciality, DeleteSpecialityRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($speciality);
        //returning with successfull message
        return redirect()->route('admin.specialities.index')->withFlashSuccess(trans('alerts.backend.specialities.deleted'));
    }
    
}
