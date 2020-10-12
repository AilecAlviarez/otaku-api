<?php


namespace App\Services;



use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Publisher;
use App\Repositories\ChapterRepository;
use App\Repositories\CommentRepository;
use App\Repositories\PublisherRepository;
use App\Traits\ApiResponser;
use http\Env\Response;

class PublisherService extends ApiService
{
    use ApiResponser;


   public function __construct(PublisherRepository $repository)
   {

       parent::__construct($repository);


   }
   public function deletePublisher($publisher){

        $comments=$publisher->comments;
       // $this->deleteComments($comments);
        return $this->responseSuccesfully($comments[1]->chapter);
   }
   public function deleteComments($comments){

   }




}
