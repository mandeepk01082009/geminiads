<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactModel;
use App\Models\Contact; use Mail; 
use PHPMailer\PHPMailer\PHPMailer;  
use PHPMailer\PHPMailer\Exception;

class SaveController extends Controller
{
    public function index(){      
        return view('contact-us');   
    }

    public function sendEmail(Request $request) { 

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'phone' => 'required',
            'message' => 'required'
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone = $request->phone;
        $contact->message = $request->message;

        $contact->save();

        \Mail::send('contact_email',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'phone_number' => $request->get('phone'),
            'user_message' => $request->get('message'),
        ), function($message) use ($request)
          {
             $message->from($request->email);
             $message->to('geminiadvt@gmail.com');  
          });
        
        return back()->with('success', 'Thank you for contact us!');

    }

    public function view()
    {
        $contact = Contact::all();
        return view('web.admin2.contact_table',compact('contact'));
        
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect('/contact'); 

    }

    // public function store(Request $request){
    //     require base_path("vendor/autoload.php");  
    //     $mail = new PHPMailer(true); 

// // SMTP configurations 
//          $mail->SMTPDebug = 0;  
//          $mail->isSMTP();      
//          $mail->Host        = 'smtp.gmail.com';    
//          $mail->SMTPAuth = true; 
//          $mail->Username = 'work@dukeinfosys.com';                   
//          $mail->Password = 'India@123###';     
//          $mail->SMTPSecure = 'tls'; 
//          $mail->Port        = 587;   
         
//          // Sender info  
//          $mail->setFrom('work@dukeinfosys.com', 'Suman'); 
         
//          // Add a recipient  
//          $mail->addAddress('work@dukeinfosys.com');    
         
//          // Email subject  
//          $mail->Subject = 'Send Email via SMTP in Laravel';  
         
//          // Set email format to HTML  
//          $mail->isHTML(true);  
         
//          $mailContent = "Name - $request->con_name <br>
//           Email - $request->con_email <br>
//           Phone - $request->con_phone <br>
//           Subject - $request->con_subject <br>        
//           ";
      
//          $mail->Body = $mailContent; 
//          // dd($mail);
//          // Send email  
//          if(!$mail->send()){  
//              echo 'Message could not be sent. Mailer Error: '.$mail->ErrorInfo;  
//          }else{  
//              echo 'Message has been sent.';  
//          }
//         //  $data = SumanModel::get();
//         //  return view('display',compact('data'));
//     }
}
