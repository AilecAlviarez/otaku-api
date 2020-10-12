<?php


namespace App\Repositories;


use App\Models\CommentManga;
use App\Models\Manga;

class MangaRepository extends ServicesAppRepository
{
   public function __construct(Manga $model)
   {
       parent::__construct($model);
   }
}
