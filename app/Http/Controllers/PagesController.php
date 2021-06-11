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
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Coleman Camping México']);

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

    public function accesorios()
    {
        SEOMeta::setTitle('Accesorios Coleman Camping');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Coleman Camping Accesorios','Accesorios Coleman']);
        return view('accesorios');
    }

    public function accesorios2()
    {
        SEOMeta::setTitle('Accesorios Coleman Camping');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Coleman Camping Accesorios','Accesorios Coleman']);
        return view('accesorios2');
    }

    public function bolsasDormir()
    {
        SEOMeta::setTitle('Bolsas de dormir Coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Bolsas de dormir Coleman','Bolsas para dormir coleman mexico']);
        return view('bolsasdormir');
    }

    public function estufas()
    {
        SEOMeta::setTitle('Estufas Coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Estufas Coleman precio','Estufas Coleman CDMX']);
        return view('estufas');
    }

    public function mesaCamastro()
    {
        SEOMeta::setTitle('Mesa y Camastro');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Cama coleman','Camastro coleman','Cama y camastro coleman']);
        return view('mesacamastro');
    }

    public function linternas()
    {
        SEOMeta::setTitle('Linternas coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Linternas camping','Linternas para campamento','Linternas marca coleman']);
        return view('linternas');
    }

    public function sillas()
    {
        SEOMeta::setTitle('Sillas coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Linternas camping','Linternas para campamento','Linternas marca coleman']);
        return view('sillas');
    }

    public function hieleras()
    {
        SEOMeta::setTitle('Hieleras coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Hieleras Coleman','Precio Hieleras coleman','Hieleras en México']);
        return view('hieleras');
    }

    public function hieleras2()
    {
        SEOMeta::setTitle('Hieleras coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Hieleras Coleman','Precio Hieleras coleman','Hieleras en México']);
        return view('hieleras2');
    }
    public function hieleras3()
    {
        SEOMeta::setTitle('Hieleras coleman');
        SEOMeta::setDescription('Distribuidor de productos coleman en México.');
        SEOMeta::setCanonical('https://www.colemanmx.com.mx/');
        SEOMeta::setKeywords(['ColemanMX','Coleman México','Distribuidor productos coleman México','Hieleras Coleman','Precio Hieleras coleman','Hieleras en México']);
        return view('hieleras3');
    }
}
