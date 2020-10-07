<?php

// This class file to define all general functions

namespace App\Helpers;


use Auth;
use DB;

class Helper {

    static function pages() {
        return  DB::table('pages')->orderBy('id', 'DESC')->get();
    }
    static function generalsettings($slug) {
        $name='';
        $res = DB::table('generalsettings')->select($slug)->where('id',1)->first();
        if(!empty($res->$slug)){
        $name = $res->$slug;
        }
        return $name;
    }
    static function customerName($id) {
        $name='';
        $res = DB::table('users')->select("name")->where('id',$id)->first();
        if(!empty($res->name)){
        $name = $res->name;
        }
        return $name;
    }
    

    static function cacheClear() {
        header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
        header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        header("Cache-Control: no-cache, must-revalidate");
        header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        header("Content-Type: application/xml; charset=utf-8");
    }

   

    static function word_teaser($string, $count) {
        $original_string = $string;
        $words = explode(' ', $original_string);

        if (count($words) > $count) {
            $words = array_slice($words, 0, $count);
            $string = implode(' ', $words);
        }
        return $string;
    }




}

?>