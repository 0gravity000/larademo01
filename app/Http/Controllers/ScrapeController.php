<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Goutte\Client;

class ScrapeController extends Controller
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
            case '0001':
                $url = 'https://readouble.com/laravel/7.x/ja/releases.html';
                break;
            case '0002':
                $url = 'https://readouble.com/laravel/7.x/ja/upgrade.html';
                break;
            case '0003':
                $url = 'https://readouble.com/laravel/7.x/ja/contributions.html';
                break;
            case '0101':
                $url = 'https://readouble.com/laravel/7.x/ja/installation.html';
                break;
            case '0102':
                $url = 'https://readouble.com/laravel/7.x/ja/configuration.html';
                break;
            case '0103':
                $url = 'https://readouble.com/laravel/7.x/ja/structure.html';
                break;
            case '0104':
                $url = 'https://readouble.com/laravel/7.x/ja/homestead.html';
                break;
            case '0105':
                $url = 'https://readouble.com/laravel/7.x/ja/valet.html';
                break;
            case '0106':
                $url = 'https://readouble.com/laravel/7.x/ja/deployment.html';
                break;
            case '0201':
                $url = 'https://readouble.com/laravel/7.x/ja/lifecycle.html';
                break;
            case '0202':
                $url = 'https://readouble.com/laravel/7.x/ja/container.html';
                break;
            case '0203':
                $url = 'https://readouble.com/laravel/7.x/ja/providers.html';
                break;
            case '0204':
                $url = 'https://readouble.com/laravel/7.x/ja/facades.html';
                break;
            case '0205':
                $url = 'https://readouble.com/laravel/7.x/ja/contracts.html';
                break;
            case '0301':
                $url = 'https://readouble.com/laravel/7.x/ja/routing.html';
                break;
            case '0302':
                $url = 'https://readouble.com/laravel/7.x/ja/middleware.html';
                break;
            case '0303':
                $url = 'https://readouble.com/laravel/7.x/ja/csrf.html';
                break;
            case '0304':
                $url = 'https://readouble.com/laravel/7.x/ja/controllers.html';
                break;
            case '0305':
                $url = 'https://readouble.com/laravel/7.x/ja/requests.html';
                break;
            case '0306':
                $url = 'https://readouble.com/laravel/7.x/ja/responses.html';
                break;
            case '0307':
                $url = 'https://readouble.com/laravel/7.x/ja/views.html';
                break;
            case '0308':
                $url = 'https://readouble.com/laravel/7.x/ja/urls.html';
                break;
            case '0309':
                $url = 'https://readouble.com/laravel/7.x/ja/session.html';
                break;
            case '0310':
                $url = 'https://readouble.com/laravel/7.x/ja/validation.html';
                break;
            case '0311':
                $url = 'https://readouble.com/laravel/7.x/ja/errors.html';
                break;
            case '0312':
                $url = 'https://readouble.com/laravel/7.x/ja/logging.html';
                break;
            case '0401':
                $url = 'https://readouble.com/laravel/7.x/ja/blade.html';
                break;
            case '0402':
                $url = 'https://readouble.com/laravel/7.x/ja/localization.html';
                break;
            case '0403':
                $url = 'https://readouble.com/laravel/7.x/ja/frontend.html';
                break;
            case '0404':
                $url = 'https://readouble.com/laravel/7.x/ja/mix.html';
                break;
            case '0501':
                $url = 'https://readouble.com/laravel/7.x/ja/authentication.html';
                break;
            case '0502':
                $url = 'https://readouble.com/laravel/7.x/ja/authorization.html';
                break;
            case '0503':
                $url = 'https://readouble.com/laravel/7.x/ja/verification.html';
                break;
            case '0504':
                $url = 'https://readouble.com/laravel/7.x/ja/encryption.html';
                break;
            case '0505':
                $url = 'https://readouble.com/laravel/7.x/ja/hashing.html';
                break;
            case '0506':
                $url = 'https://readouble.com/laravel/7.x/ja/passwords.html';
                break;
            case '0601':
                $url = 'https://readouble.com/laravel/7.x/ja/artisan.html';
                break;
            case '0602':
                $url = 'https://readouble.com/laravel/7.x/ja/broadcasting.html';
                break;
            case '0603':
                $url = 'https://readouble.com/laravel/7.x/ja/cache.html';
                break;
            case '0604':
                $url = 'https://readouble.com/laravel/7.x/ja/collections.html';
                break;
            case '0605':
                $url = 'https://readouble.com/laravel/7.x/ja/events.html';
                break;
            case '0606':
                $url = 'https://readouble.com/laravel/7.x/ja/filesystem.html';
                break;
            case '0607':
                $url = 'https://readouble.com/laravel/7.x/ja/helpers.html';
                break;
            case '0608':
                $url = 'https://readouble.com/laravel/7.x/ja/http-client.html';
                break;
            case '0609':
                $url = 'https://readouble.com/laravel/7.x/ja/mail.html';
                break;
            case '0610':
                $url = 'https://readouble.com/laravel/7.x/ja/notifications.html';
                break;
            case '0611':
                $url = 'https://readouble.com/laravel/7.x/ja/packages.html';
                break;
            case '0612':
                $url = 'https://readouble.com/laravel/7.x/ja/queues.html';
                break;
            case '0613':
                $url = 'https://readouble.com/laravel/7.x/ja/scheduling.html';
                break;
            case '0701':
                $url = 'https://readouble.com/laravel/7.x/ja/database.html';
                break;
            case '0702':
                $url = 'https://readouble.com/laravel/7.x/ja/queries.html';
                break;
            case '0703':
                $url = 'https://readouble.com/laravel/7.x/ja/pagination.html';
                break;
            case '0704':
                $url = 'https://readouble.com/laravel/7.x/ja/migrations.html';
                break;
            case '0705':
                $url = 'https://readouble.com/laravel/7.x/ja/seeding.html';
                break;
            case '0706':
                $url = 'https://readouble.com/laravel/7.x/ja/redis.html';
                break;
            case '0801':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent.html';
                break;
            case '0802':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent-relationships.html';
                break;
            case '0803':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent-collections.html';
                break;
            case '0804':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent-mutators.html';
                break;
            case '0805':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent-resources.html';
                break;
            case '0806':
                $url = 'https://readouble.com/laravel/7.x/ja/eloquent-serialization.html';
                break;
            case '0901':
                $url = 'https://readouble.com/laravel/7.x/ja/testing.html';
                break;
            case '0902':
                $url = 'https://readouble.com/laravel/7.x/ja/http-tests.html';
                break;
            case '0903':
                $url = 'https://readouble.com/laravel/7.x/ja/console-tests.html';
                break;
            case '0904':
                $url = 'https://readouble.com/laravel/7.x/ja/dusk.html';
                break;
            case '0905':
                $url = 'https://readouble.com/laravel/7.x/ja/database-testing.html';
                break;
            case '0906':
                $url = 'https://readouble.com/laravel/7.x/ja/mocking.html';
                break;

            default:
                $url = 'https://readouble.com/laravel/7.x/ja/installation.html';
                break;
        }

        $crawler = $client->request('GET', $url);
        //dd($crawler);

        //ToDo：表示できないページあり。要調査

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

        return view('scraped', compact('tag_htmls'));
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
