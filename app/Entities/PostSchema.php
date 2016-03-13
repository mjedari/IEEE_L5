<?php

namespace App\Entities;

use App\Models\Category;
use App\Models\Post;
use Kalnoy\Cruddy\Entity;
class PostSchema extends Entity {
    protected $result = '';
    /**
     * @var string
     */
    protected $model = 'App\Models\Post';

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
    protected $defaultOrder = null;


    /**
     * Define some fields.
     *
     * @param \Kalnoy\Cruddy\Schema\Fields\InstanceFactory $schema
     */
    public function fields($schema)
    {
        $schema->increments('id');
        $schema->relates('user')->required()->help('فیلدهای ستاره دار الزامی میباشند.')
            ->disable(self::WHEN_EXISTS);
        $schema->string('title')->required();
        $schema->slug('slug','title')->separator('_')->help('جهت ساخت نشانی معتبر بدون وارد کردن متن در این فیلد، روی آیکون لینک کلیک نمایید');
        $schema->relates('category')->required();
        $schema->text('summary');
        $schema->ckedit('body')->label('Main Content')->required();
        $schema->boolean('slider')->label("Slider Show")->help('نشان دادن در اسلایدر');
        $field = $schema->image('images');
        $field->many();
        $field = $schema->file('files');
        $field->many();
        $schema->relates('tags')->isMultiple();
        $schema->embed('postComments');
        $schema->timestamps();

        $schema->compute('utitle', function($model) {
            $categories = new Category();
            $postCatName = $categories->where('id', $model->category_id)->get()->toArray();
            $subPage = strtolower($postCatName[0]['title']);
            if (in_array($subPage, ['workshops', 'tutorials'])){
                $postPage = 'education';
            } elseif(in_array($subPage, ['Conferences', 'Competitions', 'Camps', 'Sessions', 'Calendar'])) {
                $postPage = 'events';
            } elseif(in_array($subPage, ['articles', 'newsletter', 'subscription'])) {
                $postPage = 'publications';
            } elseif(in_array($subPage, ['images', 'videos'])) {
                $postPage = 'media';
            }
            else {
                $postPage = null;
            }
            $this->result = $postPage.'/'.$subPage.'/'.$model->slug;
            return '<a target="_blank" href="/'.$this->result.'">
            '.$model->title.'</a>';
        })->label('title');

        $schema->compute('url', function($model) {

            return '<a target="_blank" href="/'.$this->result.'">
            <span class="glyphicon glyphicon-link" aria-hidden="true"></span>
            Click To Open Post Page</a>';
        })->label('Post url');

    }

    protected function layout($l)
    {
//        $l->row([ 'first_name', 'last_name' ]);
//        $l->fieldset('Credentials', [ 'email', 'password' ]);

        $l->tab('post', function($t) {
            $t->row(['user']);
            $t->row(['title']);
            $t->row(['slug','url']);
            $t->row(['category', 'slider', 'created_at']);
            $t->row(['subpage']);
            $t->row(['summary']);
            $t->row(['body']);
            $t->row(['images', 'files']);
        });
        $l->tab('tags', function($t) {
            $t->row(['tags',2]);
        });
        $l->tab('Comments', function($t) {
            $t->row('postComments');
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
        $schema->col('category')->help('Show url branch');
        //This is Cruddy main method:
        //$schema->col('images')->format('Image' , ['width'=>'100', 'height'=>'50']);
        $schema->compute('images', function($model){
            //We use this method until cruddy fixed this bug.
            if(!empty($model->images)){
                $image = $model->images[0];
                return $image;
            }
        })->format('Image', ['width'=>'100', 'height'=>'50']);
        $schema->compute('uploaded files', function($model){
            return count($model->files);
        });
        $schema->col('updated_at');
    }

    /**
     * @param \Kalnoy\Cruddy\Repo\AbstractEloquentRepository $repo
     */
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