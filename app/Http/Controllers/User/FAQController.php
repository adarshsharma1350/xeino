<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\FAQ;
// use Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class FAQController extends Controller
{

    public function store(){

    }

    public function create()
    {
        return view('user.general.faqs');
    }
    public function edit($id)
    {
        $faq = FAQ::findOrFail($id);
        return view('user.general.faqs',compact('faq'));
    }
    public function update(Request $request, $id)
    {
        $faq = FAQ::findOrFail($id);
        $faq->update($request->all());
        return redirect()->route('faq')->with('success', 'FAQ updated successfully.');
    }
    public function show()
    {
        $userId = Auth::user()->id;
        $faqs = FAQ::where('status', 1)->where('user_id',$userId)->latest()->get();
        return view('user.general.faqs',compact('faqs'));
    }
}
