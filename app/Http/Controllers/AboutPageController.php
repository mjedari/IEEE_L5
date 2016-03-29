<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
use App\Repositories\PostRepository;

class AboutPageController extends Controller
{
    function __construct(PageRepository $pageRepository, PostRepository $postRepository)
    {
        $this->pageRepository = $pageRepository;
        $this->postRepository = $postRepository;
    }

    public function index($slug = '')
    {
        $group = 'about';
        $pages = $this->pageRepository->getPagesWithAllRelations($group);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $lastPosts = '';
        if(!empty($slug)){
            $this->currentPost = $this->postRepository->getPostWithSameCategory($group, $slug);
        }
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.index',compact('pages', 'posts','lastPosts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }

    public function board()
    {
        return view('pages.board');
    }
}
