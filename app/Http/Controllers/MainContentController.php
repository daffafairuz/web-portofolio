<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use App\Models\MainContent;
use Illuminate\Http\Request;

class MainContentController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $data['main_content'] = MainContent::where('is_active', '1')->first();
        $data['cv'] = CurriculumVitae::first();
        return view('welcome', $data);
    }
}
