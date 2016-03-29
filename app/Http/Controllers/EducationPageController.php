<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use App\Repositories\PostRepository;

class EducationPageController extends Controller
{
    protected $currentPost = [];
    function __construct(PageRepository $pageRepository, PostRepository $postRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
    }

    public function index()
    {
        $pageName = 'education';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function courses($slug = '')
    {
        $group = 'courses';
        $category = 'courses';
        $pages = $this->pageRepository->getPagesWithAllRelations($group);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsWithSameCategory($category)->get()->toArray();
        $lastPosts = array_chunk($this->postRepository->getPostsTitleWithSameCategory($category), 3);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($group, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.courses',compact('pages', 'posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function workshops($slug = '')
    {
        $group = 'workshops';
        $category = 'workshops';
        $pages = $this->pageRepository->getPagesWithAllRelations($group);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsWithSameCategory($category)->get()->toArray();
        $lastPosts = array_chunk($this->postRepository->getPostsTitleWithSameCategory($category), 3);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($group, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.workshops',compact('pages', 'posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function tutorials($slug = '')
    {
        $group = 'tutorials';
        $category = 'tutorials';
        $pages = $this->pageRepository->getPagesWithAllRelations($group);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = $this->postRepository->getPostsWithSameCategory($category)->get()->toArray();
        $lastPosts = array_chunk($this->postRepository->getPostsTitleWithSameCategory($category), 3);
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($group, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

}
