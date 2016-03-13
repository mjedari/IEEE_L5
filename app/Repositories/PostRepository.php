<?php

namespace App\Repositories;
use App\Models\Post;
use App\Models\Category;
class PostRepository
{
    function __construct(Post $posts, Category $categories)
    {
        $this->posts = $posts;
        $this->categories = $categories;
    }

    public function getPostsWithAllRelations($slug)
    {
        return $this->posts->where('slug', $slug)->with('PostComments')->
        with('tags')->with('category')->get()->toArray();
    }

    public function getSliderWithCategoryName()
    {
        return $this->posts->where('slider', true)->orderBy('created_at','desc')->with('category')->take(3)->get()->toArray();
    }

    protected $result = [];
    public function getPostWithSameCategory($group, $slug)
    {
        $category_id = $this->categories->where('title',$group)->get()->toArray();

        $post = $this->posts->where(['category_id'=> $category_id[0]['id'], 'slug'=> $slug])->with('PostComments')->
        with('tags')->with('category')->get()->toArray();
        return $post;
    }
    public function getPostsTitleWithSameCategory($category)
    {
        $category_id = $this->categories->where('title',$category)->get()->toArray();

        $posts = $this->posts->where('category_id', $category_id[0]['id'])->with('PostComments')->
        with('tags')->with('category')->get()->toArray();
        foreach($posts as $post){
            array_push($this->result ,$post['title']);
        }
        //dd(var_dump($this->result));
        return $this->result;
    }

    //    notice:
    //if we make static category instead of dynamic category we can have better performance!
}