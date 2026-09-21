<?php

namespace Comment;

use Comment\Repository\CommentRepository;

class Comment{

    public function getToShow($objectType, $objectId)
    {
        return (new CommentRepository())->getToShow($objectType, $objectId);
    }
}
