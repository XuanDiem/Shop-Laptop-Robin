<?php /** @noinspection ALL */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LangController extends Controller
{
    public function changeLanguage(Request $request)
    {
        $locale = $request->lang;
//        App::setLocale($locale);
//        App::setLocale(Session::get('locale'));
        Session::put('locale', $locale);
        return back();
    }
}
