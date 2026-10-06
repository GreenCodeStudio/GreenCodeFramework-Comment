<?php

namespace Comment\Controllers;

use Comment\Comment;
use Common\PageStandardController;

class CommentController extends PageStandardController
{
    public function show($objectType, $objectId)
    {
        $items = (new Comment())->getToShow($objectType, $objectId);
        $this->addView('Comment', 'CommentsShow', ['data' => ['items' => $items]]);
    }

    public function show_data($objectType, $objectId)
    {
        return ['objectType' => $objectType, 'objectId' => $objectId];
    }
}
