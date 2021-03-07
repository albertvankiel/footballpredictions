<?php

namespace App\Http\Repositories;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class UserRepository implements RepositoryInterface
{
    /**
     * @var \App\Models\User The user model.
     */
    protected $user;

    /**
     * @var \Illuminate\Support\Facades\Hash The hash.
     */
    protected $hash;

    /**
     * UserRepository constructor.
     *
     * @param \App\Models\User                 $user The user model.
     * @param \Illuminate\Support\Facades\Hash $hash The hash.
     */
    public function __construct(User $user, Hash $hash)
    {
        $this->user = $user;
        $this->hash = $hash;
    }

    /**
     * {@inheritDoc}
     */
    public function show(int $id): Model
    {
        return $this->user->find($id);
    }

    /**
     * {@inheritDoc}
     */
    public function create(array $data): Model
    {
        return $this->user->create(
            $data,
            ['password' => Hash::make($data['password'])]
        );
    }

    /**
     * {@inheritDoc}
     */
    public function update(array $data, int $id): Model
    {
        // TODO: Implement update() method.
    }

    /**
     * {@inheritDoc}
     */
    public function delete(int $id): Model
    {
        // TODO: Implement delete() method.
    }
}
