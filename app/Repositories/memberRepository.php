<?php

namespace App\Repositories;

use App\Models\member;
use App\Repositories\BaseRepository;

/**
 * Class memberRepository
 * @package App\Repositories
 * @version February 19, 2024, 3:59 pm UTC
*/

class memberRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'firstname',
        'surname',
        'membertype',
        'dateofbirth'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return member::class;
    }
}
