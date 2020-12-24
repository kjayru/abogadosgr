<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

use Illuminate\Support\Facades\Mail;

use App\Mail\Contacts;

class HomeController extends Controller
{
   public function index(){
       return view('home');
   }

   public function nosotros(){
       return view('nosotros');
   }

   public function areas(){
    return view('area');
    }

    public function abogados(){
        return view('abogados');
    }

    public function casos(){
        return view('casos');
    }

    public function blog(){
        return view('blog');
    }
    public function contacto(){
        return view('contacto');
    }
    public function gracias(Request $request){

        //dd($request);
        /*
          "tipo" => "contacto"
      "nombre" => "asdd"
      "asunto" => "demod"
      "email" => "asd@ddd.com"
      "telefono" => "123123123"
         */


        $htmlcode =' <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" class="wrapper-section-one" style=" font-family:family=Bebas+Neue;background: #ffffff;" bgcolor="#ffffff">
        <tr>
           <td>
              <table cellspacing="0" cellpadding="0" border="0" width="100%" >
                 <tr>
                    <td width="24"><img src="images/blank.gif" width="1" height="1" alt=""/></td>
                    <td>
                       <table cellspacing="0" cellpadding="0" border="0" width="100%">
                          <tr>
                             <td height="55"><img src="images/blank.gif" width="1" height="1" alt=""/></td>
                          </tr>
                          <tr>
                             <td class="heading-editable"  style="font-size: 23px; color:#031059; text-transform: uppercase; text-align: center;font-family:family=Bebas+Neue; font-weight: 500; line-height: 1.7;">';

                              $htmlcode.='<h1> DATOS DE FOMULARIO</h1>';



                             $htmlcode.=' </td>
                          </tr>
                          <tr>
                             <td height="25"><img src="images/blank.gif" width="1" height="1" alt=""/></td>
                          </tr>
                          <tr>
                             <td class="editable" style="font-size: 12px; line-height: 2; color:#031059; text-align: LEFT;font-family: ubuntu,Arial,Helvetica,sans-serif;">';

                               $htmlcode.= 'NOMBRES: '.$request->nombre.'<BR>';

                               $htmlcode.= 'ASUNTO: '.$request->asunto.'<BR>';

                               $htmlcode.= 'EMAIL: '.$request->email.'<BR>';
                               $htmlcode.= 'TELEFONO: '.$request->telefono.'<BR>';
                               $htmlcode.= 'MENSAJE: '.$request->mensaje.'<BR>';


                           $htmlcode.='</td>
                          </tr>
                          <tr>
                             <td height="80"><img src="images/blank.gif" width="1" height="1" alt=""/></td>
                          </tr>
                       </table>
                    </td>
                    <td width="24"><img src="images/blank.gif" width="1" height="1" alt=""/></td>
                 </tr>
              </table>
           </td>
        </tr>
     </table>
    ';


$data = ["html"=>$htmlcode];



Mail::to('tania@cobos.com.mx')->send(new Contacts($data));

        return view('gracias');
    }
}
