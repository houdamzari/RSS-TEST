<?php

namespace App\Http\Controllers;

use App\Models\NewsItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Feeds;

class GrabController extends Controller
{

      /*  public function demo(Request $request) {
            $dbs = NewsItem::all();
           // https://rssfeeds.usatoday.com/UsatodaycomNation-TopStories
            $feed = \Feeds::make('https://rssfeeds.usatoday.com/UsatodaycomNation-TopStories',5, true); // if RSS Feed has invalid mime types, force to read
            $data = array(
                'permalink'     => $feed->get_permalink(),
                'items'     => $feed->get_items(),
            );
            $items = $feed->get_items();
            //dd($items);
            $validated = $request->validate([
                'title'=> 'required|unique',
                'content'=> 'required',
            ]);
        foreach ($items as $item) {
                $news = new NewsItem;
                $news->title = $item->get_title();
                $news->content = $item->get_content();
                //$news->date_posted =$item->get_date('j F Y | g:i a');

             $news->save();

         }


            return View::make('feed', $data,compact('dbs'));


}      */
            public function try(){
            return view('pre-elements.nav');
            }

}
