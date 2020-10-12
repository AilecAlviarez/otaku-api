<?php


namespace App\Repositories;


use App\Models\Chapter;

class ChapterRepository extends AppRepository
{
    public function __construct(Chapter $model)
    {
        parent::__construct($model);
    }

}
