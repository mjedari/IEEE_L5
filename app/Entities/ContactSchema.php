<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class ContactSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\Contact';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'subject';

    /**
     * The name of the column that will sort data by default.
     *
     * @var string
     */
    protected $defaultOrder = 'created_at';

    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->string('name');
        $schema->string('subject');
        $schema->string('email')->label('Sender Email');
        $schema->string('phone');
        $schema->text('body');
        $schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        //$schema->col('id');
        $schema->col('name');
        $schema->col('subject');
        $schema->col('email');
        $schema->col('phone');
        $schema->col('body');
        $schema->col('created_at')->reversed();
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