<?php

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Request;

class UserRepository implements RepositoryInterface
{
    /**
     * @var User The user model.
     */
    protected User $user;

    /**
     * UserRepository constructor.
     *
     * @param User $user The user model.
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        return $this->user->create($data);
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
