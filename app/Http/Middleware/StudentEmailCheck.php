<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
class StudentEmailCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next): Response
    {
        $email = $request->input('email'); // Replace this with the appropriate way to get the email from the request
    
        if (str_contains($email, '@student.ciputra.ac.id')) {
            return $next($request);
        } else {
            return redirect()->back()->with('error', 'Only email addresses containing @student.ciputra.ac.id are allowed.');
        }
    }
}