<?php

namespace App\Http\Controllers;

class TestController extends Controller
{

    public function webscrap()
    {
        try{
             $add='0x436231d285ad1a9e02131c603ec4630b6c4ec6e1';
             if(strlen($add) ==42){
            $sellers = shell_exec("node scraper.js '".$add."'");
                dd($sellers);
             }
             else{
                $sellers =null;
             }
            }
            catch(Expression $e){

            }


    }
}
