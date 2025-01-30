<?php

namespace App\Http\Controllers;

use App\Models\CurriculumVitae;
use App\Models\MainContent;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function show(){
        $data['main_content'] = MainContent::where('is_active', '1')->first();
        $data['cv'] = CurriculumVitae::first();
        return view('about', $data);
    }
}
