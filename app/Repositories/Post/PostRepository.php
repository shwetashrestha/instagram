<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/19/2019
 * Time: 1:33 PM
 */

namespace App\Repositories\Post;


interface PostRepository
{
    public function getAll();

    public function store(array $attributes);

    public function getById($id);

    public function update($id, array $attributes);

    public function destroy($id);

    public function with($id, $relations);

}