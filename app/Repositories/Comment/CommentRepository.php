<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 3/19/2019
 * Time: 5:29 PM
 */

namespace App\Repositories\Comment;


interface CommentRepository
{
    public function getAll();

    public function store(array $attributes);

    public function getById($id);

    public function update($id, array $attributes);

    public function destroy($id);

    public function with($id, $relations);
}