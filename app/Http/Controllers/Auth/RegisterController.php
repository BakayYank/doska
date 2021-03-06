<?php

namespace App\Http\Controllers\Auth;

use App\Http\Requests\Auth\RegisterRequest;
use App\Entity\User\User;
use App\Http\Controllers\Controller;
use App\UseCases\Auth\RegisterService;

class RegisterController extends Controller
{
    private $service;

    public function __construct(RegisterService $service)
    {
        $this->middleware('guest');
        $this->service = $service;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(RegisterRequest $request)
    {
        $this->service->register($request);

        return redirect()->route('login')
            ->with('success', 'Отлично проверьте вашу почту и перейдите по ссылке для активации аккаунда.');
    }

    public function verify($token)
    {
        if (!$user = User::where('verify_token', $token)->first()) {
            return redirect()->route('login')
                ->with('error', 'Не провельная ссылка.');
        }

        try {
            $this->service->verify($user->id);
            return redirect()->route('login')->with('success', 'Ваша почта потверждена вы можете войти');
        } catch (\DomainException $e) {
            return redirect()->route('login')->with('error', $e->getMessage());
        }
    }
}
