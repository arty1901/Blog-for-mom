<?php

namespace App\Http\Controllers;

use App\Mail\ContactMe;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller{

    public function getIndex(){
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->with('posts', $posts);
    }

    public function getAbout(){
        $first = 'Arty';
        $last = 'Ch';

        $full = $first.' '.$last;
        $data = [];
        $data['email'] = 'arty1091';
        $data['fullname'] = $full;

        return view('pages.about')->withData($data);
    }

    public function getContact(){
        return view('pages.contact');
    }

    public  function  postContact(Request $request){
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'min:3',
            'message' => 'min:10'
        ]);

        $data = array(
            'email' => $request->email,
            'subject' => $request->subject,
            'bodyMessage' => $request->message
        );

//        Mail::send('emails.contact', $data, function ($message) use ($data) {
//            $message -> to('arty1901@gmail.com');
//            $message -> subject($data['subject']);
//        });

        Mail::to('arty1901@gmail.com')->send(new ContactMe($data));

        Session::flash('success', 'Your Email was Sent');

        return redirect('/');
    }

    public function getUsefulLinks() {
        return view('pages.usefulLinks');
    }
}