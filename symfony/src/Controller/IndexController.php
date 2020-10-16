<?php
//emplacement du controller
namespace App\Controller;
//utilise le paquet de httpFoundation
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Twig\Environment;
use Symfony\Component\Serializer\SerializerInterface;

class IndexController extends AbstractController
{
    //précise que twig et une variable d'environnement
    /**
     * @var Environment
     */

    //propriété privé twig
    private $twig;

    //Constructeur avec paramètre un objet twig
    public function __construct(Environment $twig)
    {
        //initialisation de l'objet
        $this->twig = $twig;
    }

    public function add(Request $request): JsonResponse
    {
        $req = json_decode($request->getContent(), true);
        $data = $req["data"];
        $firstName = $data['firstName'];
        $lastName = $data['lastName'];
        $email = $data['email'];
        $user = $data['user'];
        $password = $data['password'];
        $phone = $data['phone'];
        if (empty($firstName) || empty($lastName) || empty($email) || empty($user) || empty($password) || empty($phone)) {
            throw new NotFoundHttpException('Expecting mandatory parameters!');
        }

        $this->insert($firstName, $lastName, $email, $user, $password, $phone);
        return new JsonResponse(['status' => 'working'], Response::HTTP_CREATED);
    }

    public function insert($firstName, $lastName, $email, $user, $password, $phone)
    {
        $property = new User();

        $property
            ->setNom($firstName)
            ->setPrenom($lastName)
            ->setEmail($email)
            ->setUser($user)
            ->setPassword($password)
            ->setPhone($phone);
        $em = $this->getDoctrine()->getManager();
        $em->persist($property);
        $em->flush();
    }

    public function readUser(Request $request, SerializerInterface $serializer): JsonResponse
    {
            $user = $this->getDoctrine()
                ->getRepository('App:User')
                ->findAll();
            $data = $serializer->serialize($user, 'json');
            return new JsonResponse($data, 200, [], true);

    }
/*
    public function loginUser(Request $request): JsonResponse
    {
        $req = json_decode($request->getContent(), true);
        $data = $req["data"];
        $user = $data['user'];
        $password = $data['password'];

        $user = $this->getDoctrine()
            ->getRepository('App:User')
            ->findAll();
    }*/


    //création d'une public adresse avec une réponse
    public function index(): Response
    {

        //return new Response('salut');
        //retourne l'objet twig avec une méthode render qui retourne la page na rendre dans le templates
        return new Response($this->twig->render('pages/home.html.twig'));
    }
}