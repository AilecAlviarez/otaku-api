<?php


namespace App\Traits;


use Highlight\Mode;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponser
{
    public function responseSuccesfully($data,$code=200){
        return response()->json($data)->status($code);
    }
    public function errorNotFoundModel($message,$code=404){
        return response()->json($message)->status($code);
    }
    public function errorResponseGeneral($err,$code=500){
        return response()->json($err)->status($code);
    }
    public function responseCollection(Collection $collection){
        return $this->responseSuccesfully($collection,200);
    }
    public function responseInstance(Model $instance){
        return $this->responseSuccesfully($instance,200);
    }

}
