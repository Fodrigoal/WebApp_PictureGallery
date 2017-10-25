<?php

namespace Application\Database;

use Zend\Db\Sql\Select;

class PictureTable extends BaseTable
{
    public function getPictures($offset = 0, $limit = 8)
    {
        $select = $this->sql
            ->select()
            ->from('pictures')
            ->join('authors', 'authors.authors_id = pictures.authors_id', Select::SQL_STAR, Select::JOIN_LEFT)
            ->offset($offset)
            ->limit($limit)
        ;

        $query = $this->sql->buildSqlString($select);

        return $this->adapter->query($query)->execute();
    }

    public function insertInstagram(array $insta)
    {
        $insert = $this->sql
            ->insert()
            ->into('pictures')
            ->values($insta);


        $query = $this->sql->buildSqlString($insert);

        return $this->adapter->query($query)->execute();
    }

    public function searchPictureTitle($word)
    {
        $select = $this->sql
            ->select()
            ->from('pictures')
            ->join('authors', 'authors.authors_id = pictures.authors_id', Select::SQL_STAR, Select::JOIN_LEFT)
            ->where('pictures_title like "%'.$word.'%"')
        ;

        $query = $this->sql->buildSqlString($select);

        return $this->adapter->query($query)->execute();
    }
}
