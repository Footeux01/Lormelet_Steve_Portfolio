<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailContact;
use App\Experience;
use App\Formation;
use App\Skill;
use App\Projet;
use App\Contact;

class FrontHomeController extends Controller{

    public function index(){
	    return view('accueil');	    
	}

	public function porfolio(){
	    return view('porfolio');	    
	}

	public function skill(){
	    	$skill = Skill::get();
	    return view('skill', compact('skill'));	    
	}

	public function formation(){
	    	$experience = Experience::get();
	    	$formation = Formation::get();
	    return view('formation', compact('experience', 'formation'));	    
	}

	public function projet(){
	    	$projet = Projet::get();
	    return view('projet', compact('projet'));	    
	}
	
	public function contact(){
	    return view('contact');	    
	}

	public function savemessage(Request $request){
		// enregistrement ds base
		Contact::create($request->except('_token'));
		// envoi du mail
		Mail::to('s.lormelet@aformac-vichy.fr')->send(new MailContact($request->except('_token')));
		// redirection
		return redirect('contact')->with('message', 'Votre message a bien été envoyé');
	}

	public function mentions(){
	    return view('mentions');	    
	}

}
