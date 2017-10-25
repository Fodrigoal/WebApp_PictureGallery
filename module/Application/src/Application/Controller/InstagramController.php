<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Application\Database\InstagramTable;
use Application\Database\PictureTable;
use Application\Model\Picture;
use Application\Database\CommentTable;
use Application\Model\Comments;
use Zend\I18n\Validator\Alpha;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\Validator\Digits;
use Zend\View\Model\JsonModel;
use Zend\View\Model\ViewModel;
use Instagram\Auth;
use Instagram\Instagram;
use Instagram\Comment;
use Instagram\User;
use Instagram\Collection\MediaCollection;
use Zend\Http\Request;
use Zend\Http\Response;


class InstagramController extends AbstractActionController
{
    /** @var InstagramTable $instagramTable */
    private $picturesTable;
    private $auth;

    public function __construct()
    {
        $this->auth = new Auth([
            'client_id' => 'a81612d0ffa04f9a99e9e5227283624d',
            'client_secret' => '4d7384983094493db78ae8e0915bf850',
            'redirect_uri' => 'http://localhost:8090/import',
        ]);

        $this->picturesTable = new PictureTable('comp2920', 'root', 'password');

    }

    public function authorizeAction()
    {
        $this->auth->authorize();
    }

    public function importAction()
    {
        $data = [];

        // grab the code from the GET params - it's provided in the URI as ?code=
        $code = $this->getRequest()->getQuery('code');


        // use the code to retrieve an access token from instagram, this is part of standard OAuth handshake.
        // you should store this token in a database so that future transactions
        // that you want to make on behalf of the user you can just use this token.
        // the code can be discarded - it's one time use
        $token = $this->auth->getAccessToken($code);

        // now that we have a token, setup the SDK with the client ID and the access token
        $instagram = new Instagram();
        $instagram->setClientID('a81612d0ffa04f9a99e9e5227283624d');
        $instagram->setAccessToken($token);

        // now use the SDK to get the current user (based on that token)
        $user = $instagram->getCurrentUser();


        // and through that user, grab their media
        $media = $user->getMedia();



        // the SDK returns all the user's media in a collection for us
        foreach ($media->getData() as $picture) {

            $data[20] = $picture->images->standard_resolution->url;

            foreach ($data as $insert) {

                $pictureTable = new PictureTable('comp2920', 'root', 'password');

                $pictureTable
                    ->insertInstagram(['pictures_instagram'=>$insert]);

            }

        }



        echo "done";
        
    }



}
