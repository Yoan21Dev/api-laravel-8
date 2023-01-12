<?php

namespace App\Http\Resources\V2;

use Illuminate\Http\Resources\Json\ResourceCollection;

class PostCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    // public $collects = PostResource::class; es caso de querer usar otro recurso modificado para la collection
    public function toArray($request)
    {
        return [
            'data'=>$this->collection,
            'meta'=>[
                'organization' => 'Platzi',
                'authors'=>[
                    'Yoander Robles',
                    'Platzi'
                ]
                ],
                'type'=>'acticle'
        ];
    }
}
