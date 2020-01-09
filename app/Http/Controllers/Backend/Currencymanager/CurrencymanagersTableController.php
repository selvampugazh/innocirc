<?php

namespace App\Http\Controllers\Backend\Currencymanager;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Currencymanager\CurrencymanagerRepository;
use App\Http\Requests\Backend\Currencymanager\ManageCurrencymanagerRequest;

/**
 * Class CurrencymanagersTableController.
 */
class CurrencymanagersTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var CurrencymanagerRepository
     */
    protected $currencymanager;

    /**
     * contructor to initialize repository object
     * @param CurrencymanagerRepository $currencymanager;
     */
    public function __construct(CurrencymanagerRepository $currencymanager)
    {
        $this->currencymanager = $currencymanager;
    }

    /**
     * This method return the data of the model
     * @param ManageCurrencymanagerRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageCurrencymanagerRequest $request)
    {
        return Datatables::of($this->currencymanager->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('name', function ($currencymanager) {
                return $currencymanager->name;
            })
            ->addColumn('symbol', function ($currencymanager) {
                return $currencymanager->symbol;
            })
            ->addColumn('code', function ($currencymanager) {
                return $currencymanager->code;
            })
            ->addColumn('format', function ($currencymanager) {
                return $currencymanager->format;
            })
            ->addColumn('created_at', function ($currencymanager) {
                return Carbon::parse($currencymanager->created_at)->toDateString();
            })
            ->addColumn('actions', function ($currencymanager) {
                return $currencymanager->action_buttons;
            })
            ->make(true);
    }
}
