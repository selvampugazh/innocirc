<?php

namespace App\Http\Controllers\Backend\Blogdir;

use App\Models\Blogdir\Blogmodel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Blogdir\BlogmodelRepository;
use App\Http\Requests\Backend\Blogdir\ManageBlogmodelRequest;
use App\Http\Requests\Backend\Blogdir\CreateBlogmodelRequest;
use App\Http\Requests\Backend\Blogdir\StoreBlogmodelRequest;
use App\Http\Requests\Backend\Blogdir\EditBlogmodelRequest;
use App\Http\Requests\Backend\Blogdir\UpdateBlogmodelRequest;
use App\Http\Requests\Backend\Blogdir\DeleteBlogmodelRequest;

/**
 * BlogmodelsController
 */
class BlogmodelsController extends Controller
{
    /**
     * variable to store the repository object
     * @var BlogmodelRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param BlogmodelRepository $repository;
     */
    public function __construct(BlogmodelRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Blogdir\ManageBlogmodelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageBlogmodelRequest $request)
    {
        return view('backend.blogmodels.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateBlogmodelRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateBlogmodelRequest $request)
    {
        return view('backend.blogmodels.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreBlogmodelRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBlogmodelRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.blogmodels.index')->withFlashSuccess(trans('alerts.backend.blogmodels.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Blogdir\Blogmodel  $blogmodel
     * @param  EditBlogmodelRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Blogmodel $blogmodel, EditBlogmodelRequest $request)
    {
        return view('backend.blogmodels.edit', compact('blogmodel'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateBlogmodelRequestNamespace  $request
     * @param  App\Models\Blogdir\Blogmodel  $blogmodel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogmodelRequest $request, Blogmodel $blogmodel)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $blogmodel, $input );
        //return with successfull message
        return redirect()->route('admin.blogmodels.index')->withFlashSuccess(trans('alerts.backend.blogmodels.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteBlogmodelRequestNamespace  $request
     * @param  App\Models\Blogdir\Blogmodel  $blogmodel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blogmodel $blogmodel, DeleteBlogmodelRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($blogmodel);
        //returning with successfull message
        return redirect()->route('admin.blogmodels.index')->withFlashSuccess(trans('alerts.backend.blogmodels.deleted'));
    }
    
}
