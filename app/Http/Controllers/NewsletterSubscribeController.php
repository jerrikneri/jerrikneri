<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class NewsletterSubscribeController extends Controller
{
    protected $client;

    public function __contstruct()
    {
        $this->client = new Client([
            'base_uri' => config('services.sendlane.uri')
        ]);
    }

    public function store(Request $request)
    {
        Log::info($request);
        $request->validate([
            'email' => 'required|email',
            'name' => 'required'
        ]);
        $name = explode(' ', request('name'));
        $first_name = $name[0];
        $last_name = $name[1];
        $data = [
            'api' => config('services.sendlane.api_key'),
            'hash' => config('services.sendlane.hash_key'),
            'first_name' => $first_name ?? '',
            'last_name' => $last_name ?? '',
            'email' => $request->email,
            'list_id' => config('services.sendlane.list_id'),
            'tag_ids' => config('services.sendlane.tag_id')
        ];
        $this->request('POST', 'list-subscriber-add', array_filter($data));

        return response('', 200, []);
    }

    protected function request($method, $api_call, $data)
    {
        $data = sprintf('%s?%s', $api_call, http_build_query($data));
        $this->client = new Client([
            'base_uri' => config('services.sendlane.uri')
        ]);
        Log::info($data);
        $this->client->request($method, $data);
    }
}
