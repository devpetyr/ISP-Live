<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use App\Mail\StdAppApprovedMail;
use App\Mail\StdStripeMail;
use App\Models\User;

class EmailController extends Controller
{
    public $adminmail = 'admin@mail.com';

    public function verifyEmail($user_id){
        $user = User::find($user_id);

        if($user){

            \Mail::to($user->email)->send(new RegisterMail($user));
        }else{

            return back()->with('User Not Found');
        }
    }
    public function forgotpassword($details)
    {
        if ($details) {
            \Mail::to($details->email)->send(new ForgotPasswordMail($details));
            return true;
        }
    }
    public function StdAppApproved($details)
    {
        if ($details) {
            \Mail::to($details->email)->send(new StdAppApprovedMail($details));
            \Mail::to('admin@mail.com')->send(new StdAppApprovedMail($details));
            return true;
        }
    }
    public function StdAppStripe($details,$amount)
    {
        $details['amount']=$amount;
        if ($details) {
            \Mail::to($details->email)->send(new StdStripeMail($details));
            return true;
        }
    }
}
