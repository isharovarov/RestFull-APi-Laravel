<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'type' => 'documents',
            'id'   => (string)$this->id,
            'attributes' => [
                'title' => $this->title,
                'body' => $this->body
            ],
            'links' => [
                'self' => route('documents.show', ['document' => $this->id]),
            ],
            'relationships' => new DocumentRelationshipResource($this),
        ];
    }
}
