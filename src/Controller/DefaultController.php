<?php

namespace App\Controller;

use App\Form\ContactType;
use App\Interface\MailingInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @author Benjamin Manguet <manguetbenj@gmail.com>
 */
#[Route('', name: 'app')]
class DefaultController extends AbstractController
{
    public function __construct(private readonly ?MailingInterface $mailing) { }

    #[Route('')]
    public function indexNoLocale(): Response
    {
        return $this->redirectToRoute('app_index', ['_locale' => 'fr']);
    }

    #[Route('/{_locale}', '_index')]
    public function homepage(): Response
    {
        return $this->render('homepage.html.twig');
    }

    #[Route('/{_locale}/contact', '_contact')]
    public function contact(Request $request): RedirectResponse|Response
    {
        $contact = $this->createForm(ContactType::class, null, [
            'action' => $this->generateUrl('app_contact'),
        ]);

        $contact->handleRequest($request);

        if ($contact->isSubmitted() && $contact->isValid()) {

            $formData = $contact->getData();

            if (empty($formData['email'])) {
                $this->mailing->sendMail($formData);

                $this->addFlash(
                    'success',
                    'Votre message a bien été envoyé, je vous répondrai au plus vite'
                );
            }

            return $this->redirect($request->headers->get('referer'));
        }

        return $this->renderForm('form/form_contact.html.twig', [
            'contact' => $contact
        ]);
    }
}