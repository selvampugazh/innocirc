<?php

namespace App\Http\Controllers\Backend\Language;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Language\LanguageRepository;
use App\Http\Requests\Backend\Language\ManageLanguageRequest;

/**
 * Class LanguagesTableController.
 */
class LanguagesTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var LanguageRepository
     */
    protected $language;

    /**
     * contructor to initialize repository object
     * @param LanguageRepository $language;
     */
    public function __construct(LanguageRepository $language)
    {
        $this->language = $language;
    }

    /**
     * This method return the data of the model
     * @param ManageLanguageRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageLanguageRequest $request)
    {
        return Datatables::of($this->language->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('name', function ($language) {
                return $language->name;
            })->addColumn('language_code', function ($language) {
                return $language->language_code;
            })->addColumn('status', function ($language) {
                return $language->status;
            })->addColumn('is_rtl', function ($language) {
                return $language->is_rtl;
            })
            ->addColumn('created_at', function ($language) {
                return Carbon::parse($language->created_at)->toDateString();
            })
            ->addColumn('actions', function ($language) {
                return $language->action_buttons;
            })
            ->make(true);
    }
}
