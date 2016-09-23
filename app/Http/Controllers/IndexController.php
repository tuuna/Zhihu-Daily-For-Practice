<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use anlutro\cURL\Laravel\cURL;
use Yangqi\Htmldom\Htmldom;
use App\Http\Requests;
use Carbon\Carbon;

class IndexController extends Controller
{
    public function index() {
        $topStoriesDetail = [];
        $authors = [];
        $contents = [];
        $datas = Curl::get('http://news-at.zhihu.com/api/4/news/latest');
        $i = 0;
        $datas = json_decode($datas,true);
//        $datas['authors'] = [];

        foreach( $datas['top_stories'] as $key => $data) {
            array_push($topStoriesDetail,json_decode(Curl::get('http://news-at.zhihu.com/api/4/news/' . $data['id']),true));
            $str=preg_replace("/[\t\n\r]+/","",(string)$topStoriesDetail[$key]['body']);
            preg_match('/<span class="author">.+?<\/span>/',$str,$authors[$key]); // we need to use \? to match the nearest closed tab to match the exact expression
            $authors[$key] = strip_tags(implode($authors[$key]));
            preg_match('/<div class="content">.+?<\/div>/',$str,$contents[$key]);
            $contents[$key] = mb_substr(strip_tags(implode($contents[$key])),0,50,'utf-8');
        }
//       var_dump($contents);
        return view('index',['datas' => $datas['top_stories'],'date' => $datas['date'],'authors' => $authors,'contents' => $contents]);
    }

    public function show($id) {
//        echo $id;

        $datas = json_decode(Curl::get('http://news-at.zhihu.com/api/4/news/'.$id),true);
        $str=preg_replace("/[\t\n\r]+/","",(string)$datas['body']);
        preg_match('/<span class="author">.+?<\/span>/',$str,$authors); // we need to use \? to match the nearest closed tab to match the exact expression
        $authors = strip_tags(implode($authors));
        preg_match('/<div class="content">.+?<\/div>/',$str,$contents);
        $contents = implode($contents);
        return view ('detail',['author' => $authors,'contents' => $contents,'images' => $datas['images'][0],'title' => $datas['title']]);
    }
}
