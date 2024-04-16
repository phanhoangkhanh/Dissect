<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductResCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        //php artisan make:resource ProductResCollection --collection .
        // tra về hết tất cả phần tử ( là 1 collectioon )
        return parent::toArray($request);
    }
}
