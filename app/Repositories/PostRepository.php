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
        return $this->posts->where('slider', true)->orderBy('updated_at','desc')->with('category')->take(3)->get()->toArray();
    }

    /**
     * @return Filtered Posts By Images, title, summary,...  In "Two" Foreach
     */
    public function getTitleSummarySlugCategoryImages()
    {
        $item = [];
        $posts = $this->posts->where('album', true)->orderBy('created_at','desc')->with('category')
        ->take(20)->get()->toArray();
        foreach($posts as $post){
            array_push($item, $post['title']);
            array_push($item, $post['summary']);
            array_push($item, $post['slug']);
            array_push($item, $post['category']['title']);
            $image = [];
            foreach($post['images'] as $img){
                array_push($image, $img);
            }
            array_push($item, $image);
        }

        return array_chunk($item,5);
    }

    /**
     * @param Give $slug
     * @return Return Title, Slug, Category & Images Of An Post
     */
    public function getOnlyImagesTitleSlugCatOfPost($slug)
    {
        $image = [];
        $post = $this->posts->where([['album', true],['slug', $slug]])->orderBy('created_at','desc')->with('category')
            ->take(20)->get()->toArray();

        foreach($post[0]['images'] as $img){
            array_push($image, $img);
        }
        $result[] = $post[0]['title'];
        array_push($result, $post[0]['slug']);
        array_push($result, $post[0]['category']['title']);
        array_push($result, $image);
        return $result;
    }

    /**
     * @return Get All Album Posts Without Relations
     */
    public function getPostsForAlbum()
    {
        return $this->posts->where('album', true)->orderBy('created_at','desc')->with('category')
            ->take(20)->get()->toArray();
    }

    /**
     * @param $group
     * @param $slug
     * @return Post item with all relations
     */
    public function getPostWithSameCategory($group, $slug)
    {
        $category_id = $this->categories->where('title',$group)->get()->toArray();

        $post = $this->posts->where(['category_id'=> $category_id[0]['id'], 'slug'=> $slug])->with('PostComments')->
        with('tags')->with('category')->get()->toArray();
        return $post;
    }

    /**
     * @param $group
     * @return Posts that have same category with all relations
     * Usage: if use this method you should call get & toArray.
     */
    public function getPostsWithSameCategory($group)
    {
        $category_id = $this->categories->where('title',$group)->get()->toArray();
        $post = $this->posts->where('category_id',  $category_id[0]['id'])->orderBy('created_at','desc')
            ->with('PostComments')->with('tags')->with('category');
        return $post;
    }

    /**
     * @param $category
     * @return Last Posts Title
     */
    public function getPostsTitleWithSameCategory($category)
    {
        $result = [];
        $category_id = $this->categories->where('title',$category)->get()->toArray();
        $posts = $this->posts->where('category_id', $category_id[0]['id'])->orderBy('created_at','desc')
            ->with('category')->take(9)->get()->toArray();
        foreach($posts as $post){
            array_push($result ,$post['title']);
        }
        return $result;
    }

    //    notice:
    //if we make static category instead of dynamic category we can have better performance!
}