<?php

namespace App\Http\Controllers\Backend\Seo;

use App\Models\Seo\Seo;
//use Illuminate\Http\Request;
use Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Seo\SeoRepository;
use App\Http\Requests\Backend\Seo\ManageSeoRequest;
use App\Http\Requests\Backend\Seo\CreateSeoRequest;
use App\Http\Requests\Backend\Seo\StoreSeoRequest;
use App\Http\Requests\Backend\Seo\EditSeoRequest;
use App\Http\Requests\Backend\Seo\UpdateSeoRequest;
use App\Http\Requests\Backend\Seo\DeleteSeoRequest;
use App\Models\Seo\SeoTranslation;
/**
 * SeosController
 */
class SeosController extends Controller
{
    /**
     * variable to store the repository object
     * @var SeoRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param SeoRepository $repository;
     */
    public function __construct(SeoRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Seo\ManageSeoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManageSeoRequest $request)
    {
        return view('backend.seos.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreateSeoRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreateSeoRequest $request)
    {
        return view('backend.seos.create');
    }

    // function one($value){
    //     return count(array_filter($value, function($var) use ($parameters) 
    //     { return ( $var && $var >= $parameters[0]); 
    //     }));
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSeoRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSeoRequest $request)
    {
        //Input received from the request
        //var_dump($request);
        
        $locale = $request['locale'];
       
        if($locale !== '' && $request['site_name'] !== ''){
            $seo = new Seo;
            if($seo->save()){
                $seo_id = $seo->id;
                $translation = Request::all();
                foreach($locale as $key => $value){
                    $seoTranslation = new SeoTranslation;
                    if(!empty($translation['site_name'][$key])){
                        $seoTranslation->seo_id = $seo_id;
                        $seoTranslation->site_name = $translation['site_name'][$key];
                        $seoTranslation->locale = $translation['locale'][$key];
                        $seoTranslation->site_description = $translation['site_description'][$key];
                        $seoTranslation->site_owner = $translation['site_owner'][$key];
                        $seoTranslation->email = $translation['email'][$key];
                        $seoTranslation->mobile = $translation['mobile'][$key];
                        $seoTranslation->address = $translation['address'][$key];
                        $seoTranslation->geocode_address = $translation['geocode_address'][$key];
                        $seoTranslation->meta_title = $translation['meta_title'][$key];
                        $seoTranslation->meta_keywords = $translation['meta_keywords'][$key];
                        $seoTranslation->meta_description = $translation['meta_description'][$key];
                        $seoTranslation->footer_text = $translation['footer_text'][$key];
                        $seoTranslation->copyrights = $translation['copyrights'][$key];
                        $seoTranslation->active = $translation['active'][$key];
                        $seoTranslation->save();
                    }
                }
            }
        }else{
            return redirect()->route('admin.seos.create')
            ->withErrors('Site name and Locale is necessary')
            ->withInput();
        }
        
        //return with successfull message
        return redirect()->route('admin.seos.index')->withFlashSuccess(trans('alerts.backend.seos.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Seo\Seo  $seo
     * @param  EditSeoRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Seo $seo, EditSeoRequest $request)
    {
        $seoTranslation = SeoTranslation::where('seo_id', $seo->id)->get();
        return view('backend.seos.edit', compact('seo', 'seoTranslation'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSeoRequestNamespace  $request
     * @param  App\Models\Seo\Seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSeoRequest $request, Seo $seo)
    {
        //Input received from the request        
        $translation = Request::all();
        $locale = $request['locale'];
        if($locale !== '' && $request['site_name'] != ''){            
            foreach($locale as $key => $value){
                $seoTranslation = SeoTranslation::where('seo_id', $seo->id)->where('locale', $value)->first();
                //var_dump($seoTranslation);
                if($value === $seoTranslation->locale){
                    //var_dump('$value === $seoTranslation->locale');
                    SeoTranslation::where('seo_id', $seo->id)->where('locale', $value)->update(
                        [
                            'seo_id' => $seo->id,
                            'site_name' => $translation['site_name'][$key],
                            'locale' => $translation['locale'][$key],
                            'site_description' => $translation['site_description'][$key],
                            'site_owner' => $translation['site_owner'][$key],
                            'email' => $translation['email'][$key],
                            'mobile' => $seo->mobile,
                            'address' => $translation['address'][$key],
                            'geocode_address' => $translation['geocode_address'][$key],
                            'meta_title' => $translation['meta_title'][$key],
                            'meta_description' => $translation['meta_description'][$key],
                            'meta_keywords' => $translation['meta_keywords'][$key],
                            'footer_text' => $translation['footer_text'][$key],
                            'copyrights' => $translation['copyrights'][$key],
                            'active' => $translation['active'][$key],
                        ]
                    );
                }
            }
        }
        
        //Update the model using repository update method
        //$this->repository->update( $seo, $input );
        //return with successfull message
        return redirect()->route('admin.seos.index')->withFlashSuccess(trans('alerts.backend.seos.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeleteSeoRequestNamespace  $request
     * @param  App\Models\Seo\Seo  $seo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seo $seo, DeleteSeoRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($seo);
        $deleteSeoTranslation = SeoTranslation::where('seo_id', $seo->id)->delete();
        //returning with successfull message
        return redirect()->route('admin.seos.index')->withFlashSuccess(trans('alerts.backend.seos.deleted'));
    }
    
}
