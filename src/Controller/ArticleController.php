<?php
/**
 * Created by PhpStorm.
 * User: bob
 * Date: 16/01/2018
 * Time: 18:48
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage()
    {
        return $this->render('article/homepage.twig');
    }

    /**
     * @Route("/news/{slug}", name="article_show")
     */
    public function show($slug)
    {
        $comments = [
            'Bacon ipsum dolor amet filet mignon picanha kielbasa jowl hamburger shankle biltong chicken turkey pastrami cupim pork chop. Chicken andouille prosciutto capicola picanha, brisket t-bone. Tri-tip pig pork chop short ribs frankfurter pork ham. Landjaeger meatball meatloaf, kielbasa strip steak leberkas picanha swine chicken pancetta pork loin hamburger pork.',
            'Kielbasa pork belly meatball cupim burgdoggen chuck turkey buffalo ground round leberkas cow shank short loin bacon alcatra. Leberkas short loin boudin swine, ham hock bresaola turducken tail pastrami picanha pancetta andouille rump landjaeger bacon. Pastrami swine rump meatball filet mignon turkey alcatra. Picanha filet mignon ground round tongue ham hock ball tip tri-tip, prosciutto leberkas kielbasa short loin short ribs drumstick. Flank pig kielbasa short loin jerky ham hock turducken prosciutto t-bone salami pork jowl.',
            'Pastrami short loin pork chop, chicken kielbasa swine turducken jerky short ribs beef. Short ribs alcatra shoulder, flank pork chop shankle t-bone. Tail rump pork chop boudin pig, chicken porchetta. Shank doner biltong, capicola brisket sausage meatloaf beef ribs kevin beef rump ribeye t-bone. Shoulder cupim meatloaf, beef kevin frankfurter picanha bacon. Frankfurter bresaola chuck kevin buffalo strip steak pork loin beef ribs prosciutto picanha shankle. Drumstick prosciutto pancetta beef ribs..',
        ];

        return $this->render('article/show.twig', [
            'title' => ucwords(str_replace('-', ' ', $slug)),
            'comments' => $comments,
            'slug' => $slug
        ]);
    }

    /**
     * @Route("/news/{slug}/heart", name="article_toggle_heart", methods={"POST"})
     */
    public function toggleArticleHeart($slug)
    {
        // TODO actually "do"

        return new JsonResponse(['hearts' => rand(5, 100)]);
    }

}