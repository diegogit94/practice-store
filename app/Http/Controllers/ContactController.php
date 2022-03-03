<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\Request;
use App\Mail\ContactUsMailable;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /** Shows form to contact the store 
     * 
     * @return [type]
     */
    public function index()
    {
        return view('contact.contact-us');
    }

    /** Sends confirmation email to user
     * 
     * @return [type]
     */
    public function store(ContactRequest $request)
    {
        $mail = new ContactUsMailable($request);
        Mail::to('mr.tests.zero@gmail.com')->send($mail);

        return back()->with('info', 'Email sent ;)');
    }
}
