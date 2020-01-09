<?php

namespace App\Http\Controllers\Backend\Blogdir;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Blogdir\BlogmodelRepository;
use App\Http\Requests\Backend\Blogdir\ManageBlogmodelRequest;

/**
 * Class BlogmodelsTableController.
 */
class BlogmodelsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var BlogmodelRepository
     */
    protected $blogmodel;

    /**
     * contructor to initialize repository object
     * @param BlogmodelRepository $blogmodel;
     */
    public function __construct(BlogmodelRepository $blogmodel)
    {
        $this->blogmodel = $blogmodel;
    }

    /**
     * This method return the data of the model
     * @param ManageBlogmodelRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageBlogmodelRequest $request)
    {
        return Datatables::of($this->blogmodel->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('created_at', function ($blogmodel) {
                return Carbon::parse($blogmodel->created_at)->toDateString();
            })
            ->addColumn('actions', function ($blogmodel) {
                return $blogmodel->action_buttons;
            })
            ->make(true);
    }
}
