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
        $posts = $this->postRepository->getPostsWithSameCategory($category)->paginate(20);

        // 3 is links number in each column
        $lastPosts = array_chunk($this->postRepository->getPostsTitleWithSameCategory($category), 3);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($pageName, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.news',compact('pages', 'posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function newsItem($slug)
    {
        $pageName = 'news';
        $category = 'news';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $lastPosts = array_chunk($this->postRepository->getPostsTitleWithSameCategory($category), 3);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($pageName, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.news',compact('pages','posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }


}

