<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;
use Input;
use App\Course;
use App\CourseDetails;
use Session;
use Mail;

class MainController extends Controller {

	/**

	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}
	public function people()
  {
    return view('people');
  }
	public function ideas()
  {
    return view('ideas');
  }
  public function groups()
  {
    return view('groups');
  }
  public function proposals(){
    return view('proposals');
  }
  public function news(){
    return view('news');
  }
  public function iamreal(){
    return view('iamreal');
  }

	public function menuBar(){
    return view('menuBar');
  }
	public function participants(){
    return view('participants');
  }

  public function seatselection()
  {
    return view('seatselection');
  }
	public function rideportfolio()
  {
    return view('rideportfolio');
  }
	public function tracker()
  {
    return view('trackerIOT');
  }
	public function watsonBanking()
  {
    return view('watsonBanking');
  }
	public function seatselection_presentation()
  {
    return view('seatselection_presentation');
  }
	public function OBA_presentation()
	{
		return view('OBA_presentation');
	}
	public function sensortag_presentation()
  {
    return view('sensortag_presentation');
  }

  //send email
  public function sendEmail(){
    $name = Input::get('name');
    $email = Input::get('email');
		$subject = Input::get('subject');
    $body = Input::get('body');
    Mail::send('emails.demo', ['name' => $name, 'email' => $email, 'subject' =>$subject, 'body' => $body], function($message) {


				$subject = Input::get('subject');
				$message->to('mehranna@ca.ibm.com', 'Mehran Najafi')->subject('IBM Digital Innovation Lab'.$subject);
				$message->to('subashan@ca.ibm.com', 'Subashan M')->subject('IBM Digital Innovation Lab'.$subject);
				$message->bcc('achoi@ca.ibm.com', 'Andrew Choi')->subject('IBM Digital Innovation Lab: '.$subject);
    });


		  return redirect('/')->with('message', 'Successful: An email has been sent!');
  }

  //download files
  public function downloadSeatSelectionAndroidAPK()
	{
     $file = public_path('files/BlueAirline.apk');
     return Response::download($file);
  }
  //download files
  public function downloadSeatSelectionVRAPK()
	{
     $file = public_path('files/SeatSelection_final.apk');
     return Response::download($file);
  }

	public function downloadPortfolioAndroidAPK()
	{
     $file = public_path('files/stock_app.apk');
     return Response::download($file);
  }
	public function downloadPortfolioVRAPK()
	{
     $file = public_path('files/RollercoasterVR_final.apk');
     return Response::download($file);
  }

}
