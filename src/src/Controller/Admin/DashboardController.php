<?php

namespace App\Controller\Admin;

use App\Entity\Attraction;
use App\Entity\Event;
use App\Entity\Location;
use App\Entity\Messages;
use App\Entity\Room;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        return parent::index();

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('city guid');
    }

    public function configureMenuItems(): iterable
    {

        return [
        MenuItem::linkToDashboard('Dashboard', 'fa fa-home'),


         MenuItem::section('city guid'),
         MenuItem::linkToCrud('Hotel', 'fas fa-list', Hotel::class),
         MenuItem::linkToCrud('Attraction', 'fas fa-list', Attraction::class),
         MenuItem::linkToCrud('Event', 'fas fa-list', Event::class),
         MenuItem::linkToCrud('Location', 'fas fa-list', Location::class),
         MenuItem::linkToCrud('Messages', 'fas fa-list', Messages::class),
         MenuItem::linkToCrud('Room', 'fas fa-list', Room::class),
        ];


    }
}
