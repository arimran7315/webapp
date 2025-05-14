<?php

use App\Models\Service;

function getServices(){
    $services = Service::select('title','id')->orderBy('title','ASC')->where('status',1)->get();
    return $services;
}
?>