<?php


namespace App\Services;


use App\Repositories\AppRepository;
use App\Repositories\ChapterRepository;

class ChapterService extends ApiService
{
public function __construct(ChapterRepository $repository)
{
    parent::__construct($repository);
}
}
