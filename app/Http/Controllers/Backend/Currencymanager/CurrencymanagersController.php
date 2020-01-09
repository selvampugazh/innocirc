<?php

namespace App\Http\Controllers\Backend\Currencymanager;

use App\Models\Currencymanager\Currencymanager;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Currencymanager\CurrencymanagerRepository;
use App\Http\Requests\Backend\Currencymanager\ManageCurrencymanagerRequest;
use App\Http\Requests\Backend\Currencymanager\CreateCurrencymanagerRequest;
use App\Http\Requests\Backend\Currencymanager\StoreCurrencymanagerRequest;
use App\Http\Requests\Backend\Currencymanager\EditCurrencymanagerRequest;
use App\Http\Requests\Backend\Currencymanager\UpdateCurrencymanagerRequest;
use App\Http\Requests\Backend\Currencymanager\DeleteCurrencymanagerRequest;
use Artisan;
/**
 * CurrencymanagersController
 */
class CurrencymanagersController extends Controller
{
    /**
     * variable to store the repository object
     * @var CurrencymanagerRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param CurrencymanagerRepository $repository;
     */
    public function __construct(CurrencymanagerRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Currencymanager\ManageCurrencymanagerRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageCurrencymanagerRequest $request)
    {
        return view('backend.currencymanagers.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateCurrencymanagerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateCurrencymanagerRequest $request)
    {
        return view('backend.currencymanagers.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreCurrencymanagerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCurrencymanagerRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //call the currency artisan command to create the currency
        //$result = Artisan::call('currency:manage', ['action' => 'add', 'currency' => $request->code]);
        //return with successfull message
        return redirect()->route('admin.currencymanagers.index')->withFlashSuccess(trans('alerts.backend.currencymanagers.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Currencymanager\Currencymanager  $currencymanager
     * @param  EditCurrencymanagerRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Currencymanager $currencymanager, EditCurrencymanagerRequest $request)
    {
        return view('backend.currencymanagers.edit', compact('currencymanager'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateCurrencymanagerRequestNamespace  $request
     * @param  App\Models\Currencymanager\Currencymanager  $currencymanager
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCurrencymanagerRequest $request, Currencymanager $currencymanager)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $currencymanager, $input );
        //return with successfull message
        return redirect()->route('admin.currencymanagers.index')->withFlashSuccess(trans('alerts.backend.currencymanagers.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteCurrencymanagerRequestNamespace  $request
     * @param  App\Models\Currencymanager\Currencymanager  $currencymanager
     * @return \Illuminate\Http\Response
     */
    public function destroy(Currencymanager $currencymanager, DeleteCurrencymanagerRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($currencymanager);
        //returning with successfull message
        return redirect()->route('admin.currencymanagers.index')->withFlashSuccess(trans('alerts.backend.currencymanagers.deleted'));
    }
    
}
