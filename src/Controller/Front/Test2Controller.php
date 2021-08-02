<?php

namespace App\Controller\Front;

use App\Entity\Category;
use App\Entity\City;
use App\Entity\Order;
use App\Entity\OrderProduct;
use App\Entity\OrderState;
use App\Entity\Payment;
use App\Entity\PaymentMethod;
use App\Entity\Product;
use App\Entity\State;
use App\Entity\SuplierProduct;
use App\Entity\Supplier;
use App\Entity\User;
use App\Repository\CategoryRepository;
use App\Repository\MailRepository;
use App\Repository\NotificationRepository;
use App\Repository\OrderProductRepository;
use App\Repository\OrderRepository;
use App\Repository\ProductRepository;
use App\Repository\ProgressBillingRepository;
use App\Repository\SuplierProductRepository;
use App\Service\ImageProcessor;
use App\Service\MailProcessor;
use App\Service\PathProcessor;
use App\Service\SetTranslation;
use App\Service\StateProcessor;
use Knp\Component\Pager\PaginatorInterface;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\RichText\RichText;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Style\Color;
use PhpOffice\PhpSpreadsheet\Style\Alignment;
use PhpOffice\PhpSpreadsheet\Style\Fill;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Yaml\Yaml;
use Symfony\Contracts\Translation\TranslatorInterface;
use function r\row;

class Test2Controller extends AbstractController
{


}
