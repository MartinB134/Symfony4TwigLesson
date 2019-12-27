<?php  

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
//use Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Bundle\TwigBundle\TemplateIterator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ItemController extends AbstractController
{

	/**
	* @Route("/firstitem")
	*/
	public function getArticle() 
	{
	 $somevar = "String";
     $somevar2 = "Using vars and stuff. NO biggie";
     
     return $this->render('articles/index.html.twig', 
     	[
			'somevar' => $somevar2
		]);
	}

	/**
	 * Testvariable within the route
	 * @Route("/products/productID={test}")
	 */
	public function getProduct ($test) 
	{
		//Testvariable within the function
		$product= 'TODO: Get specific id from Database';
		return $this->render('articles/products.html.twig', 
		[
			'test' => $test,
			'product' => $product
		]);
	}
	
	/**
	 * Testvariable within the route
	 * @Route("/products")
	 */
	public function getArticleOverview () 
	{
		//Testvariable within the function
		$products= 'manyProducts/ All ids from Database here';
		return $this->render('articles/index.html.twig', 
		[
			'somevar' => $products
		]);
	}
}

