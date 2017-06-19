<?php

namespace Landing\Model;

interface UserTableInterface
{
    /**
     * Return a set of all blog posts that we can iterate over.
     *
     * Each entry should be a Post instance.
     *
     * @return Post[]
     */
    public function findAllUsers();

    /**
     * Return a single blog post.
     *
     * @param  int $id Identifier of the post to return.
     * @return Post
     */
    public function findUser($id);
}

