<?php

namespace App\Http\Controllers;

use Mail;
use Request;
use App\Http\Requests\MailContact;

class PageController extends Controller {
	private $services;
	
	public function __construct()
    {
        $this->services = ['Kitchens', 'Additions', 'Baths', 'Basement Remodeling', 'Decks'];
    }
	
    public function index() {
		$data = [
			'title' => 'Home',
			'services' => $this->services
		];

		return view('pages.home', $data);
	}
	
	public function about() {
		$data = [
			'title' => 'About'
		];

		return view('pages.about', $data);
	}
	
	public function contact() {
		$data = [
			'title' => 'Contact Us'
		];

		return view('pages.contact', $data);
	}
	
	public function gallery($interest = "kitchens") {
		$data = [
			'title' => 'Gallery',
			'services' => $this->services,
			'interest' => $interest
		];

		return view('pages.gallery', $data);
	}
	
	public function services($interest = null) {
		$data = [
			'title' => 'Services',
			'services' => $this->services,
			'interest' => $interest
		];

		return view('pages.services', $data);
	}
}
