<?php namespace App\Http\Controllers\API;

use App\Http\Requests;
use App\Libraries\Repositories\ErrorReportRepository;
use App\Models\ErrorReport;
use Illuminate\Http\Request;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use Mail;

class ErrorReportAPIController extends AppBaseController
{
	/** @var  ErrorReportRepository */
	private $errorReportRepository;

	function __construct(ErrorReportRepository $errorReportRepo)
	{
		$this->errorReportRepository = $errorReportRepo;
	}

	/**
	 * Display a listing of the ErrorReport.
	 * GET|HEAD /errorReports
	 *
	 * @return Response
	 */
	public function index()
	{
		$errorReports = $this->errorReportRepository->all();

		return $this->sendResponse($errorReports->toArray(), "ErrorReports retrieved successfully");
	}

	/**
	 * Show the form for creating a new ErrorReport.
	 * GET|HEAD /errorReports/create
	 *
	 * @return Response
	 */
	public function create()
	{
	}

	/**
	 * Store a newly created ErrorReport in storage.
	 * POST /errorReports
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function store(Request $request)
	{
		if(sizeof(ErrorReport::$rules) > 0)
			$this->validateRequestOrFail($request, ErrorReport::$rules);

		$input = $request->all();

		$errorReports = $this->errorReportRepository->create($input);

		// Data to be used on the email view
        $data = array(
            'androidVersion'    => $errorReports->android_version,
            'phoneModel'        => $errorReports->phone_model,
            'packageName'       => $errorReports->package_name,
            'packageVersion'    => $errorReports->package_version,
            'stackTrace'        => $errorReports->stacktrace
        );
        
        // Send the activation code through email
        Mail::send('emails.android-error', $data, function ($m) use ($errorReports){
            $m->to('sawmainek90@gmail.com', 'Developers');
            if(isset($errorReports->send_email_1))
            	$m->to($errorReports->send_email_1, 'Developers');
            $m->subject('Android Error Report');
        });


		return $this->sendResponse($errorReports->toArray(), "ErrorReport saved successfully");
	}

	/**
	 * Display the specified ErrorReport.
	 * GET|HEAD /errorReports/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$errorReport = $this->errorReportRepository->apiFindOrFail($id);

		return $this->sendResponse($errorReport->toArray(), "ErrorReport retrieved successfully");
	}

	/**
	 * Show the form for editing the specified ErrorReport.
	 * GET|HEAD /errorReports/{id}/edit
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
	 * Update the specified ErrorReport in storage.
	 * PUT/PATCH /errorReports/{id}
	 *
	 * @param  int              $id
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function update($id, Request $request)
	{
		$input = $request->all();

		/** @var ErrorReport $errorReport */
		$errorReport = $this->errorReportRepository->apiFindOrFail($id);

		$result = $this->errorReportRepository->updateRich($input, $id);

		$errorReport = $errorReport->fresh();

		return $this->sendResponse($errorReport->toArray(), "ErrorReport updated successfully");
	}

	/**
	 * Remove the specified ErrorReport from storage.
	 * DELETE /errorReports/{id}
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->errorReportRepository->apiDeleteOrFail($id);

		return $this->sendResponse($id, "ErrorReport deleted successfully");
	}
}
