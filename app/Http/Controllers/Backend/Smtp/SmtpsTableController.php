<?php

namespace App\Http\Controllers\Backend\Smtp;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Smtp\SmtpRepository;
use App\Http\Requests\Backend\Smtp\ManageSmtpRequest;

/**
 * Class SmtpsTableController.
 */
class SmtpsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var SmtpRepository
     */
    protected $smtp;

    /**
     * contructor to initialize repository object
     * @param SmtpRepository $smtp;
     */
    public function __construct(SmtpRepository $smtp)
    {
        $this->smtp = $smtp;
    }

    /**
     * This method return the data of the model
     * @param ManageSmtpRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManageSmtpRequest $request)
    {
        return Datatables::of($this->smtp->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('smtp_hostname', function ($smtpsetting) {
                return $smtpsetting->smtp_hostname;
            })
            ->addColumn('mail_driver', function ($smtpsetting) {
                return $smtpsetting->mail_driver;
            })
            ->addColumn('created_at', function ($smtpsetting) {
                return Carbon::parse($smtpsetting->created_at)->toDateString();
            })
            ->addColumn('actions', function ($smtpsetting) {
                return $smtpsetting->action_buttons;
            })
            ->make(true);
    }
}
