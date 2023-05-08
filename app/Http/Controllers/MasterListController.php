<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Response;

class MasterListController extends Controller
{
    //
    public function index(){
        
        return Response::make(file_get_contents('img/dokumen.pdf'), 200, [
                       'content-type'=>'application/pdf',
                   ]);
   }
}
