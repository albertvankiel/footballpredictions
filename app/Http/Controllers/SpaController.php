<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Class SpaController
 *
 * @package App\Http\Controllers
 */
class SpaController extends Controller
{
    /**
     * Returns SPA view.
     *
     * @return View The SPA blade view.
     */
    public function index(): View
    {
        return view('spa');
    }
}
