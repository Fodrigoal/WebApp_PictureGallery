<?php

namespace Application\Model;

class Picture
{
    private $id;
    private $authorName;
    private $pictureFilename;
    private $pictureTitle;
    private $pictureDescription;
    private $pictureInstagram;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return $this
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * @param mixed $authorName
     * @return $this
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureTitle()
    {
        return $this->pictureTitle;
    }

    /**
     * @param mixed $pictureTitle
     * @return $this
     */
    public function setPictureTitle($pictureTitle)
    {
        $this->pictureTitle = $pictureTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureDescription()
    {
        return $this->pictureDescription;
    }

    /**
     * @param mixed $pictureDescription
     * @return $this
     */
    public function setPictureDescription($pictureDescription)
    {
        $this->pictureDescription = $pictureDescription;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPictureFilename()
    {
        return $this->pictureFilename;
    }

    /**
     * @param mixed $pictureFilename
     * @return $this
     */
    public function setPictureFilename($pictureFilename)
    {
        $this->pictureFilename = $pictureFilename;
        return $this;
    }

    public function getInstagramPic()
    {
        return $this->pictureInstagram;
    }

    public function setInstagramPic($pictureInstagram)
    {
        $this->pictureInstagram = $pictureInstagram;
        return $this;
    }

    public function getArray()
    {
        $data = [
            'id' => $this->getId(),
            'authorName' => $this->getAuthorName(),
            'pictureTitle' => $this->getPictureTitle(),
            'pictureDescription' => $this->getPictureDescription(),
            'filename' => $this->getPictureFilename(),
            'pictureInstagram' => $this->getInstagramPic(),
        ];

        return $data;
    }
}