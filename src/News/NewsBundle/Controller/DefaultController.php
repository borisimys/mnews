<?php

    namespace News\NewsBundle\Controller;

    use Symfony\Bundle\FrameworkBundle\Controller\Controller;
    use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
    use News\NewsBundle\Entity\News;
    use Symfony\Component\HttpFoundation\Response;

    class DefaultController extends Controller
    {
        /**
         * @Route("/", name="/")
         */
        public function indexAction()
        {
           return $this->render('NewsNewsBundle:Default:index.html.twig');

        }
        /**
        * @Route("/news", name="news")
         */
        public function createAction()
        {
            $news = new News();
            $news->setSubNews('SUBTITLE of DefaultController');
            $news->setTextNews('TEXTNEWS of DefaultController');

            $em = $this->getDoctrine()->getManager();
            //save the news (not in db)
           // $em->persist($news);

            //the INSERT query
           // $em->flush();

            return new Response('Saved new news with id'.$news->getId());
        }
    }
