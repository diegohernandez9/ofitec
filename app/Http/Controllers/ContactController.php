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
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject' => 'required|string|max:200',
            'message' => 'required|string',
        ]);
    
        Mail::send([], [], function ($message) use ($data) {
            $message->from(config('mail.from.address'), config('mail.from.name'))
                    ->to('destinatario@correo.cl') // puedes poner cualquier correo, solo lo verás en Mailtrap
                    ->subject($data['subject'])
                    ->html(
                        "<h1>Mensaje de contacto</h1>" .
                        "<p><strong>Nombre:</strong> {$data['name']}</p>" .
                        "<p><strong>Correo:</strong> {$data['email']}</p>" .
                        "<p><strong>Teléfono:</strong> {$data['phone']}</p>" .
                        "<p><strong>Mensaje:</strong><br>{$data['message']}</p>"
                    );
        });
    
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
