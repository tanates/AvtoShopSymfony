<?php

namespace App\Controller;
use App\Entity\Avto;
use App\Form\CRUDFormType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Doctrine\Persistence\ManagerRegistry;

class CRUDController extends AbstractController
{
   
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

        
      
      #[ Route(path:"/avto/add"  ,  name:"add_avto")]
     
     public function addProduct(Request $request): Response 
     {
        $new_avto = new Avto();
        $form = $this->createForm(CRUDFormType::class, $new_avto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $new_avto = $form->getData();
            // Сохраняем новую сущность Avto в базе данных
            $this->entityManager->persist($new_avto);
            $this->entityManager->flush();
            $this->addFlash('success', 'Товар успешно добавлен!');
            // Перенаправляем пользователя на другую страницу (например, на страницу списка автомобилей)
        }
       
        return $this->render('crud/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    #[Route(path:"/avto/delete/{id}", name:"avto_delete")]
    public function deleteProduct(ManagerRegistry $doctrine,$id): Response
    {
        $entityManager = $doctrine->getManager();
        $product = $entityManager->getRepository(Avto::class)->find($id);

        if (!$product) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $entityManager->remove($product);
        $entityManager->flush();

        $this->addFlash('success', 'Товар успешно удален!');
        
        return $this->redirectToRoute('indexApp');

    }
}