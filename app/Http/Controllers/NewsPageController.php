<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PostRepository;
use App\Repositories\PageRepository;
use App\Models\Category;
use App\Models\Post;
class NewsPageController extends Controller
{
    protected $currentPost = [];
    function __construct(PageRepository $pageRepository, PostRepository $postRepository,
                         Post $posts, Category $categories)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
        $this->categories = $categories;
        $this->posts = $posts;
    }

    public function index()
    {
        $pageName = 'news';
        $category = 'news';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsTitleWithSameCategory($category);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($pageName, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function newsItem($slug)
    {
        $pageName = 'news';
        $category = 'news';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsTitleWithSameCategory($category);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($pageName, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function indexNews(){
        $catNews = $this->categories->where('title', 'News')->get()->toArray()[0]['id'];
        $news = json_encode($this->posts->where(['category_id'=> $catNews, 'slider'=>'false'])
            ->orderBy('created_at','desc')->take(12)->Paginate(3));
        //dd(var_dump($news));
        return view('layouts/newsIndex', compact('news'));
    }

}

