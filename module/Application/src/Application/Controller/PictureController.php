<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Database\PictureTable;
use Application\Model\Picture;

use Zend\I18n\Validator\Alpha;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Digits;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;

class PictureController extends AbstractActionController
{
    /** @var PictureTable $picturesTable */
    private $picturesTable;
    private $auth;

    public function __construct()
    {
        // this isn't the best way of grabbing a database table,
        // but for the brevity of this course, this will do.
        // for those interested, look into Inversion of Control and Dependency Injection
        // also, ZF2 allows you to store this the config arrays - we won't discuss this because this is ZF2 specific
        $this->picturesTable = new PictureTable('comp2920', 'root', 'password');
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function getAllPicturesAction()
    {
        $pictures = $this->picturesTable->getPictures();
        $data = $this->_getPicturesData($pictures);

        return new JsonModel($data);
    }

    public function getPicturesRangeAction()
    {
        $data   = [];
        $offset = $this->getRequest()->getQuery('start');
        $limit  = $this->getRequest()->getQuery('count');
        $digits = new Digits();

        if($digits->isValid($offset) && $digits->isValid($limit))
        {
            $pictures = $this->picturesTable->getPictures($offset, $limit);
            $data = $this->_getPicturesData($pictures);
        }

        return new JsonModel($data);
    }

    public function searchAction()
    {
        $data   = [];
        $word   = $this->getRequest()->getQuery('word');
        $alpha  = new Alpha();

        if($alpha->isValid($word))
        {
            $pictures = $this->picturesTable->searchPictureTitle($word);
            $data = $this->_getPicturesData($pictures);
        }

        return new JsonModel($data);
    }

    private function _getPicturesData($pictures)
    {
        $data = [];

        foreach($pictures as $picture)
        {
            $pictureModel = new Picture();

            $pictureModel
                ->setId($picture['pictures_id'])
                ->setAuthorName($picture['authors_firstname']. ' ' . $picture['authors_lastname'])
                ->setPictureDescription($picture['pictures_description'])
                ->setPictureTitle($picture['pictures_title'])
                ->setPictureFilename($picture['pictures_filename'])
                ->setInstagramPic($picture['pictures_instagram'])
            ;


            $data[] = $pictureModel->getArray();
        }

        return $data;
    }
}
