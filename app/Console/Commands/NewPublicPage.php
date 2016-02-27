<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class NewPublicPage extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'make:publicPage {name}';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new AtemporaleNEXTworkFlow public page';
    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }
    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        // Recuperiamo gli argomenti obbligatori
        $name = $this->argument( 'name' );
        if($this->confirm('The new public page has this name:'.$name.'. Are you sure?')){
            //$source ='./vendor/atemporalenext/publicpage/src/resources/assets/jade/public/new-page';
            $makeDirJade ='./resources/assets/jade/public/'.$name;
            @mkdir ($makeDirJade, 0777 );//crea cartella jade
            //inizio file jade/public/__new-page__/index.jade
            $indexJade = @fopen("./resources/assets/jade/public/$name/index.jade",'a');
            $contenutoIndex =<<<end
include ./../../templates/mixin.jade
+extends('templates/public_layout')
+section('Title')
    title Testo da inserire
+section('MetaDescription')
    meta(name="description", content="aaa")/
+section('MetaKeywords')
    meta(name="keywords", content="aaa, aaa, aaa")/
+section('cssPagina')
    link(rel="stylesheet", href!="{{ asset('css/$name.css') }}", type="text/css")/
+section('content')
include ./_partial
+section('jsPagina')
    script(src!="{{ asset('js/$name.min.js')}}", type="text/javascript")
end;
            @fwrite($indexJade, $contenutoIndex);
            @fclose($indexJade);
            //fine file jade/public/__new-page__/index.jade
            //inizio file jade/public/__new-page__/partial.jade
            $partialJade = @fopen("./resources/assets/jade/public/$name/_partial.jade",'a');
            $contenutoPartial =<<<end
include ./../../templates/mixin.jade
p oi)
end;
            @fwrite($partialJade, $contenutoPartial);
            @fclose($partialJade);
            //fine file jade/public/__new-page__/partial.jade
            //inizio file less/pages/__new__.jade
            $newLess = @fopen("./resources/assets/less/pages/$name.less",'a');
            $contenutoLess =<<<end
//richiamo i file less per ereditare le funzioni, ma senza stamparli
@import (reference) "../../bower/atemporaleNEXTbower/less/grid_system12.less";
@import (reference) "../../bower/atemporaleNEXTbower/less/material_design_color_palette.less";
@import (reference) "../../bower/atemporaleNEXTbower/less/mixin_css3.less";
@import (reference) "../../bower/atemporaleNEXTbower/less/mixin_posizione.less";
@import (reference) "../../bower/atemporaleNEXTbower/less/mixin_testo.less";
//stampo le formattazioni generali di default
@import (reference) "../../bower/atemporaleNEXTbower/less/start.less";
//stampo le formattazioni dei componenti
@import "../components/layout.less";
//stampo le regole per questa pagina
end;
            @fwrite($newLess, $contenutoLess);
            @fclose($newLess);
            //fine file less/pages/__new__.less
            $newJS = './resources/assets/js/pages/'.$name.'.js';
            @touch($newJS);// crea JS vuoto
            //inizio modifiche file routes
            $routes = "./app/Http/routes.php";
            $contenutoRoutes =<<<end
Route::get('/$name', ['as'=>'public.$name', 'uses'=>'PublicController@$name']);
end;
            @file_put_contents($routes, $contenutoRoutes, FILE_APPEND);
            //fine modifiche file routes
            //inizio modifiche file gulpfile
            $gulpfile = "./gulpfile.js";
            $analizzaGulpfile = @file_get_contents($gulpfile);
            $gulpHandle = @fopen($gulpfile,"w");
            $markTask =<<<end
;//delete less
end;
            $newTask =<<<end
.less(["resources/assets/less/pages/$name.less"], "public/css/$name.css");//delete less
mix.scripts(["components/layout.js","pages/$name.js"], "public/js/$name.min.js");
end;
            $gulpContent = @str_replace($markTask, $newTask, $analizzaGulpfile);
            @fwrite($gulpHandle,$gulpContent);
            @fclose($gulpHandle);
            //inizio crea cartella public img
            $makeDirIMG ='./public/img/'.$name;
            @mkdir ($makeDirIMG, 0777 );//crea cartella public img
            //inizio modifiche file PublicController
            $PublicController = "./app/Http/Controllers/PublicController.php";
            if (@file_exists($PublicController)) {
                $analizzaController = @file_get_contents($PublicController);
                $controllerHandle = @fopen($PublicController,"w");
                $markPC =<<<end
//add new page
end;
                $newPC =<<<end
public function $name(){
        return view('public.$name.index');
    }
//add new page
end;
                $ControllerContent = @str_replace($markPC, $newPC, $analizzaController);
                @fwrite($controllerHandle,$ControllerContent);
                @fclose($controllerHandle);
            }else{
                $pcHandle = @fopen($PublicController,'a+');
                $pcContent =<<<end
<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
class PublicController extends Controller
{
    public function $name(){
        return view('public.$name.index');
    }
    //add new page
}
end;
                @fwrite($pcHandle, $pcContent);
                @fclose($pcHandle);
            }
            //fine modifiche file routes
        }
        /**
         * Get the console command arguments.
         *
         * @return array
         */
        $this->info('comando eseguito correttamente');
    }
}