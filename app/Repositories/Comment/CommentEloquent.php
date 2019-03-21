<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/19/2019
 * Time: 5:30 PM
 */

namespace App\Repositories\Comment;


use App\Models\Comment;

class CommentEloquent implements CommentRepository{

    public $comment;

    public  function __construct(Comment $comment)
    {
        $this->comment = $comment;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->commnet->all();

    }

    public function store(array $attributes)
    {
        // TODO: Implement store() method.
        return $this->comment->create($attributes);

    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
        return $this->comment->find($id);

    }

    public function update($id, array $attributes)
    {
        // TODO: Implement update() method.
        return $this->comment->getById($id)->update($attributes);
    }

    public function destroy($id)
    {
        // TODO: Implement destroy() method.
        return $this->comment->getById($id)->delete();
    }

    public function with($id, $relations)
    {
        // TODO: Implement with() method.
        return $this->comment->with($relations)->find($id);

    }
}
