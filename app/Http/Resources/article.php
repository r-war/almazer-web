<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Pagination\LengthAwarePaginator;

class article extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $response = [
            'data' => $this->collection,
        ];
    
        if($this->resource instanceof LengthAwarePaginator)
        {
            $response['pagination'] = [
                'total' => $this->resource->total(),
                'lastPage' => $this->resource->lastPage(),
                'perPage' => $this->resource->perPage(),
                'currentPage' => $this->resource->currentPage(),
                'nextPageUrl' => $this->resource->nextPageUrl(),
                'previousPageUrl' => $this->resource->previousPageUrl(),
            ];
        }
        return $response;
    }
}
