<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\RegisterMail;
use App\Mail\ForgotPasswordMail;
use App\Mail\StdAppAcceptRejectMail;
use App\Mail\StdStripeMail;
use App\Models\User;

class EmailController extends Controller
{
    public $adminmail = 'admin@mail.com';

        public function GA_VerifyEmail($name, $email, $url)
    {
        $fields = array(
            'fields' => array(
                "Name" => $name,
                "Email" => $email,
                "UserIdUrl" => $url,
                "EmailSubject" => 'Verify Your Email',
            )
        );
        
        header('Content-Type: application/json');
        $ch = curl_init('https://prod-231.westeurope.logic.azure.com:443/workflows/8677569302c845ff807de46a10f4cc68/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=VEsHM-sUI82mUTMaWV3HajA8m0fbo3H6EvMw0v2_1iA'); // Initialise cURL
        $post = json_encode($fields); // Encode the data array into a JSON string

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1); // Specify th+-+quest method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects

        $result = curl_exec($ch); // Execute the cURL statement
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE); // to get http code
        curl_close($ch); // Close the cURL connection

        if ($http_status == 200) {
            return true;

        }
        return false;
    }

 public function GA_ForgotPassword($email, $url)
    {
        $fields = array(
            'fields' => array(
                "UserEmail" => $email,
                "ForgotUrl" => $url,
                "EmailSubject" => 'Please! Verify your email to reset your password',
            )
        );
        header('Content-Type: application/json');
        $ch = curl_init('https://prod-219.westeurope.logic.azure.com:443/workflows/1337445f466b4a2ba18a18704581cde3/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=pCdHpNi9JgbIO3t0aZaiMbQyOauHtxQ2yJ5Y5MTrN9A'); // Initialise cURL
        $post = json_encode($fields); // Encode the data array into a JSON string

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1); // Specify th+-+quest method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects

        $result = curl_exec($ch); // Execute the cURL statement
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE); // to get http code
        curl_close($ch); // Close the cURL connection
        if ($http_status == 200) {
            return true;
        }
        return false;
    }


    public function GA_StdAppAccept_Reject($username,$email, $status)
    {
        $user_name = $username;
        $user_email = $email;

        $fields = array(
            'fields' => array(
                "AdminEmail" => env('ADMIN_EMAIL'),
                "UserName" => $user_name,
                "UserEmail" => $user_email,
                "StdAppStatus" => $status,
                "EmailSubject" => 'Student Application Status',
            )
        );
        header('Content-Type: application/json');
        $ch = curl_init('https://prod-231.westeurope.logic.azure.com:443/workflows/a5fb633f15e54833b02643043d9c0aed/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=PJaQGv5Yqp3SAOzV-0Boq9Wj6egZ9cCgY5IcGi3nqyk'); // Initialise cURL
        $post = json_encode($fields); // Encode the data array into a JSON string

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1); // Specify th+-+quest method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects

        $result = curl_exec($ch); // Execute the cURL statement
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE); // to get http code
        curl_close($ch); // Close the cURL connection
        if ($http_status == 200) {
            return true;
        }
        return false;
    }
    
        public function GA_StdAppStripe($user_name,$user_email,$amount,$url)
    {
        $fields = array(
            'fields' => array(
                "UserName" => $user_name,
                "UserEmail" => $user_email,
                "PayAmount" => $amount,
                "PayNowUrl" => $url,
                "EmailSubject" => 'Student Application Payment',
            )
        );
        header('Content-Type: application/json');
        $ch = curl_init('https://prod-234.westeurope.logic.azure.com:443/workflows/3302d315fce248c7a820a16df126b03a/triggers/manual/paths/invoke?api-version=2016-06-01&sp=%2Ftriggers%2Fmanual%2Frun&sv=1.0&sig=i7AnxGuxvM5ck8LdNnezlysUrm3-kS_8LWlPS3V543k'); // Initialise cURL
        $post = json_encode($fields); // Encode the data array into a JSON string

        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json')); // Inject the token into the header
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POST, 1); // Specify th+-+quest method as POST
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post); // Set the posted fields
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); // This will follow any redirects

        $result = curl_exec($ch); // Execute the cURL statement
        $http_status = curl_getinfo($ch, CURLINFO_HTTP_CODE); // to get http code
        curl_close($ch); // Close the cURL connection
        if ($http_status == 200) {
            return true;
        }
        return false;
    }

}
