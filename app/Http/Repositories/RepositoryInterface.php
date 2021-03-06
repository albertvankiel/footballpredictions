<?php

use Illuminate\Database\Eloquent\Model;

interface RepositoryInterface
{
    /**
     * Returns instance of model.
     *
     * @param int $id ID of model.
     *
     * @return Model Instance of model.
     */
    public function show(int $id): Model;

    /**
     * Create new record.
     *
     * @param array $data Model data.
     *
     * @return Model The new record.
     */
    public function create(array $data): Model;

    /**
     * Update a model.
     *
     * @param array $data Model data.
     * @param int $id     ID of model.
     *
     * @return Model The updated record.
     */
    public function update(array $data, int $id): Model;

    /**
     * Delete a model.
     *
     * @param int $id ID of model.
     *
     * @return Model The deleted record
     */
    public function delete(int $id): Model;

}
