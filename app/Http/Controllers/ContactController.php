<?php

namespace App\Http\Controllers;

use App\Mail\AdminContact;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    //

    public function index()
    {
        return view('contact');
    }

    /**
     * @throws ValidationException
     */
    public function store(Request $request)
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

        //Précisez votre addresse a la place de ici
        if (Contact::create($request->all())) {
            Mail::to('ici')->send(new AdminContact($request->message, $request->subject, $request->name));
        }
        return redirect('/success');
    }

    public function successIndex()
    {
        return view('success');

    }
}
