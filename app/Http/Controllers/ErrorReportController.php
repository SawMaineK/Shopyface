<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateErrorReportRequest;
use App\Http\Requests\UpdateErrorReportRequest;
use App\Libraries\Repositories\ErrorReportRepository;
use Flash;
use Mitul\Controller\AppBaseController as AppBaseController;
use Response;
use App\Models\ErrorReport;

class ErrorReportController extends AppBaseController
{

	/** @var  ErrorReportRepository */
	private $errorReportRepository;

	function __construct(ErrorReportRepository $errorReportRepo)
	{
		$this->errorReportRepository = $errorReportRepo;
	}

	/**
	 * Display a listing of the ErrorReport.
	 *
	 * @return Response
	 */
	public function index()
	{
		$errorReports = $this->errorReportRepository->paginate(10);

		return view('errorReports.index')
			->with('errorReports', $errorReports);
	}

	/**
	 * Show the form for creating a new ErrorReport.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('errorReports.create');
	}

	/**
	 * Store a newly created ErrorReport in storage.
	 *
	 * @param CreateErrorReportRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateErrorReportRequest $request)
	{
		$input = $request->all();

		$errorReport = $this->errorReportRepository->create($input);

		Flash::success('ErrorReport saved successfully.');

		return redirect(route('admin.errorReports.index'));
	}

	/**
	 * Display the specified ErrorReport.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$errorReport = $this->errorReportRepository->find($id);

		if(empty($errorReport))
		{
			Flash::error('ErrorReport not found');

			return redirect(route('admin.errorReports.index'));
		}

		return view('errorReports.show')->with('errorReport', $errorReport);
	}

	/**
	 * Show the form for editing the specified ErrorReport.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function edit($id)
	{
		$errorReport = $this->errorReportRepository->find($id);

		if(empty($errorReport))
		{
			Flash::error('ErrorReport not found');

			return redirect(route('admin.errorReports.index'));
		}

		return view('errorReports.edit')->with('errorReport', $errorReport);
	}

	/**
	 * Update the specified ErrorReport in storage.
	 *
	 * @param  int              $id
	 * @param UpdateErrorReportRequest $request
	 *
	 * @return Response
	 */
	public function update($id, UpdateErrorReportRequest $request)
	{
		$errorReport = $this->errorReportRepository->find($id);

		if(empty($errorReport))
		{
			Flash::error('ErrorReport not found');

			return redirect(route('admin.errorReports.index'));
		}

		$this->errorReportRepository->updateRich($request->all(), $id);

		Flash::success('ErrorReport updated successfully.');

		return redirect(route('admin.errorReports.index'));
	}

	/**
	 * Remove the specified ErrorReport from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$errorReport = $this->errorReportRepository->find($id);

		if(empty($errorReport))
		{
			Flash::error('ErrorReport not found');

			return redirect(route('admin.errorReports.index'));
		}

		$this->errorReportRepository->delete($id);

		Flash::success('ErrorReport deleted successfully.');

		return redirect(route('admin.errorReports.index'));
	}
}
