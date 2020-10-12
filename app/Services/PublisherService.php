<?php


namespace App\Services;




use App\Repositories\PublisherRepository;
use App\Traits\ApiResponser;

class PublisherService extends ApiService
{
    use ApiResponser;


  public $mangaService;
   public function __construct(PublisherRepository $repository,MangaService $mangaService)
   {

       parent::__construct($repository);
       $this->mangaService=$mangaService;



   }
   public function deletePublisher($publisher){

        $comments=$publisher->comments;
       $commentsManga=$publisher->comments_manga;
       $mangas=$publisher->mangas;

       $this->deleteComments($comments);
       $this->deleteCommentsManga($commentsManga);
       $this->removePublisherManga($mangas);

       return $this->deleteOne($publisher);
      //return $this->responseSuccesfully($mangas);
   }
   public function removePublisherManga($mangas){
       foreach ($mangas as $manga){
           $this->mangaService->removePublisher($manga);

       }

   }
   public function deleteComments($comments){


       foreach ($comments as $comment){
         $comment->delete();
       }

   }
   public function deleteCommentsManga($comments){
       foreach ($comments as $comment){
           $comment->delete();
       }
   }




}
