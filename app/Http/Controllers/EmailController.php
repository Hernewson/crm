<?php

namespace App\Http\Controllers;

use App\Email;
use App\Enquiry;
use Mail;
use App\Mail\SendMailable;
use App\Student;
use App\User;
use App\Teacher;
use Illuminate\Http\Request;
use DOMDocument;

class EmailController extends Controller
{
    public function addEmailTemplate(Request $request){
        if(\Gate::denies('admin_staff')){
            abort(403, 'Access Denied');
        }
        if($request->isMethod('post')){
            $data=$request->all();
            $emailtemplate= new Email;
            $emailtemplate->name=$data['name'];

            if($request->hasFile('attachment')){

                if(!empty($data['pastattachment'])){

                    $file_path="/storage/app/";
                    if (file_exists($file_path.$emailtemplate->attachments)){

                        unlink($file_path.$data['pastattachment']);


                    }
                }

                $path = $request->file('attachment')->store('public/uploads/emailattachments');
                 $emailtemplate->attachments=$path;

            }
           

//         =======================================   Code Below Is Highly Fragile ============================================

            $detail=$request->message;

            $dom = new DOMDocument;

            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');

            foreach($images as $k => $img){

                $data = $img->getAttribute('src');
//                dd($data);

                list($type, $data) = explode(';', $data);

                list(, $data)      = explode(',', $data);

                $data = base64_decode($data);
//                dd($data);

                $image_name= "/uploads/Emails/" . time().$k.'.png';


                $path = 'public' . $image_name;
//                dd($path);


                file_put_contents($path, $data);
                $hostname = getenv('APP_URL');
//                dd($hostname);


                $img->removeAttribute('src');
//                dd($img);

                $img->setAttribute('src',$hostname.'public'. $image_name);

            }

            $detail = $dom->saveHTML();
           $detailhtml=html_entity_decode($detail);
//            dd($detailhtml);


                $emailtemplate->message = $detailhtml;


//         =======================================   Code Above Is Highly Fragile ============================================



            $emailtemplate->save();
            return redirect()->route('viewEmailTemplate')->with('flash_message', 'New Template Has Been Added');

        }

        return view('admin.emailtemplate.add');
    }

    public function viewEmailTemplate()
    {
        if(\Gate::denies('admin_staff')){
            abort(403, 'Access Denied');
        }
        $emailtemplates= Email::latest()->get();

        return view ('admin.emailtemplate.view', compact('emailtemplates'));
    }

    public function editEmailTemplate (Request $request,$id){
        if(\Gate::denies('admin_staff')){
            abort(403, 'Access Denied');
        }
        $emailtemplate= Email::findOrFail($id);
        if($request->isMethod('post')){
            $data = $request->all();
            $emailtemplate->name=$data['name'];

            $detail=$request->message;
//            dd($detail);

            $dom = new DOMDocument;

            $dom->loadHtml($detail, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);

            $images = $dom->getElementsByTagName('img');
//            dd($images);

            foreach($images as $k => $img){

                $data = $img->getAttribute('src');

//                list($type, $data) = explode(';', $data);
//
//                list(, $data)      = explode(',', $data);

//                $data = base64_decode($data);
//                dd($data);

                $image_name= "/uploads/Emails/" . time().$k.'.png';


                $path = 'public' . $image_name;
//                dd($path);


                file_put_contents($path, $data);
                $hostname = getenv('APP_URL');

                $img->removeAttribute('src');
//                dd($img);

                $img->setAttribute('src',$hostname.'public'. $image_name);

            }

            $detail = $dom->saveHTML();
            $detailhtml=html_entity_decode($detail);
//            dd($detailhtml);


            $emailtemplate->message = $detailhtml;


            $emailtemplate->save();
            return redirect()->route('viewEmailTemplate')->with('flash_message', 'Template Has Been Updated');
        }

        return view ('admin.emailtemplate.edit', compact('emailtemplate'));
    }

    // Delete Email Template
    public function deleteEmailTemplate($id){
        if(\Gate::denies('admin')){
            abort(403, 'Access Denied');
        }
        $emailtemplate = Email::findOrFail($id);
        $emailtemplate->delete();


        return redirect()->route('viewEmailTemplate')->with('flash_message', 'Email Template Has Been Deleted');
    }

    public  function s_emailview(){
        $email=Email::latest()->get();

        $student=Student::latest()->get();
        return view('admin.emailtemplate.Student.s_emailview',compact('student','email'));
    }

    public  function t_emailview(){
        $email=Email::latest()->get();

        $teacher=Teacher::latest()->get();
        return view('admin.emailtemplate.Teacher.t_emailview',compact('teacher','email'));
    }

    public  function st_emailview(){
        $email=Email::latest()->get();

        $staff=User::where('role_id','2')->get();

        return view('admin.emailtemplate.Staff.st_emailview',compact('staff','email'));
    }

    public  function sendemail(Request $request){
        if(\Gate::denies('admin_staff')){
            abort(403, 'Access Denied');
        }
//         dd($request);
        $data=$request->all();

        if (empty($data['email'])){
            return redirect()->back()->with('flash_error', 'Please Select Receiver');

        }

        if (empty($data['subject'])){
            return redirect()->back()->with('flash_error', 'Subject Required');

        }


        $email = $data['email'];
        // dd($data);
        foreach ($email as $emails) {
            // dd($emails);
            $name=explode('--',$emails);
            $mailto=$name[0];
            $mailname=$name[1];

            $data['personname']=$mailname;

//            dd($data);

            Mail::to($mailto)->send(new SendMailable($data));
        }

        // Mail::queue('emails.custom', $messageData, function ($message) use ($email){
        //     $message->to($email)->subject('NEW MAIL FROM IMS');
        // });



        return redirect()->back()->with('flash_message', 'Email Sent successfully');
    }



    public  function e_emailview(){
        $email=Email::latest()->get();
        $enquiry=Enquiry::latest()->get();
        return view('admin.emailtemplate.Enquiry.e_emailview',compact('enquiry','email'));
    }



}

