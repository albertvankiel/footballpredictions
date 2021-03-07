<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Repositories\UserRepository;

class UserController extends Controller
{
    /**
     * @var \App\Http\Repositories\UserRepository The users repository.
     */
    protected $userRepository;

    /**
     * UserController constructor.
     *
     * @param \App\Http\Repositories\UserRepository $userRepository The users repository.
     */
    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    /**
     * Register user.
     *
     * @param \App\Http\Repositories\UserRepository $request User requested.
     */
    public function register(UserRequest $request) {
        $this->userRepository->create($request->validated());
    }
}
