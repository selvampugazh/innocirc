<?php

namespace App\Http\Controllers\Backend\Seo;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Seo\SeoRepository;
use App\Http\Requests\Backend\Seo\ManageSeoRequest;
use App\Models\Seo\Seo;
use App\Models\Seo\SeoTranslation;
use Session;
use Config;
/**
 * Class SeosTableController.
 */
class SeosTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var SeoRepository
     */
    protected $seo;

    /**
     * contructor to initialize repository object
     * @param SeoRepository $seo;
     */
    public function __construct(SeoRepository $seo)
    {
        $this->seo = $seo;
    }

    /**
     * This method return the data of the model
     * @param ManageSeoRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSeoRequest $request)
    {
        $selectedLanguage = Session::get('locale');
        $seos=Seo::Leftjoin('seo_translation','seo_translation.seo_id','=','seos.id')
             ->select('seos.id','seos.created_at','seo_translation.locale','seo_translation.active',
             'seo_translation.site_name')
            ->where('seo_translation.locale',$selectedLanguage)
            ->orderBy('seos.id', 'desc')
            ->get();
        if(count($seos) < 1){
            $defaultLanguage = Config::get('app.fallback_locale');
            $seos=Seo::Leftjoin('seo_translation','seo_translation.seo_id','=','seos.id')
             ->select('seos.id','seos.created_at','seo_translation.locale','seo_translation.active',
             'seo_translation.site_name')
            ->where('seo_translation.locale',$defaultLanguage)
            ->orderBy('seos.id', 'desc')
            ->get();
        }
        return Datatables::of($seos)
            ->escapeColumns(['id'])
            ->addColumn('active', function ($seos) {
                return $seos->active;
            })
            ->addColumn('locale', function ($seos) {
                return $seos->locale;
            })
            ->addColumn('site_name', function ($seos) {
                return $seos->site_name;
            })
            ->addColumn('created_at', function ($seos) {
                return Carbon::parse($seos->created_at)->toDateString();
            })
            ->addColumn('actions', function ($seos) {
                return $seos->action_buttons;
            })
            ->make(true);
    }
}
