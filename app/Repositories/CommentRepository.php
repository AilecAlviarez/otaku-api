<?php


namespace App\Repositories;


use App\Models\Comment;
use Illuminate\Cache\Repository;

class CommentRepository extends AppRepository
{
  public function __construct(Comment $model)
  {
      parent::__construct($model);
  }
}
