<?php

namespace App\Controller;

use App\Repository\WidgetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestController extends AbstractController
{
    /**
     * @Route("/orm", name="test")
     */
    public function index(WidgetRepository $widgetRepository)
    {
        $data = [];

        $data = $widgetRepository->createQueryBuilder('w')
                    ->join('w.roleWidgets', 'role_widgets')
                    ->join('role_widgets.accountRole', 'account_role')
                    ->andWhere('account_role.account_id = :account_id')
                    ->setParameter('account_id', 2)
                    ->getQuery()->getArrayResult();

        return $this->json([
           'items' => $data,
        ]);
    }
}
