<?php

namespace App\Http\Controllers;

use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\FeedbackMail;



class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    /*
    public function download();
    {
		
		request()->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('image')) {
           $destinationPath = 'public/image/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
           $insert['image'] = "$profileImage";
        }
        $check = Image::insertGetId($insert);
		
		
	}*/
	
	public function saveImage(Request $request)
{
    $image = Image::make($request->get('imgBase64'));
    $image->save('public/bar.jpg');
}
    
    
 
	public function sendFeedback()
	{
        
	   $comment = 'Mosaicos y Mas S.A.';
	   $toEmail = "javalle.gutierrez@gmail.com";
	   Mail::to($toEmail)->send(new FeedbackMail($comment));
	   
	   
	   return view('home');
	   
	   //return 'Un correo ha sido enviado a: '. $toEmail;
	}
}
