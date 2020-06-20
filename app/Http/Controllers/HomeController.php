<?php

namespace App\Http\Controllers;

use App\ContactUs;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

    public function terms_and_conditions()
    {
        return view('terms_and_conditions');
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }

    public function cookies_policy()
    {
        return view('cookies-policy');
    }

    public function spielecta()
    {
        return view('spielecta');
    }

    public function connect(Request $request) {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|min:6',
            'text' => 'required',
        ]);
        $data = $request->all();
        $contactUs = new ContactUs;
        $contactUs->name = $data['name'];
        $contactUs->email = $data['email'];
        $contactUs->phone = $data['phone'];
        $contactUs->text = $data['text'];
        $contactUs->save();

        return redirect()->back()->with(['message' => "Thank you for your message, we will be in touch with you"]);
    }
}
