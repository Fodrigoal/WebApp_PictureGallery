<?php

namespace Application\Model;

class Comment
{
    private $comment;

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getArray()
    {
        $data = [
            'comment' => $this->getComment(),
        ];

        return $data;
    }
}
