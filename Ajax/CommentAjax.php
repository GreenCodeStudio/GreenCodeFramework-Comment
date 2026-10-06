<?php

namespace Comment\Ajax;

use Authorization\Authorization;
use Comment\Comment;
use Core\AjaxController;

class CommentAjax extends AjaxController
{
    public function insert($objectType, $objectId, $data)
    {
        new Comment()->insert($objectType, $objectId, Authorization::getUserId(), $data);
    }
}
