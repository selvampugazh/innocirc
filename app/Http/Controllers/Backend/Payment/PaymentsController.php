<?php

namespace App\Http\Controllers\Backend\Payment;

use App\Models\Payment\Payment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Backend\Payment\PaymentRepository;
use App\Http\Requests\Backend\Payment\ManagePaymentRequest;
use App\Http\Requests\Backend\Payment\CreatePaymentRequest;
use App\Http\Requests\Backend\Payment\StorePaymentRequest;
use App\Http\Requests\Backend\Payment\EditPaymentRequest;
use App\Http\Requests\Backend\Payment\UpdatePaymentRequest;
use App\Http\Requests\Backend\Payment\DeletePaymentRequest;

/**
 * PaymentsController
 */
class PaymentsController extends Controller
{
    /**
     * variable to store the repository object
     * @var PaymentRepository
     */
    protected $repository;

    /**
     * contructor to initialize repository object
     * @param PaymentRepository $repository;
     */
    public function __construct(PaymentRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Display a listing of the resource.
     *
     * @param  App\Http\Requests\Backend\Payment\ManagePaymentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function index(ManagePaymentRequest $request)
    {
        return view('backend.payments.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @param  CreatePaymentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function create(CreatePaymentRequest $request)
    {
        return view('backend.payments.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  StorePaymentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePaymentRequest $request)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Create the model using repository create method
        $this->repository->create($input);
        //return with successfull message
        return redirect()->route('admin.payments.index')->withFlashSuccess(trans('alerts.backend.payments.created'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  App\Models\Payment\Payment  $payment
     * @param  EditPaymentRequestNamespace  $request
     * @return \Illuminate\Http\Response
     */
    public function edit(Payment $payment, EditPaymentRequest $request)
    {
        return view('backend.payments.edit', compact('payment'));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  UpdatePaymentRequestNamespace  $request
     * @param  App\Models\Payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePaymentRequest $request, Payment $payment)
    {
        //Input received from the request
        $input = $request->except(['_token']);
        //Update the model using repository update method
        $this->repository->update( $payment, $input );
        //return with successfull message
        return redirect()->route('admin.payments.index')->withFlashSuccess(trans('alerts.backend.payments.updated'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  DeletePaymentRequestNamespace  $request
     * @param  App\Models\Payment\Payment  $payment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Payment $payment, DeletePaymentRequest $request)
    {
        //Calling the delete method on repository
        $this->repository->delete($payment);
        //returning with successfull message
        return redirect()->route('admin.payments.index')->withFlashSuccess(trans('alerts.backend.payments.deleted'));
    }
    
}
