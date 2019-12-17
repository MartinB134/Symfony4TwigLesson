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
     static $somevar2 = "Using vars and stuff. NO biggie";
     /*
		return new Response('
		<!DOCTYPE html>
			<html>
			<head>
				<title>test</title>
			</head>
		<body>
			<h1>Variable:</h1> 
			<p><br>'.$somevar.'</p>
		</body>
		</html>');
		*/
	
		return $this->render('articles/index.html.twig', [
			'somevar' => $somevar2, 
		]);

		//$this->returnHeader();
	}

	/**
	 * Testvariable within the route
	 * @Route("/products/productID={test}")
	 */
	public function getProduct ($test) 
	{
		//Testvariable within the function
		$product= '2';
		return $this->render('articles/products.html.twig', [
			'test' => $test,
			'product' => $product
		]);
	}
	/**
	 * Testvariable within the route
	 * @Route("/products/productID={test}")
	 */
	public function getArticleOverview ($test) 
	{
		//Testvariable within the function
		$product= '2';
		return $this->render('articles/products.html.twig', [
			'test' => $test,
			'product' => $product
		]);
	}
}

