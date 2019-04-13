<?php

namespace App\Http\Controllers;

use App\DiaryEntry;
use App\Http\Requests\DiaryRequest;
use App\Http\Transformers\DiaryTransformer;
use App\Services\DiaryService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class DiaryController extends Controller
{
    private $diaryEntry;
    private $diaryRequest;
    private $diaryTransformer;
    private $diaryService;

    public function __construct(
        DiaryEntry $diaryEntry,
        DiaryRequest $diaryRequest,
        DiaryTransformer $diaryTransformer,
        DiaryService $diaryService
    ) {
        $this->middleware('auth', ['except' => ['show', 'index']]);

        $this->diaryEntry = $diaryEntry;
        $this->diaryRequest = $diaryRequest;
        $this->diaryTransformer = $diaryTransformer;
        $this->diaryService = $diaryService;
    }

    public function index(): collection
    {
        return $this->diaryEntry->getEntries();
    }

    public function show(DiaryEntry $diary)
    {
        return view('diary.show', compact('diary'));
    }

    public function edit(DiaryEntry $diary)
    {
        return view('diary.edit', compact('diary'));
    }

    public function update(DiaryEntry $diary, DiaryRequest $request): RedirectResponse
    {
        $diary->update(
            $this->diaryTransformer->updateTransformer($request->validated())
        );

        $this->diaryService->associateTags($request->tag, $diary->id);

        return redirect('/');
    }

    public function store(DiaryRequest $request)
    {
        $diaryEntry = $this->diaryEntry->create(
            $this->diaryTransformer->storeTransformer($request->all())
        );

        $this->diaryService->associateTags($request->tag, $diaryEntry->id);

        return view('admin.postSuccess');
    }

    public function destroy(DiaryEntry $diary)
    {
        $diary->delete();
        return redirect('/');
    }
}
