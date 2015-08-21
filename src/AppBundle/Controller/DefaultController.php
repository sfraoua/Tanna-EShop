<?php

namespace AppBundle\Controller;

use AppBundle\Document\Product;
use AppBundle\Document\ProductVariant;
use AppBundle\Form\Type\ProductType;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Tanna\ProductBundle\Model\ProductInterface;
use Tanna\ProductBundle\Model\ProductVariantInterface;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

        $product = new Product();
        $product->setName('Selim Fraoua');
        $product->setSlug('Selim-Fraoua');

        $productVariant = new ProductVariant();
        $productVariant->setName('Variant 1');

        $product->addVariant($productVariant);

        $em = $this->get('doctrine_mongodb')->getManager();
        $em->persist($product);
        $em->flush();
        return $this->render('default/index.html.twig');


//        $form = $this->createForm(new ProductType());
//
//
//        $form->handleRequest($request);
//        if($form->isValid()){
//        }
//
//        $products = $this->get('doctrine_mongodb')->getRepository('AppBundle:Product')->findAll();
//        dump($products);
    }
}
