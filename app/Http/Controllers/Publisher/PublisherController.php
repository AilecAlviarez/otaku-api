<?php

namespace App\Http\Controllers\Publisher;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Publisher;


use App\Services\ApiService;
use App\Services\ChapterService;
use App\Services\MangaService;
use App\Services\PublisherService;
use Illuminate\Http\Request;

class PublisherController extends ApiController
{
    public $rules=[
        'user_name'=>'required|string'  ,
        'user_password'=>'required|min:6',
        'user_email'=>'required'
    ];
    public function __construct(PublisherService $service,MangaService $mangaService)
    {
        parent::__construct($service,$mangaService);
        $this->registerRules($this->rules);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->service->showAll();
    }





    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function show(Publisher $publisher)
    {
        return $this->service->showOne($publisher);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Publisher $publisher)
    {
        $validator=$this->validateRequest($request);
        return (!$validator)?$this->service->updateOne($publisher,$request):$validator;



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publisher  $publisher
     * @return \Illuminate\Http\Response
     */
    public function destroy(Publisher $publisher)
    {

        return $this->service->deletePublisher($publisher);
    }
}
