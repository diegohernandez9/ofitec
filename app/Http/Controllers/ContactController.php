<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("pages.contact");
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email:rfc,dns|max:100',
            'phone' => 'required|regex:/^\+569\d{8}$/',
            'subject' => 'required|string|max:200',
            'message' => 'required|string|max:1000',
        ]);
        
        $data['name'] = strip_tags($data['name']);
        $data['subject'] = strip_tags($data['subject']);
        $data['message'] = strip_tags($data['message']);

        try {

            Mail::send('email.contact', ['data' => $data], function ($message) use ($data) {
                $message->from(config('mail.from.address'), config('mail.from.name'))
                        ->to('destinatario@correo.cl')
                        ->subject($data['subject']);
            });

        } catch (\Throwable $e) {
            return back()->withErrors(['form' => 'Hubo un error al enviar el mensaje. Intenta nuevamente.'])->withInput();
        }
        
        return back()->with('success', 'Mensaje enviado correctamente.');
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
