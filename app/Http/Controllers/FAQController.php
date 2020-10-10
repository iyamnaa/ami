<?php

namespace App\Http\Controllers;

use App\DataTables\FAQDataTable;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\CreateFAQRequest;
use App\Http\Requests\UpdateFAQRequest;
use App\Repositories\FAQRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use App\Models\FAQ;

class FAQController extends AppBaseController
{
    /** @var  FAQRepository */
    private $fAQRepository;

    public function front(Request $request)
    {
        $faqs = FAQ::all();
        return view('faq.index', ['faqs' => $faqs]);
    }

    public function read(Request $request)
    {
        $faq = FAQ::find($request->id);
        return view('faq.show', ['faq' => $faq]);
    }

    public function syaratKetentuan(Request $request)
    {
        return view('faq.syarat-ketentuan');
    }

    public function __construct(FAQRepository $fAQRepo)
    {
        $this->fAQRepository = $fAQRepo;
    }

    /**
     * Display a listing of the FAQ.
     *
     * @param FAQDataTable $fAQDataTable
     * @return Response
     */
    public function index(FAQDataTable $fAQDataTable)
    {
        return $fAQDataTable->render('admin.faqs.index');
    }

    /**
     * Show the form for creating a new FAQ.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.faqs.create');
    }

    /**
     * Store a newly created FAQ in storage.
     *
     * @param CreateFAQRequest $request
     *
     * @return Response
     */
    public function store(CreateFAQRequest $request)
    {
        $input = $request->all();

        $fAQ = $this->fAQRepository->create($input);

        Flash::success('F A Q saved successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Display the specified FAQ.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $fAQ = $this->fAQRepository->find($id);

        if (empty($fAQ)) {
            Flash::error('F A Q not found');

            return redirect(route('faqs.index'));
        }

        return view('admin.faqs.show')->with('fAQ', $fAQ);
    }

    /**
     * Show the form for editing the specified FAQ.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $fAQ = $this->fAQRepository->find($id);

        if (empty($fAQ)) {
            Flash::error('FAQ not found');
            return redirect(route('faqs.index'));
        }

        return view('admin.faqs.edit')->with('fAQ', $fAQ);
    }

    /**
     * Update the specified FAQ in storage.
     *
     * @param  int              $id
     * @param UpdateFAQRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateFAQRequest $request)
    {
        $fAQ = $this->fAQRepository->find($id);

        if (empty($fAQ)) {
            Flash::error('FAQ not found');

            return redirect(route('faqs.index'));
        }

        $fAQ = $this->fAQRepository->update($request->all(), $id);

        Flash::success('FAQ updated successfully.');

        return redirect(route('faqs.index'));
    }

    /**
     * Remove the specified FAQ from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $fAQ = $this->fAQRepository->find($id);

        if (empty($fAQ)) {
            Flash::error('FAQ not found');

            return redirect(route('faqs.index'));
        }

        $this->fAQRepository->delete($id);

        Flash::success('FAQ deleted successfully.');

        return redirect(route('faqs.index'));
    }
}
