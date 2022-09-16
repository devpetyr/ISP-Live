<?php

namespace App\Http\Middleware;

use App\Models\Saf\SafStudentBasicInformationModel;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudentApplicationApproved
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $application = SafStudentBasicInformationModel::where('user_id', Auth::user()->id)->first();
        if (Auth::user()->application_submitted === 1) {
            if ($application) {
                if ($application->application_status === 1) {
//                     TODO
                    return redirect()->route('web_under_construction')->with('failed', 'Dashboard under construction please wait for a while');
//                    return $next($request);
                }
                return redirect()->route('web_home')->with('failed', 'Your application submitted , please wait for admin approval');
            }
        }
        return redirect()->route('web_saf')->with('warning', 'Please submit application.');


    }
}
