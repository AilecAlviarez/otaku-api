<?php


namespace App\interfaces;


interface IValidator
{
   public function validateData($request,$rules);
   public function validateRequest($request);
}
