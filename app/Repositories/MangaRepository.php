<?php


namespace App\Repositories;


use App\Models\Manga;

class MangaRepository extends AppRepository
{
   public function __construct(Manga $model)
   {
       parent::__construct($model);
   }
}
