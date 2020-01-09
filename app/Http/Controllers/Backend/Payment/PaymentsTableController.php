<?php

namespace App\Http\Controllers\Backend\Payment;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Yajra\DataTables\Facades\DataTables;
use App\Repositories\Backend\Payment\PaymentRepository;
use App\Http\Requests\Backend\Payment\ManagePaymentRequest;

/**
 * Class PaymentsTableController.
 */
class PaymentsTableController extends Controller
{
    /**
     * variable to store the repository object
     * @var PaymentRepository
     */
    protected $payment;

    /**
     * contructor to initialize repository object
     * @param PaymentRepository $payment;
     */
    public function __construct(PaymentRepository $payment)
    {
        $this->payment = $payment;
    }

    /**
     * This method return the data of the model
     * @param ManagePaymentRequest $request
     *
     * @return mixed
     */
    public function __invoke(ManagePaymentRequest $request)
    {
        return Datatables::of($this->payment->getForDataTable())
            ->escapeColumns(['id'])
            ->addColumn('gateway_name', function ($payment) {
                return $payment->gateway_name;
            })
            ->addColumn('active', function ($payment) {
                return $payment->active;
            })
            ->addColumn('created_at', function ($payment) {
                return Carbon::parse($payment->created_at)->toDateString();
            })
            ->addColumn('actions', function ($payment) {
                return $payment->action_buttons;
            })
            ->make(true);
    }
}
