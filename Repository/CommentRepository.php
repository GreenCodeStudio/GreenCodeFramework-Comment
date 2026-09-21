<?php

namespace Comment\Repository;

use Core\Database\DB;

class CommentRepository extends \Core\Repository{

    public function getToShow($objectType, $objectId)
    {
        return DB::funquery("SELECT c.*, JSON_OBJECT('id', u.id, 'name', u.name, 'surname', u.surname) AS `user`
FROM comment c 
JOIN user u ON c.user_id = u.id
WHERE object_type = ? AND object_id = ? ORDER BY added ASC", [$objectType, $objectId])->map(fn($x)=>[...(array)$x, 'user'=>json_decode($x->user)])->toArray();
    }

    public function defaultTable(): string
    {
        return 'comment';
    }
}
