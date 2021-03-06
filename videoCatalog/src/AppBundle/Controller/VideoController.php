<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 15.05.18
 * Time: 20:47
 */

namespace AppBundle\Controller;

//require '../../../vendor/autoload.php';
use AppBundle\Entity\CatalogTab;
use Madcoda\Youtube\Youtube;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\FrameworkBundle\Routing;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;


class VideoController extends Controller
{


    public function videoAction($videoID)
    {

        $youtube = new Youtube(array('key' => 'AIzaSyAkfKQLoHZHpfhu20alvHt0gwkJ4FPNbtg'));
        $video = $youtube->getVideoInfo($videoID);

        $response = array(
            'full' => $video
        );

        return $response;

    }




    public function ListAction($listID)
    {

        $youtube = new Youtube(array('key' => 'AIzaSyAkfKQLoHZHpfhu20alvHt0gwkJ4FPNbtg'));
        $channelById = $youtube->getPlaylistItemsByPlaylistId($listID);
        $video = array();

        foreach ($channelById as $value) {

            $curVideo = $value->snippet->resourceId->videoId;
            $iterElement = VideoController::videoAction($curVideo);
            array_push($video, $iterElement['full']);

        }

        return $video;
    }



    /**
     * @Rest\Get( "/start")
     * @Rest\Post( "/start")
     *
     */
    public function searchAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('search', TextType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $youtube = new Youtube(array('key' => 'AIzaSyAkfKQLoHZHpfhu20alvHt0gwkJ4FPNbtg'));
            $requestedVideo = $data['search'];
            $videoList = $youtube->searchVideos($requestedVideo);
            $video = array();

            foreach ($videoList as $value) {

                $curVideo = $value->id->videoId;
                $iterElement = VideoController::videoAction($curVideo);
                array_push($video, $iterElement['full']);


//            /**
//             * @var $paginator \Knp\Component\Pager\Paginator
//             */
//            $paginator  = $this->get('knp_paginator');
//            $result = $pagination = $paginator->paginate(
//                $video ,
//
//                $request->query->getInt('page', 1)/*page n'full' => $resultumber*/,
//                15/*limit per page*/
//            );
//

            return $this->render('catalog/catalog.html.twig', array(

                'full' => $video
//                'full' => $result
            ));


        }

        $names = $this->getDoctrine()->getRepository("AppBundle:CatalogTab")->findAll();
        $response = array();
        foreach ($names as $item){
            $name = $item->getListName();
            array_push($response,$name);
        }



        return $this->render('catalog/search.html.twig', array(
            'form' => $form->createView(),
            'names' => $response,
        ));

    }



    /**
     * @Route("/chose")
     */
    public function temp(){
        return $this->render('catalog/basicLanguages.html.twig');
    }


    /**
     * @Rest\Post("/video")
     * @Rest\Get("/video")
     */
    public function postAction(Request $request)
    {

        $form = $this->createFormBuilder()
            ->add('name', TextType::class)
            ->add('hash', TextType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $catalog = new CatalogTab();
            $data = $form->getData();
            $hash = $data['hash'];
            $name = $data['name'];
            if (empty($name) || empty($hash)) {
                return new View("NULL VALUES ARE NOT ALLOWED", Response::HTTP_NOT_ACCEPTABLE);
            }
            $catalog->setListName($name);
            $catalog->setListHash($hash);
            $em = $this->getDoctrine()->getManager();
            $em->persist($catalog);
            $em->flush();
            return $this->render('catalog/about.html.twig');
        }

        return $this->render('catalog/addVideo.html.twig', array(
            'form' => $form->createView(),
        ));

    }






    /**
     * @Rest\Get("/name/{name}")
     *
     */

    public function videoByNameAction($name, Request $request){


        $list = $this->getDoctrine()->getRepository("AppBundle:CatalogTab")->findOneBy(['listName' => $name]);
        $hash = (string)$list->getListHash();

        $video = VideoController::ListAction($hash)
        ;
        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $pagination = $paginator->paginate(
            $video,
            /* query NOT result */
            $request->query->getInt('page', 1)/*page number*/,
            8/*limit per page*/
        );

        return $this->render('catalog/catalog.html.twig', array(

            'full' => $result
        ));


    }

    /**
     * @Rest\Get("/name")
     */
    public function nameListAction(){
        $names = $this->getDoctrine()->getRepository("AppBundle:CatalogTab")->findAll();
        $response = array();
        foreach ($names as $item){
            $name = $item->getListName();
            array_push($response,$name);
        }

        return $this->render('catalog/namesList.html.twig', array(

            'names' => $response
        ));

    }






    /**
     * @Rest\Get("/autocat")
     *
     */
    public function getAction(Request $request)
    {

        $list = $this->getDoctrine()->getRepository("AppBundle:CatalogTab")->findAll();
//        $hash = $list->getListHash();
        $response = array();
        foreach ($list as $item){
            $hash = $item->getListHash();
            $video = VideoController::ListAction($hash);
            $response = $response + $video;

        }

        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $pagination = $paginator->paginate(
            $response,

            $request->query->getInt('page', 1)/*page number*/,
            8/*limit per page*/
        );

        return $this->render('catalog/catalog.html.twig', array(

            'full' => $result
        ));
}



    /**
     * @Rest\Get("/randomList")
     * @Rest\Post("/randomList")
     *
     */
    public function getRandAction(Request $request)
    {

        $list = $this->getDoctrine()->getRepository("AppBundle:CatalogTab")->findAll();
        $response = array();
        foreach ($list as $item){
            $hash = $item->getListHash();
            $video = VideoController::ListAction($hash);
            $response = $response + $video;

        }
            $numbers = array_rand($response,12);
            $randomList = array();
        foreach ($numbers as $item){

            array_push($randomList, $response[$item]);

        }


        /**
         * @var $paginator \Knp\Component\Pager\Paginator
         */
        $paginator  = $this->get('knp_paginator');
        $result = $pagination = $paginator->paginate(
            $randomList ,

            $request->query->getInt('page', 1)/*page number*/,
            12/*limit per page*/
        );

        return $this->render('catalog/catalog.html.twig', array(

            'full' => $result
        ));
    }


//        return $this->render('catalog/catalog.html.twig', array(
//
//            'full' => $randomList
//        ));
//
//    }



    /**
     * @Rest\Get("/playNow/{videoId}")
     */
    public function showMsg($videoId){

        $youtube = new Youtube(array('key' => 'AIzaSyAkfKQLoHZHpfhu20alvHt0gwkJ4FPNbtg'));
        $video = $youtube->getVideoInfo($videoId);

        return $this->render('catalog/player.html.twig', array(

            'full' => $video
        ));
    }







}





