<?php

namespace App\Http\Controllers;

use App\Document;
use App\Http\Requests\DocumentRequest;
use App\Http\Resources\DocumentCollectionResource;
use App\Http\Resources\DocumentResource;

class DocumentController extends Controller
{
    public function index()
    {
        return new DocumentCollectionResource(Document::all());
    }

    public function store(DocumentRequest $request)
    {
        return Document::create($request->all());
    }

    public function show(Document $document)
    {
        return new DocumentResource($document);
    }

    public function update(DocumentRequest $request, Document $document)
    {
        return $document->update($request->all());
    }

    public function destroy(Document $document)
    {
        return $document->delete();
    }
}
