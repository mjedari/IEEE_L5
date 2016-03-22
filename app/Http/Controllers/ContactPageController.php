<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
class ContactPageController extends Controller
{
    protected $currentPost = [];
    function __construct(PageRepository $pageRepository, Contact $contacts)
    {
        $this->pageRepository = $pageRepository;
        $this->contacts = $contacts;
    }

    public function index()
    {
        $pageName = 'contact';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $didYouKnow = $this->pageRepository->getDidYouKnow();
        return view('pages.contact',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);
    }
    public function store(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        $data = $request->all();

        $this->contacts->name = $data['name'];
        $this->contacts->email = $data['email'];
        $this->contacts->phone = $data['phone'];
        $this->contacts->subject = $data['subject'];
        $this->contacts->body = $data['message'];
        try {
            $this->contacts->save();
            return json_encode(['store_status' => true]);

        } catch(\Exception $e) {
            return json_encode(['store_status' => false]);
        }
    }
}
