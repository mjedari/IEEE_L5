<?php

namespace App\Entities;

use Kalnoy\Cruddy\Entity;

class PageSchema extends Entity {

    /**
     * @var string
     */
    protected $model = 'App\Models\Page';

    /**
     * The name of the column that is used to convert a model to a string.
     *
     * @var string
     */
    protected $titleAttribute = 'title';

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
        $schema->relates('user')->required();
        $schema->string('title')->label('Page Name')->required();
        $schema->slug('slug','title')->separator('_');
        $schema->text('summary')->label('Page Description');
        $schema->ckedit('body')->label('Page Content')->required();
        $field = $schema->file('files');
        $field->many();
        $schema->image('images');
        $schema->relates('tags');
        $schema->embed('pageComments');
        $schema->timestamps();
        $schema->compute('url', function($model) {
            return '<a target="_blank" href="/'.$model->slug.'">
            <span class="glyphicon glyphicon-share" aria-hidden="true"></span>
            Click To Open Page</a>';
        })->label('Post url');
        $schema->compute('utitle', function($model) {
            return '<a target="_blank" href="/'.$model->slug.'">
            '.$model->title.'</a>';
        })->label('title');
    }
    protected function layout($l)
    {
//        $l->row([ 'first_name', 'last_name' ]);
//        $l->fieldset('Credentials', [ 'email', 'password' ]);

        $l->tab('page', function($t) {
            $t->row(['user']);
            $t->row(['title']);
            $t->row(['slug','url']);
            $t->row(['summary']);
            $t->row(['body']);
            $t->row(['images', 'files']);
        });
        $l->tab('tags', function($t) {
            $t->row(['tags',2]);
        });
        $l->tab('Comments', function($t) {
            $t->row('pageComments');
        });
    }
    /**
     * Define some columns.
     *
     * @param \Kalnoy\Cruddy\Schema\Columns\InstanceFactory $schema
     */
    public function columns($schema)
    {
        $schema->col('id');
        $schema->col('utitle');
        $schema->col('images')->format('Image' , ['width'=>'100', 'height'=>'50']);
        $schema->compute('uploaded files', function($model){
            return count($model->files);
        });
        $schema->col('created_at')->reversed();
    }

    public function files($repo)
    {
        $repo->uploads('files')->to('upload/files');
        $repo->uploads('images')->to('upload/images');
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