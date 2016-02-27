<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Foundation\Inspiring;

class NewPublicLayout extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $signature = 'make:publicLayout';
    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Make a new AtemporaleNEXTworkFlow public layout';
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
        if($this->confirm('This command will generates a new layout. Are you sure?')){
            //inizio file jade/public/__new-page__/index.jade
            $indexJade = @fopen("./resources/assets/jade/template/index.jade",'a');
            $contenutoIndex =<<<end
include ./mixin.jade
doctype html
html(class="no-js", lang="pt-br")
    head
        meta(charset="utf-8")/
        meta(name="viewport", content="width=device-width, initial-scale=1")/
        meta(name="google", content="notranslate")/
        //Meta nameTemplate
        +yield('Title')
        +yield('MetaDescription')
        +yield('MetaKeywords')
        meta(name="author", content="Atemporale Design")/
        meta(name="application-name", content="")/
        //Meta name og
        //Meta name verify
        meta(name="google-site-verification", content="")/
        //Favicon.ico
        link(rel="shortcut icon", href!="{{ asset('/img/favicon/favicon.ico') }}", type="image/x-icon")/
        link(rel="apple-touch-icon", sizes="57x57", href!="{{ asset('/img/favicon/apple_touch_icon_57.png') }}")/
        link(rel="apple-touch-icon", sizes="60x60", href!="{{ asset('/img/favicon/apple_touch_icon_60.png') }}")/
        link(rel="apple-touch-icon", sizes="72x72", href!="{{ asset('/img/favicon/apple_touch_icon_72.png') }}")/
        link(rel="apple-touch-icon", sizes="76x76", href!="{{ asset('/img/favicon/apple_touch_icon_76.png') }}")/
        link(rel="apple-touch-icon", sizes="114x114", href!="{{ asset('/img/favicon/apple_touch_icon_114.png') }}")/
        link(rel="apple-touch-icon", sizes="120x120", href!="{{ asset('/img/favicon/apple_touch_icon_120.png') }}")/
        link(rel="apple-touch-icon", sizes="144x144", href!="{{ asset('/img/favicon/apple_touch_icon_144.png') }}")/
        link(rel="apple-touch-icon", sizes="152x152", href!="{{ asset('/img/favicon/apple_touch_icon_152.png') }}")/
        link(rel="apple-touch-icon", sizes="180x180", href!="{{ asset('/img/favicon/apple_touch_icon_180.png') }}")/
        link(rel="icon", type="image/png", href!="{{ asset('/img/favicon/favicon_16.png')}}", sizes= "16x16")/
        link(rel="icon", type="image/png", href!="{{ asset('/img/favicon/favicon_32.png')}}", sizes= "32x32")/
        link(rel="icon", type="image/png", href!="{{ asset('/img/favicon/favicon_96.png')}}", sizes= "96x96")/
        link(rel="icon", type="image/png", href!="{{ asset('/img/favicon/android_chrome_192.png')}}", sizes="192x192")/
        meta(name="msapplication-square70x70logo", content!="{{ asset('/img/favicon/smalltile.png') }}")/
        meta(name="msapplication-square150x150logo", content!="{{ asset('/img/favicon/mediumtile.png') }}")/
        meta(name="msapplication-wide310x150logo", content!="{{ asset('/img/favicon/widetile.png') }}")/
        meta(name="msapplication-square310x310logo", content!="{{ asset('/img/favicon/largetile.png') }}")/
        //Page CSS
        +yield('cssPagina')
        //Librerie js
        script(src="{{asset('bower/jquery/dist/jquery.min.js')}}", type="text/javascript")
        script(src="{{asset('bower/html5shiv/dist/html5shiv.min.js')}}", type="text/javascript")
        script(src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js", type="text/javascript")
        //Script interni per pagina
        +yield('jsPagina')
    body(itemtype="", itemscope)
    // dinamic content
    +yield('content')
end;
            @fwrite($indexJade, $contenutoIndex);
            @fclose($indexJade);
            //fine file jade/public/__new-page__/index.jade
            //inizio file less/pages/__new__.jade
            $newLess = @fopen("./resources/assets/less/components/layout.less",'a');
            @touch($newLess);// crea LESS vuoto
            //fine file less/pages/__new__.less
            $newJS = './resources/assets/js/components/layout.js';
            @touch($newJS);// crea JS vuoto
            //inizio crea cartella public img
            $makeDirIMG ='./public/img/layout';
            @mkdir ($makeDirIMG, 0777 );//crea cartella public img
        }
        /**
         * Get the console command arguments.
         *
         * @return array
         */
        $this->info('comando eseguito correttamente');
    }
}