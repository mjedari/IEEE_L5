<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class SubscriptionSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\Subscription';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'email';

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
        $schema->string('email');
        $schema->timestamps();
    }

    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('email');
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