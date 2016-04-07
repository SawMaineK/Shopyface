<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateSmsRequest;
use App\Http\Requests\UpdateSmsRequest;
use App\Libraries\Repositories\SmsRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\Sms;
use PushNotification;
use App\Models\Gcm;

class SmsController extends AppBaseController
{

	/** @var  SmsRepository */
	private $smsRepository;

	function __construct(SmsRepository $smsRepo)
	{
		$this->smsRepository = $smsRepo;
	}

	/**
	 * Display a listing of the Sms.
	 *
	 * @return Response
	 */
	public function index()
	{
		$sms = $this->smsRepository->paginate(10);

		return view('sms.index')
			->with('sms', $sms);
	}

	/**
	 * Show the form for creating a new Sms.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('sms.create');
	}

	/**
	 * Store a newly created Sms in storage.
	 *
	 * @param CreateSmsRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateSmsRequest $request)
	{
		$input = $request->all();

		$sms = $this->smsRepository->create($input);

		$gcm = Gcm::all();
		$devices = [];

		foreach ($gcm as $key => $value) {
			$devices[] = PushNotification::Device($value->device_id);
		}

		$devices = PushNotification::DeviceCollection($devices);

		$data['message'] = $sms->message;
		$data['mobiles'] = explode(',', $sms->mobiles);
		$message = PushNotification::Message(json_encode($data),array());

		$collection = PushNotification::app('appNameAndroid')->to($devices);
		$collection->adapter->setAdapterParameters(['sslverifypeer' => false]);
		$collection->send($message);

		Flash::success('Sms saved successfully.');

		return redirect(route('admin.sms.index'));
	}

	/**
	 * Display the specified Sms.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$sms = $this->smsRepository->find($id);

		if(empty($sms))
		{
			Flash::error('Sms not found');

			return redirect(route('admin.sms.index'));
		}

		return view('sms.show')->with('sms', $sms);
	}

	/**
	 * Show the form for editing the specified Sms.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$sms = $this->smsRepository->find($id);

		if(empty($sms))
		{
			Flash::error('Sms not found');

			return redirect(route('admin.sms.index'));
		}

		return view('sms.edit')->with('sms', $sms);
	}

	/**
	 * Update the specified Sms in storage.
	 *
	 * @param  int              $id
	 * @param UpdateSmsRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateSmsRequest $request)
	{
		$sms = $this->smsRepository->find($id);

		if(empty($sms))
		{
			Flash::error('Sms not found');

			return redirect(route('admin.sms.index'));
		}

		$this->smsRepository->updateRich($request->all(), $id);

		Flash::success('Sms updated successfully.');

		return redirect(route('admin.sms.index'));
	}

	/**
	 * Remove the specified Sms from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$sms = $this->smsRepository->find($id);

		if(empty($sms))
		{
			Flash::error('Sms not found');

			return redirect(route('admin.sms.index'));
		}

		$this->smsRepository->delete($id);

		Flash::success('Sms deleted successfully.');

		return redirect(route('admin.sms.index'));
	}
}
