<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class PostCommentsSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\PostComment';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = null;

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = null;

    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->ckedit('body');
        $schema->relates('post');
        $schema->timestamps();
    }

    protected function layout($l)
    {
        $l->row([ 'post', 'updated_at' ]);
        $l->row([ 'body' ]);
//        $l->fieldset('Credentials', [ 'email', 'password' ]);

    }
    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('body');
        $schema->col('updated_at')->reversed();
    }

    /**
     * Define validation rules.
     *
     * @param \Kalnoy\Cruddy\Service\Validation\FluentValidator $v
     */
    public function rules($v)
    {
        $v->always([

        ]);
    }
}