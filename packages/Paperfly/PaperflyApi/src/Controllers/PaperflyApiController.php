<?php

namespace Paperfly\PaperflyApi\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Paperfly\PaperflyApi\PaperflyApi;

class PaperflyApiController
{
    public function __invoke(PaperflyApi $inspire)
    {
        $quote = $inspire->justDoIt();

        return $quote;
    }

}
