<?php


namespace App\Traits;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;


use Illuminate\Http\Request;
trait ApiResponser
{
    public function responseSuccesfully($data,$code=200){
        return response()->json($data,$code);
    }
    public function errorNotFoundModel($message,$code=404){
        return response()->json($message,$code);
    }
    public function errorResponseGeneral($err,$code=500){
        return response()->json($err,$code);
    }
    public function responseCollection(Collection $collection){
        return $this->responseSuccesfully($collection);
    }
    public function responseInstance(Model $instance){
        return $this->responseSuccesfully($instance);
    }
    public function validatioError($errors,$code=403){
        return $this->responseSuccesfully($errors,$code);
    }

}
