<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class StatusVerificationController extends Controller
{
    /**
     * Display the status verification prompt.
     */
    public function __invoke(Request $request): RedirectResponse|View
    {
        return $request->user()->hasVerifiedEmail() && $request->user()->alta == 1
                    ? redirect()->intended(RouteServiceProvider::HOME)
                    : view('auth.verify-status');
    }
}
