<?php

namespace App\Http\Controllers;

use App\Repositories\Comment\CommentRepository;
use Illuminate\Http\Request;

class CommentController extends ApiBaseController
{

    public $commentRepository;

    public function __construct(CommentRepository $commentRepository)
    {
        $this->commentRepository = $commentRepository;
    }
    
    public function getComment($id)
    {
        dd('here');
//        return $this->sendResponse($this->commentRepository->with($id, 'post'), 'Comment Saved');
    }
}
