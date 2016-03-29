<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use App\Repositories\PostRepository;

class MediaPageController extends Controller
{
    protected $currentPost = [];

    function __construct(PageRepository $pageRepository, PostRepository $postRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $pageName = 'media';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function album($slug = '')
    {
        $category = 'album';
        //you can use getPosts() and change passed parameters name for test better performance
        $posts = $this->postRepository->getTitleSummarySlugCategoryImages();
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getOnlyImagesTitleSlugCatOfPost($slug);
        }
        return view('pages.album',compact('pages', 'posts'),['currentPost' => $this->currentPost]);
    }

    public function videos($slug = '')
    {
        $pageName = 'videos';
        $category = 'videos';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsTitleWithSameCategory($category);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostsWithAllRelations($slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }
}
