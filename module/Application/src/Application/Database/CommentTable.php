<?php

namespace Application\Database;

class CommentTable extends BaseTable
{
    public function getAllComments($picture_id)
    {
        $select = $this->sql
            ->select()
            ->from('comments')
            ->where('pictures_id = ' .$picture_id);

        $query = $this->sql->buildSqlString($select);

        return $this->adapter->query($query)->execute();
    }
}
