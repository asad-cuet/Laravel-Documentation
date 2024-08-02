<?php
namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class JobDetailCollection extends JsonResource
{
    protected $params;
    public function __construct($resource,$params='')
    {
        parent::__construct($resource);
        $this->params = $params;
    }

    public function toArray($request)
    {
            if ($this->resource === null) 
            {
                return [];
            }

            
            return [
            'id' => $this->id,
            ];
    }
    public function with($request)
    {
        if ($this->resource === null) 
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