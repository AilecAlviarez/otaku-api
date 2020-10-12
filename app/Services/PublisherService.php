<?php


namespace App\Services;




use App\Repositories\PublisherRepository;
use App\Traits\ApiResponser;

class PublisherService extends ApiService
{
    use ApiResponser;

  public $chapterService;
  public $mangaService;
   public function __construct(PublisherRepository $repository,ChapterService $chapterService,MangaService $mangaService)
   {

       parent::__construct($repository);
       $this->chapterService=$chapterService;
       $this->mangaService=$mangaService;


   }
   public function deletePublisher($publisher){

        $comments=$publisher->comments;
       $commentsManga=$publisher->comments_manga;
      
       //$this->deleteComments($comments);
       //$this->deleteCommentsManga($commentsManga);

        //return $this->deleteOne($publisher);
       return $this->responseSuccesfully($commentsManga);
   }
   public function deleteComments($comments){


       foreach ($comments as $comment){
          $chapter=$comment->chapter->chapter_id;
          $this->chapterService->removeComment($chapter);
       }

   }
   public function deleteCommentsManga($comments){
       foreach ($comments as $comment){
           $manga=$comment->manga->manga_id;
           $this->mangaService->removeComment($manga);
       }
   }




}
