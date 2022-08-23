<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use App\Models\StudentApplicationFormFeePaymentModel;
use App\Models\StudentApplicationFormFeesModel;
use App\Models\User;
use Illuminate\Http\Request;

class WebPaymentController extends Controller
{
    public function stripe_form($userId)
    {
        /** Finding student from user model */
        $user = User::find($userId);

        /** Getting student fees from Student Application Form Fees Model,We will also check student already paid fees or not */
        $user_fees = StudentApplicationFormFeesModel::where('user_id', $userId)->first();

        /** Check if $user_fees variable found */
        if ($user_fees) {

            /** If is_paid equal to 0 means student have to pay his/her fees */
            if ($user_fees->is_paid === 0) {
                /** Declare $price variable to student fees */
                $price = $user_fees->fees;

                /** Declaring Title for invoice page  */
                $invoice_title = "Student Application Payment";

                /** If is_paid equal to 1 means student have to pay his/her fees */
            } else if ($user_fees->is_paid === 1) {
                /** Returning back to isp home page with the following message */
                return redirect()->route('web_home')->with('error', 'You have already paid your fees');
            }
        } else {
            /** Returning back to isp home page */
            return redirect()->route('web_home');
        }
        /** Returning student stripe page for the payment */
        return view('web.isp-payment', compact('user', 'price','invoice_title'));
    }

    public function event_stripe(Request $request, $userId)
    {
        /** Getting student details with the userId */
        $user = User::find($userId);


        /** Getting student fees from Student Application Form Fees Model,We will also check student already paid fees or not */
        $user_fees = StudentApplicationFormFeesModel::where('user_id', $userId)->first();

        /** Check if $user_fees variable found */
        if ($user_fees) {

            /** If is_paid equal to 0 means student have to pay his/her fees */
            if ($user_fees->is_paid === 0) {

                /** Declare $amount variable to student fees , and we will use it to save payment amount*/
                $amount = $user_fees->fees;

                /** If is_paid equal to 1 means student have to pay his/her fees */
            } else if ($user_fees->is_paid === 1) {
                /** Returning back to isp home page with the following message */
                return redirect()->route('web_home')->with('error', 'You have already paid your fees');
            }
            else {
                /** Returning back to isp home page with the following message */
                return redirect()->route('web_home')->with('error', 'please click the link again');
            }

            /** Defining description to stripe */
            $desc = "Isp Student Payment";

            /** Now we are shooting stripe payment function with the following details */
            $response = $this->stripe_payment($user->email, $request->stripeToken, $amount, $desc);

            /** If stripe response succeeded */
            if ($response['status'] == 'succeeded') {

                /** Assigning 1 to $user_fees is_paid column which we are getting above */
                $user_fees->is_paid = 1;
                /** And at last save the $user_fees model , also we will save its id to payment table */
                $user_fees->save();

                /** Now we have to save transaction details */

                /** First of all we are generating random Invoice Number with the following  */
                $inv_no = time() . rand('111111111', '999999999');

                /** Now we are opening student application form fees payment model to save student transaction */
                $std_payment = new StudentApplicationFormFeePaymentModel();

                /** Saving transaction details to following columns */

                /** Invoice Number to invoice_number */
                $std_payment->invoice_number = $inv_no;
                /** Student Id which we get at very first line */
                $std_payment->student_id = $userId;
                /** Student Fee Table Id which we have discuss before */
                $std_payment->std_app_fee_id = $user_fees->id;
                /** Stripe response payment id */
                $std_payment->payment_id = $response['id'];
                /** Stripe response payment url */
                $std_payment->payment_url = $response['receipt_url'];
                /** Payment amount from fees table */
                $std_payment->price = $amount;
                /** Payment status if transaction complete successfully */
                $std_payment->status = 1;
                /** At last we have to save that model */
                $std_payment->save();

                /** After complete successful transaction return back to home with the following message  */
                return redirect()->route('web_home')->with('success', 'Transaction completed successfully');
            } else {
                /** If the stripe transaction not succeeded successfully return back to home with the following message  */
                return back()->with('error', 'Check your inputs and try again');
            }
        }
        /** As we know we have to declare return statement in last */
        return redirect()->route('web_home');
    }

}
