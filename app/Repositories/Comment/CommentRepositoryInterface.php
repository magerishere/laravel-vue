<?php

namespace App\Repositories\Comment;

use App\Repositories\BaseRepositoryInterface;
use Illuminate\Http\JsonResponse;

interface CommentRepositoryInterface extends BaseRepositoryInterface {
    public function likesAndDislikes($id,bool $type) : JsonResponse;
}