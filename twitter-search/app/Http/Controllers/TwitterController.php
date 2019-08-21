<?php
 namespace App\Http\Controllers;

use App\Services\TwitterService;

 class TwitterController extends Controller
 {
     protected $service;
     public function __construct(TwitterService $service)
     {
         $this->service = $service;
     }
     public function search()
     {
         $twitterResult = $this->service->search(htmlentities('"@Coles"'));
         return response()->json($twitterResult);
     }
 }
