<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\SmsRepository;
use App\Models\Sms;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use PushNotification;
use App\Models\Gcm;

class SmsAPIController extends AppBaseController
{
	/** @var  SmsRepository */
	private $smsRepository;

	function __construct(SmsRepository $smsRepo)
	{
		$this->smsRepository = $smsRepo;
	}

	/**
	 * Display a listing of the Sms.
	 * GET|HEAD /sms
	 *
	 * @return Response
	 */
	public function index()
	{
		$sms = $this->smsRepository->all();

		return $this->sendResponse($sms->toArray(), "Sms retrieved successfully");
	}

	/**
	 * Show the form for creating a new Sms.
	 * GET|HEAD /sms/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created Sms in storage.
	 * POST /sms
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(Sms::$rules) > 0)
			$this->validateRequestOrFail($request, Sms::$rules);

		$input = $request->all();

		$sms = $this->smsRepository->create($input);

		$gcm = Gcm::all();
		$devices = [];

		foreach ($gcm as $key => $value) {
			$devices[] = PushNotification::Device($value->reg_id);
		}

		$devices = PushNotification::DeviceCollection($devices);

		$data['message'] = $sms->message;
		$data['mobiles'] = explode(',', $sms->mobiles);
		$message = PushNotification::Message(json_encode($data),array());

		$collection = PushNotification::app('appNameAndroid')->to($devices);
		$collection->adapter->setAdapterParameters(['sslverifypeer' => false]);
		$collection->send($message);

		return $this->sendResponse($sms->toArray(), "Sms saved successfully");
	}

	/**
	 * Display the specified Sms.
	 * GET|HEAD /sms/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$sms = $this->smsRepository->apiFindOrFail($id);

		return $this->sendResponse($sms->toArray(), "Sms retrieved successfully");
	}

	/**
	 * Show the form for editing the specified Sms.
	 * GET|HEAD /sms/{id}/edit
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		// maybe, you can return a template for JS
//		Errors::throwHttpExceptionWithCode(Errors::EDITION_FORM_NOT_EXISTS, ['id' => $id], static::getHATEOAS(['%id' => $id]));
	}

	/**
	 * Update the specified Sms in storage.
	 * PUT/PATCH /sms/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var Sms $sms */
		$sms = $this->smsRepository->apiFindOrFail($id);

		$result = $this->smsRepository->updateRich($input, $id);

		$sms = $sms->fresh();

		return $this->sendResponse($sms->toArray(), "Sms updated successfully");
	}

	/**
	 * Remove the specified Sms from storage.
	 * DELETE /sms/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->smsRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "Sms deleted successfully");
	}
}
