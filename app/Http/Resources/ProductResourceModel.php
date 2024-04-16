<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class ProductResourceModel extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        //php artisan make:resource Product 
        // đinh dang 1 so cach trả về và có thể doi tên => chuyen hóa sang kieu Json với key việt hóa tùy ý
        return [
            'id' => $this->id,
            'tensp' => $this->name,
            'gia' => $this->price,
            'created_at' => Carbon::parse($this->created_at)->format('d/m/Y'),
            'updated_at' => Carbon::parse($this->updated_at)->format('d/m/Y'),
          ];
    }
}
