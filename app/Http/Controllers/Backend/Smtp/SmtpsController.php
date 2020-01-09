<?php

namespace App\Http\Controllers\Backend\Smtp;

use App\Models\Smtp\Smtp;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Smtp\SmtpRepository;
use App\Http\Requests\Backend\Smtp\ManageSmtpRequest;
use App\Http\Requests\Backend\Smtp\CreateSmtpRequest;
use App\Http\Requests\Backend\Smtp\StoreSmtpRequest;
use App\Http\Requests\Backend\Smtp\EditSmtpRequest;
use App\Http\Requests\Backend\Smtp\UpdateSmtpRequest;
use App\Http\Requests\Backend\Smtp\DeleteSmtpRequest;

/**
 * SmtpsController
 */
class SmtpsController extends Controller
{
    /**
     * variable to store the repository object
     * @var SmtpRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param SmtpRepository $repository;
     */
    public function __construct(SmtpRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Smtp\ManageSmtpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageSmtpRequest $request)
    {
        return view('backend.smtps.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateSmtpRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateSmtpRequest $request)
    {
        return view('backend.smtps.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSmtpRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSmtpRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $input['created_by'] = auth()->id();
        $smtp = Smtp::create($input);
        //return with successfull message
        return redirect()->route('admin.smtps.index')->withFlashSuccess(trans('alerts.backend.smtps.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Smtp\Smtp  $smtp
     * @param  EditSmtpRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Smtp $smtp, EditSmtpRequest $request)
    {
        return view('backend.smtps.edit', compact('smtp'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSmtpRequestNamespace  $request
     * @param  App\Models\Smtp\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSmtpRequest $request, Smtp $smtp)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $smtp, $input );
        //return with successfull message
        return redirect()->route('admin.smtps.index')->withFlashSuccess(trans('alerts.backend.smtps.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteSmtpRequestNamespace  $request
     * @param  App\Models\Smtp\Smtp  $smtp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Smtp $smtp, DeleteSmtpRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($smtp);
        //returning with successfull message
        return redirect()->route('admin.smtps.index')->withFlashSuccess(trans('alerts.backend.smtps.deleted'));
    }
    
}
