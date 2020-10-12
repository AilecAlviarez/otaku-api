<?php


namespace App\Repositories;


use App\Services\ApiService;

class MangaService extends ApiService
{

    public function __construct(MangaRepository $repository)
    {
        parent::__construct($repository);
    }
    public function removeComment($id){
        $manga=$this->repository->findById($id);
        $this->repository->updateInstance($manga,'comment_id',null);
    }
}
