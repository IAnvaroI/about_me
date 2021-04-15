<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ContactingUser;
use Illuminate\Http\Request;

/**
 * Class ContactingUserController
 * @package App\Http\Controllers
 */
class ContactingUserController extends Controller
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|alpha',
            'surname' => 'required|alpha',
            'email' => 'required|email',
            'phoneNumber' => 'required|numeric',
            'rating' => 'digits_between:0,10',
        ]);


        $user = new ContactingUser();

        $user->name = $request->input('name');
        $user->surname = $request->input('surname');
        $user->email = $request->input('email');
        $user->phoneNumber = $request->input('phoneNumber');
        $user->comment = strip_tags($request->input('comment'));
        $user->rating = $request->input('rating');

        $user->save();

        return redirect()->route('about-me')->withSuccess('Success!');
    }
}
