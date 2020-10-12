<?php


namespace App\Services;



use App\Models\Chapter;
use App\Models\Comment;
use App\Models\Publisher;
use App\Repositories\ChapterRepository;
use App\Repositories\CommentRepository;
use App\Repositories\MangaRepository;
use App\Repositories\MangaService;
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
      $commentsManga=$publisher->comments_manga;
        return $this->responseSuccesfully($commentsManga[0]->manga);
   }
   public function deleteComments($comments){
       $chapterService=new ChapterService(new ChapterRepository());

       foreach ($comments as $comment){
          $chapter=$comment->chapter->chapter_id;
          $chapterService->removeComment($chapter);
       }

   }
   public function deleteCommentsManga($comments){
       $mangaService=new MangaService(new MangaRepository());
       foreach ($comments as $comment){
           $manga=$comment->manga->manga_id;
           $mangaService->removeComment($manga);
       }
   }




}
