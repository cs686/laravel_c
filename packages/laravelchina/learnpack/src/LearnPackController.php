<?php

namespace laravelchina\learnpack;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

/**
 * Class LearnPackController
 * @package App\Http\Controllers
 */
class LearnPackController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $message = 'Hello World';
        return view('learnpack::welcome', compact('message'));
    }
}
