<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/19/2019
 * Time: 1:36 PM
 */

namespace App\Repositories\Post;


use App\Models\Post;

class PostEloquent implements PostRepository{
    public $post;
    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function getAll()
    {
        return $this->post->all();
    }

    public function store(array $attributes)
    {
        return $this->post->create($attributes);
    }

    public function getById($id)
    {
        return $this->post->find($id);
    }

    public function update($id, array $attributes)
    {
        return $this->post->getById($id)->update($attributes);
    }

    public function destroy($id)
    {
        return $this->post->getById($id)->delete();
    }

    public function with($id, $relations)
    {
        return $this->post->with($relations)->find($id);
    }

}