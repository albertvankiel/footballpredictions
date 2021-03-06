<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use UserRepository;

class UserController extends Controller
{
    /**
     * @var UserRepository The users repository.
     */
    protected UserRepository $userRepository;

    /**
     * UserController constructor.
     *
     * @param UserRepository $userRepository The users repository.
     */
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * Register user.
     *
     * @param UserRequest $request User requested.
     */
    public function register(UserRequest $request) {
        $this->userRepository->create($request->validated());
    }
}
