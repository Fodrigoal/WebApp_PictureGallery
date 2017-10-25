<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Database\CommentTable;
use Application\Model\Comment;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Digits;
use Zend\View\Model\JsonModel;

class CommentController extends AbstractActionController
{
    /** @var CommentTable $commentsTable */
    private $commentsTable;

    public function __construct()
    {
        $this->commentsTable = new CommentTable('comp2920', 'root', 'password');
    }

    public function getAllCommentsAction()
    {
        $data['comments']   = [];
        $id     = $this->getRequest()->getQuery('pictures_id');
        $digits = new Digits();

        if($digits->isValid($id))
        {
            $comments = $this->commentsTable->getAllComments($id);

            foreach($comments as $comment)
            {
                $commentModel = new Comment();
                $commentModel->setComment($comment['comments_comment']);

                $data['comments'][] = $commentModel->getArray();
            }
        }

        return new JsonModel($data);
    }
}
