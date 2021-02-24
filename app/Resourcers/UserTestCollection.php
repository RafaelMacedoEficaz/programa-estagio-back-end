<?php

namespace App\Resourcers;

use Illuminate\Http\Resources\Json\JsonResource;

class UserTestCollection
{
    public function collection($data){
        return [
            'id'         => $this->id,
            'name'       => $this->name,
            'slug'       => $this->slug,
        ];
    }
}