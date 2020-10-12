<?php


namespace App\Validators;


use App\interfaces\IValidator;
use App\Traits\ApiResponser;
use Illuminate\Support\Facades\Validator;

trait ApiValidator
{
    use ApiResponser;
    public $rules;
    public function __construct($rules)
    {
        $this->rules=$rules;
    }

    public function validateData($request,$rules){
        $validator=Validator::make($request->all(),$rules);
        if($validator->fails()){
            return $this->validatioError($validator->errors());
        }
        return true;
    }
    public function validateRequest($request)
    {
        $validator=Validator::make($request->all(),$this->rules);
        if($validator->fails()){
            return $this->validatioError($validator->errors());
        }
        return true;
    }

}
