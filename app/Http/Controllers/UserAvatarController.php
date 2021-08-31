<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Controllers\RegisteredUserController;


class UserAvatarController extends Controller
{
    /**
     * Update the avatar for the user.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    protected $file_handler

public function __construct(MyFileHandlerInterface $file_handler)
{
    $this->middleware('guest');

    $this->file_handler = $file_handler;
}

/**
 * The user has been registered.
 *
 * @param  \Illuminate\Http\Request  $request
 * @param  mixed  $user
 * @return mixed
 */
protected function registered(Request $request, $user)
{
    $path  = $this->file_handler->storef($request->file('image'));

    Userpic::create([
        'address' => $path,
        'user_id' => $user->id,
    ]);
}
}
