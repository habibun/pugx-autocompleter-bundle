<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/category")
 */
class CategoryController extends AbstractController
{
    /**
     * @Route("/", name="app_category_search", methods={"GET"})
     */
    public function searchCategory(Request $request): Response
    {
        $q = $request->query->get('term'); // use "term" instead of "q" for jquery-ui
        $results = $this->getDoctrine()->getRepository('App:Category')->findLikeName($q);

        return $this->render('category/search_category.json.twig', ['results' => $results]);
    }

    /**
     * @Route("/{id}", name="app_category_show", methods={"GET"})
     */
    public function getCategory($id = null): Response
    {
        $author = $this->getDoctrine()->getRepository('App:Category')->find($id);

        return $this->json($author->getName());
    }
}
