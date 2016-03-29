<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Repositories\PageRepository;
class ContactPageController extends Controller
{

    function __construct(PageRepository $pageRepository, Contact $contacts)
    {
        $this->pageRepository = $pageRepository;
        $this->contacts = $contacts;
    }

    protected $currentPost = [];

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function index(Request $request)
    {
        $pageName = 'contact';
        $pages = $this->pageRepository->getPagesWithAllRelations($pageName);
        if(empty($pages)){
            return redirect('errors/404');
        }
        $posts = '';
        $didYouKnow = $this->pageRepository->getDidYouKnow();
//        return view('pages.contact',compact('pages', 'posts', 'didYouKnow'),['currentPost' => $this->currentPost]);


        return response()->view('pages.contact',compact('pages', 'posts', 'didYouKnow'));

//        $image = response($captcha)
//            ->withHeaders([
//                'Content-Type' => 'image/png',
//                'X-Header-One' => 'Header Value',
//                'X-Header-Two' => 'Header Value',
//            ]);


    }

    /**
     * @param Request $request
     * @return Store status
     */
    public function store(Request $request)
    {

        $store_status = 'Thanks, we receive your message!';
        $this->validate($request, [
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',

        ]);

        $data = $request->all();

        $this->contacts->name = $data['name'];
        $this->contacts->email = $data['email'];
        $this->contacts->phone = $data['phone'];
        $this->contacts->subject = $data['subject'];
        $this->contacts->body = $data['message'];


        if( $data['cookie'] == $data['captcha']){
            $this->contacts->save();
            //return json_encode(['store_status' => true]);
            return back()->withErrors([$store_status , 'The Message']);
        } else {
            return back()->withInput();
        }

    }
}
