<?php

namespace App\Http\Controllers\Backend\Language;

use App\Models\Language\Language;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Language\LanguageRepository;
use App\Http\Requests\Backend\Language\ManageLanguageRequest;
use App\Http\Requests\Backend\Language\CreateLanguageRequest;
use App\Http\Requests\Backend\Language\StoreLanguageRequest;
use App\Http\Requests\Backend\Language\EditLanguageRequest;
use App\Http\Requests\Backend\Language\UpdateLanguageRequest;
use App\Http\Requests\Backend\Language\DeleteLanguageRequest;

/**
 * LanguagesController
 */
class LanguagesController extends Controller
{
    /**
     * variable to store the repository object
     * @var LanguageRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param LanguageRepository $repository;
     */
    public function __construct(LanguageRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Language\ManageLanguageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageLanguageRequest $request)
    {
        return view('backend.languages.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateLanguageRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateLanguageRequest $request)
    {
        return view('backend.languages.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreLanguageRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLanguageRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.languages.index')->withFlashSuccess(trans('alerts.backend.languages.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Language\Language  $language
     * @param  EditLanguageRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Language $language, EditLanguageRequest $request)
    {
        return view('backend.languages.edit', compact('language'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateLanguageRequestNamespace  $request
     * @param  App\Models\Language\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLanguageRequest $request, Language $language)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $language, $input );
        //return with successfull message
        return redirect()->route('admin.languages.index')->withFlashSuccess(trans('alerts.backend.languages.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteLanguageRequestNamespace  $request
     * @param  App\Models\Language\Language  $language
     * @return \Illuminate\Http\Response
     */
    public function destroy(Language $language, DeleteLanguageRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($language);
        //returning with successfull message
        return redirect()->route('admin.languages.index')->withFlashSuccess(trans('alerts.backend.languages.deleted'));
    }
    
}
