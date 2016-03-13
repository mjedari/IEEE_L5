<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use App\Repositories\PostRepository;

class PublicationsPageController extends Controller
{
    protected $currentPost = [];
    function __construct(PageRepository $pageRepository, PostRepository $postRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $pageName = 'publications';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function articles($slug = '')
    {
        $group = 'articles';
        $category = 'articles';
        $pages = $this->pageRepository->getPagesWithAllRelations($group);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsTitleWithSameCategory($category);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($group, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }
}
