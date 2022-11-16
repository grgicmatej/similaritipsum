<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ComparatorController extends Controller
{
    /**
     * Get ratio result and return to blade
     *
     * @param Request $request
     * @return Factory|View|Application
     */
    public function getResult(Request $request): Factory|View|Application
    {
        return view('result', [
            'result' => $this->compare($request)
        ]);
    }

    public function compare()
    {
        return true; //temporary
    }
}
