<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(): View
    {
        return view('admin.login');
    }

    public function auth(Request $request): JsonResponse
    {
        $credentials = $request->only('username', 'password');

        if (!Auth::guard('web')->attempt($credentials)) {
            return response()->json([
                'success' => false,
                'message' => __('Incorrect username or password') . '!',
            ], 401);
        }

        return response()->json([
            'route' => route('dashboard'),
            'success' => true,
            'message' => __('Login successful') . '!',
        ], 200);
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
