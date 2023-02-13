<?php

use Illuminate\Support\Facades\Http;

class PaperflyApi
{
    public function justDoIt() {
        $response = Http::get('https://inspiration.goprogram.ai/');

        return $response['quote'] . ' -' . $response['author'];
    }

    public function register()
    {
        $response = Http::withBasicAuth('M10001', '1234')
            ->withHeaders([
                'paperflykey' => 'Paperfly_~La?Rj73FcLm'
            ])
            ->acceptJson()
            ->get();

        $jsonData = $response->json();
        dd($jsonData);
    }
}
