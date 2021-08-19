<?php

namespace App\Http\Controllers\Manga;

use App\Http\Controllers\ApiController;
use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Chapter;
use App\Models\Manga;
use App\Models\Publisher;
use App\Models\User;
use App\Services\ApiService;
use App\Services\MangaService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MangaController extends ApiController
{
    public $rules=['author_id'=>'required|int|min:1|max:20',
        'chapter_id'=>'required|int|min:1|max:20',
        'manga_description'=>'required|string',
        'manga_date'=>'required|date',
        'publisher_id'=>'required|int'
    ];
    public function __construct(MangaService $service)
    {
        parent::__construct($service);
        $this->registerRules($this->rules);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$collections=$this->service->getCollection();
       $chapters= $this->service->getRelations($collections,'chapters');
        return $this->responseSuccesfully($collections[0]->chapters);*/
     /*  $data=DB::table('mangas')->join('users','mangas.publisher_id','=','users.user_id')
           ->select('users.*')
           ->distinct()->get();*/
//        $first=DB::table('mangas')->rightJoin('authors','mangas.author_id','=','authors.author_id')->get();
        $data=$this->service->getCollection();
      $collections=$this->service->getCollection();
      //$data=$this->service->getRelations($collections,'publisher');
        return $this->responseSuccesfully($data);
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$this->validateRequest($request);
        return (!$validate)?$this->service->store($request):$validate;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function show(Manga $manga)
    {
        return $this->service->showOne($manga);
    }



    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manga $manga)
    {
        $validate=$this->validateData($request,$this->rules);
        return (!$validate)?$this->service->updateOne($manga,$request):$validate;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Manga  $manga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manga $manga)
    {
        return $this->service->deleteOne($manga);
    }
}
