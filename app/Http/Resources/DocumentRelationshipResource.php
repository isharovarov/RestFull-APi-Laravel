<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class DocumentRelationshipResource extends JsonResource
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
            'author' => [
                'links' => [
                    'self'    => route('documents.relationships.author', ['document' => $this->id]),
                    'related' => route('documents.author', ['document' => $this->id]),
                ],
            ],
            'comments' => [
                'links' => [
                    'self'    => route('documents.relationships.comments', ['document' => $this->id]),
                    'related' => route('documents.comments', ['document' => $this->id]),
                ],
            ],
        ];
    }
}
