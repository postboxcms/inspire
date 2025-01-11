<?php
/*
* This file is part of the PostboxCMS\Inspire package.
* (c) PostboxCMS <sanket@digitalbit.in>
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace PostboxCMS\Inspire\Http\Controllers;

use PostboxCMS\Inspire\Console\Concerns\QuoteService;
use Illuminate\Routing\Controller;

class InspireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Code to display a listing of the resource
        $quote = QuoteService::generateQuote();
        return response()->json($quote);
    }
}