<?php

namespace Comment;

use Comment\Repository\CommentRepository;

class Comment
{

    public function getToShow($objectType, $objectId)
    {
        return (new CommentRepository())->getToShow($objectType, $objectId);
    }

    public function insert($objectType, $objectId, $getUserId, $data)
    {
        return (new CommentRepository())->insert([
            'object_type' => $objectType,
            'object_id' => $objectId,
            'user_id' => $getUserId,
            'contentPlainText' => $data->contentPlainText,
            'files' => empty($data->files) ? null : json_encode($data->files),
            'added' => date('Y-m-d H:i:s')
        ]);
    }
}
