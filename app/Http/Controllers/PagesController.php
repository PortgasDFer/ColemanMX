<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\JsonLdMulti;
use Artesaos\SEOTools\Facades\SEOTools;
use Illuminate\Support\Facades\Mail;
use App\Mail\FormularioContacto;
use Alert;
use Redirect;

class PagesController extends Controller
{

    public function index()
    {

        SEOMeta::setTitle('Inicio');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Productos Coleman en México']);

        return view('index');
    }

    public function contacto(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|regex:/^[\pL\s\-]+$/u',
            'email' => 'required|email:rfc,dns',
            'message' => 'required|max:200',
            'g-recaptcha-response' => 'required|captcha',
        ]);


        $mensaje = $request->all();
        Mail::to('contacto@arteyculturaenproteccioncivil.com.mx')->send(new FormularioContacto($mensaje));
        alert()->image('Gracias!','Nos pondremos en contacto a la brevedad','assets/img/contacto/logo_contatco.jpg','160','115');
        return Redirect::to('/');   
    }

}
