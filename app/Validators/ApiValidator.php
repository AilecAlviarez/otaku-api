<?php


namespace App\Validators;


use App\interfaces\IValidator;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Validator;

trait ApiValidator
{
    use ApiResponser;
    public $rules;
    public function registerRules($rules)
    {
        $this->rules=$rules;
    }

    public function validateData($request,$rules,$property){
        $validator=Validator::make($request[$property],$rules);
        if($validator->fails()){
            return $this->validatioError($validator->errors());
        }
        return false;
    }
    public function validateRequest($request)
    {
        $validator=Validator::make($request->all(),$this->rules);
        if($validator->fails()){
            return $this->validatioError($validator->errors());
        }
        return false;
    }

}
