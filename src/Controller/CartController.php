<?php

namespace App\Controller;

use App\Entity\Avto;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    
    #[Route(path:'/cart/add/{id}',name:'cart_add',methods:'POST')]
    public function add(int $id , Request $request): Response
    {
        $cart = $this->getCart($request);
        if (!isset($cart[$id])) {
            $cart[$id] = 1;
        } else {
            $cart[$id]++;
        }
        $request->getSession()->set('cart', $cart);
        return new JsonResponse(count($cart));
    }

    
    #[Route(path:'/update-quantity', name:'update_quantity', methods:'GET')]
    #[Route(path:'/update-quantity', name:'update_quantity', methods:'GET')]
    public function updateQuantity(Request $request, ManagerRegistry $doct): JsonResponse
    {
        $productId = $request->query->get('productId');
        $quantity = $request->query->get('quantity');
    
        // Получите продукт по ID
        $product = $doct->getRepository(Avto::class)->find($productId);
    
        if (!$product) {
            // Верните ошибку, если продукт не найден
            return new JsonResponse(['error' => 'Product not found'], Response::HTTP_NOT_FOUND);
        }
    
        $cart = $this->getCart($request);
    
        if (!isset($cart[$productId])) {
            $cart[$productId] = $quantity;
        } else {
            $cart[$productId] += $quantity;
        }
    
        $request->getSession()->set('cart', $cart);
    
        $newPrice = $product->getPriceAvto() * $cart[$productId];
    
        return new JsonResponse([
            'quantity' => $cart[$productId],
            'price' => $newPrice
        ]);
    }
 

    private function getCart(Request $request): array
    {
        return $request->getSession()->get('cart', []);
    }
    
        #[Route (path:'/cart', name:'cartApp')]
        public function index(Request $request , ManagerRegistry $doct): Response
        {
            $cart = $this->getCart($request);
            $products = $doct->getRepository(Avto::class)->findBy(['id' => $cart]);
        
            if (!$products) {
                $products = []; // Если продуктов нет, передайте пустой массив
            }
        
            return $this->render('cart/index.html.twig', [
                'products' => $products,
            ]);
        }


      #[Route(path:'/cart/remove/{id}',name:'cart_remove',methods:['POST ','GET'])]
      public function remove(int $id, Request $request): Response
    {
        $cart = $this->getCart($request);
        $index = array_search($id, $cart);
        if ($index !== false) {
            unset($cart[$index]);
            $request->getSession()->set('cart', $cart);
        }
        
        return $this->redirectToRoute('cartApp');
    }

   
}
