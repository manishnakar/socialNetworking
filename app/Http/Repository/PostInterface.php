<?php

namespace App\Http\Repository;

interface PostInterface
{
    public function getAllPosts();

    public function getPostById($id);

    public function createOrUpdate($id = null);
}
