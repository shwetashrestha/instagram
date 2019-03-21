<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Repositories\Post\PostRepository;
use Illuminate\Http\Request;

class PostController extends ApiBaseController
{
    public $postRepository;

    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
//        $this->post = $post;
    }

    public function index()
    {
        return $this->sendResponse($this->postRepository->getAll(), 'Post Retrieved Successfully');
    }
//    public function store(Request $request)
//   {
//       $this->post->savePost($request);
//       return $this->sendResponse($this->post->orderBY('created_at','desc')->get(), 'Post have been add');
//
//   }

    public function getPost($id)
    {
        return $this->sendResponse($this->postRepository->with($id, 'user'), 'Post Saved');
    }
//    public function show()
//    {
//        dd('Single Post');
//    }

//     public $post;
//    public function __construct(Post $post){
//        $this->post = $post;
//    }
//    public function store(Request $request)
//    {
//        $this->post->savePost($request);
//        return $this->sendResponse($this->post->orderBY('created_at','desc')->get(), 'Post have been add');
//
//    }
//    public function index()
//    {
//        return $this->sendResponse($this->post->orderBY('created_at','desc')->get(), 'Post Retrieved');
//    }
//    public function update(Request $request,$id)
//    {
//        $post = $this->post->updatePost($request, $id);
//        if($post)
//        {
//             return $this->sendResponse($this->post->orderBy('created_at','desc')->get(),'Post update Successfully');
//        }
//
//        return $this->sendError('Post hasnot been update');
//
//    }
//    public function destroy($id)
//    {
//        $post = Post::findOrFail($id);
//
//        if(! $post){
//            return response()->json([
//                'success'=>false,
//                'message'=>'Post with id ' .$id. ' not found '
//        ]);
//        }
//        if($post->destroy($id)){
//            return response()->json([
//                'success'=>true,
//                'message'=>'Post with id ' .$id. ' successfully deleted'
//        ]);
//        }
//    }
//    public function like($id)
//    {
//        return $this->sendResponse($this->post->addLike($id), 'Post Liked');
//    }
//    public function dislike($id)
//    {
//
//        return $this->sendResponse($this->post->destoryLike($id), 'Post not Liked');
//    }

    
}
