<?php

namespace App\Http\Controllers;

use App\Mail\AdminContact;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\View\View;

class ContactController extends Controller
{
    /**
     * @return View
     * show contact form view
     */
    public function index(): View
    {
        return view('contact');
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     * @throws ValidationException
     * Process contact form data store in data base and send admin mail
     */
    public function store(Request $request): RedirectResponse
    {

        $this->validate($request, [
            'name' => 'required',
            'subject' => 'required',
            'message' => 'required'
        ], [
            'name.required' => 'Le nom est obligatioire !',
            'subject.required' => 'Le sujet est obligatioire !',
            'message.required' => 'Le message est obligatioire !'
        ]);

        //Précisez l'adresse mail par défaut de l'administrateur dans le fichier
        // .env end donnant une valeur a la clé ADMIN_DEFAULT_EMAIL

        if (Contact::create($request->all())) {

            Mail::to(env('ADMIN_DEFAULT_EMAIL'))
                ->send(new AdminContact($request->message, $request->subject, $request->name));
        }
        return to_route('success', [], 301);
    }

    /**
     * @return View
     * show success page view
     * @noinspection PhpUnused
     */
    public function showSuccessPage(): View
    {
        return view('success');

    }
}
