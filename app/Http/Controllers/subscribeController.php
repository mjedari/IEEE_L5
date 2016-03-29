<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class subscribeController extends Controller
{
    function __construct(Subscription $subscription)
    {
        $this->subscription = $subscription;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
        ]);

        $data = $request->all();

        $this->subscription->email = $data['email'];


        try {
            $this->subscription->save();
            return json_encode(['subscribe_status' => true]);

        } catch(\Exception $e) {
            return json_encode(['subscribe_status' => false]);
        }
    }
}
