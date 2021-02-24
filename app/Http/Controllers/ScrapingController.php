<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pageid)
    {
        //
        $client = new Client();

        switch ($pageid) {
            case '0101':
                $url = 'https://readouble.com/laravel/7.x/ja/installation.html';
                break;
            case '0102':
                $url = 'https://readouble.com/laravel/7.x/ja/configuration.html';
                break;
            case '0103':
                $url = 'https://readouble.com/laravel/7.x/ja/structure.html';
                break;
            default:
                $url = 'https://readouble.com/laravel/7.x/ja/installation.html';
            break;
        }

        $crawler = $client->request('GET', $url);
        //dd($crawler);

        //https://symfony.com/doc/current/components/dom_crawler.html
        /*
        foreach ($crawler as $domElement) {
            var_dump($domElement->nodeName);
        }
        
        //filter Sample Code
        $price = $crawler->filter('table.stocksTable tr')->each(function ($node) {
            $price_temp = $node->filter('td')->eq(1)->text();
            return $price_temp;
        });
        */

        /*
        //#pageTitle > h1
        //#contentContainer > h2:nth-child(3)
        //#contentContainer > h2:nth-child(43)
        //#contentContainer > h3:nth-child(5)
        //#contentContainer > h4:nth-child(12)
        $tag_h1s = $crawler->filter('#pageTitle > h1')->each(function ($node) {
            return $node->text();
        });
        $tag_h2s = $crawler->filter('#contentContainer > h2')->each(function ($node) {
            return $node->text();
        });
        $tag_h3s = $crawler->filter('#contentContainer > h3')->each(function ($node) {
            return $node->text();
        });
        $tag_h4s = $crawler->filter('#contentContainer > h4')->each(function ($node) {
            return $node->text();
        });
        */

        //html
        $tag_htmls = $crawler->filter('#content')->each(function ($node) {
            return $node->text();
        });
        //dd($tag_htmls);

        return view('scraping', compact('tag_htmls'));
        //return view('home', compact('tag_h1s', 'tag_h2s', 'tag_h3s', 'tag_h4s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
