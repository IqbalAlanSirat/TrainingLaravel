<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $documents = Document::all();
        $documents = Document::simplePaginate(50);

        return view('Document/index', [
            'documents' => $documents,
            'name' => 'iqbal',
            'workplace'    => 'KSM'
        ])->render();
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Document/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreDocumentRequest $request)
    {
        // $tarikh_diterima = date('Y-m-d H:m:s', strtotime($request->tarikh_diterima_date . $request->tarikh_diterima_time));
        // dd($tarikh_diterima);
        $document = new Document();
        $document->nama = $request->nama;
        $document->tarikh_diterbitkan = $request->tarikh_diterima;
        $document->nama_penulis = $request->nama_penulis;
        $document->disahkan_oleh = $request->disahkan_oleh;
        $document->tarikh_disahkan = $request->tarikh_disahkan;
        $document->save();

        return to_route('document.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Document $document)
    {
        return view('document/edit')->with(compact('document'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDocumentRequest $request, Document $document)
    {
        $document->nama = $request->nama;
        $document->tarikh_diterbitkan = $request->tarikh_diterima;
        $document->nama_penulis = $request->nama_penulis;
        $document->disahkan_oleh = $request->disahkan_oleh;
        $document->tarikh_disahkan = $request->tarikh_disahkan;
        $document->save();

        return to_route('document.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Document $document)
    {
        $document->delete();
        return back();
    }
}
