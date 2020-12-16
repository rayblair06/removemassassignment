<?php

namespace Rayblair\RemoveMassAssignment;

use Illuminate\Database\Eloquent\Model;

class RemoveMassAssignmentModel extends Model
{
    /**
     * Remove Mass Assignment Protection
     * NOTE: Filter Requests in Controllers
     *
     * @var array
     */
    protected $guarded = [];
}
