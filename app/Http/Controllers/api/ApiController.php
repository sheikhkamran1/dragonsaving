<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarouselResource;
use App\Http\Resources\DownloadResource;
use App\Http\Resources\EventResource;
use App\Http\Resources\GalleryResource;
use App\Http\Resources\NoticeResource;
use App\Http\Resources\OffersResource;
use App\Http\Resources\ProfileResource;
use App\Http\Resources\resource\AboutResource;
use App\Models\About;
use App\Models\Carousel;
use App\Models\Download;
use App\Models\Event;
use App\Models\Gallery;
use App\Models\Notice;
use App\Models\Offer;
use App\Models\Profile;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getProfile(){
        $profile = Profile::first();
        return new ProfileResource($profile);
    }

    public function getAbout(){
        $about = About::first();
        return new AboutResource($about);
    }

    public function getGallery(){
        $gallery = Gallery::all();
        return GalleryResource::collection($gallery);
    }

    public function getEvent(){
        $event = Event::all();
        return EventResource::collection($event);
    }

    public function getOffers(){
        $offers = Offer::all();
        return OffersResource::collection($offers);
    }

    public function getNotice(){
        $notice = Notice::all();
        return NoticeResource::collection($notice);
    }

    public function getCarousel(){
        $carousel = Carousel::all();
        return CarouselResource::collection($carousel);
    }

    public function getDownload(){
        $download = Download::all();
        return DownloadResource::collection($download);
    }


}
