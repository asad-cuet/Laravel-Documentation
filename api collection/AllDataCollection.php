<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;

class AllDataCollection extends ResourceCollection
{
    protected $params;
    public function __construct($collection,$params='')
    {
        parent::__construct($collection);
        $this->params = $params;
    }

    public function toArray($request)
    {
        return $this->collection->map(function ($data) {
            if ($this->collection->isEmpty()) 
            {
                return [];
            }

            return [
            'id' => $data->id,
            ];
        });
    }
    public function with($request)
    {
        if ($this->collection->isEmpty()) 
        {
            return [
                'success' => false,
                'result' => false,
                'status' => 404
            ];
        }
        return [
            'success' => true,
            'result' => true,
            'status' => 200
        ];
    }
}