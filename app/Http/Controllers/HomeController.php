<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// SEO 
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

class HomeController extends Controller
{
    public function index()
    {

        // $homeSeo = HomeSeoModel::all();
        $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $homeLink = "http://$_SERVER[HTTP_HOST]";
        // $homeTitle = $homeSeo[0]['title'];
        
        // $homeShareTitle = $homeSeo[0]['share_title'];
        // $homeDescription = $homeSeo[0]['description'];
        // $homeKeywords = $homeSeo[0]['keywords'];
        // $homeImage = $homeLink."/".$homeSeo[0]['page_img'];
        $homeTitle = 'title';
        $homeShareTitle = 'title';
        $homeDescription = 'desc';
        $homeKeywords = 'key';
        $homeImage = 'sdfasdf';

        // <!--Google-->
        SEOMeta::setTitle($homeTitle);
        SEOMeta::setDescription($homeDescription);
        SEOMeta::setKeywords($homeKeywords);
        SEOMeta::setCanonical($actual_link);
        
        // <!--FaceBook-->
        OpenGraph::addImage($homeImage);
        OpenGraph::setTitle($homeTitle);
        OpenGraph::setDescription($homeDescription);
        OpenGraph::setUrl($actual_link);
        OpenGraph::setSiteName($homeShareTitle);

        return view('dashboard.default',[]);


    }
}
