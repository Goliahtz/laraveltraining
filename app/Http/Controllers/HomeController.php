<?php

namespace App\Http\Controllers;
use App\Haberler;
use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function get_deneme(Request $request) {
$adim =  $request->get('adim');
$soyadim= $request->get('soyadim');
		return view('deneme')->with('adim',$adim)->with('soyadim',$soyadim);

   }

   public function get_form() {

		return view('form');

   }

   public function post_form(Request $request) {

$birinci = $request->birinci;
$ikinci = $request->ikinci;
$toplam = $birinci + $ikinci;
return view('form') -> with('toplam',$toplam);
   }


   public function get_deneme_isim ($isim) {
return view('deneme')->with('adim',$isim);
   }

   public function get_kategori ($forum,$php,$framework){
   	return view('sorular') ->with('forum',$forum) ->with('php',$php)->with('framework',$framework);
   }

   public function get_haberler(){
   	$haberler = Haberler::all();
   	return view('haberler')->with('haberler',$haberler);

   }
   public function post_haberler(Request $request){

   	Haberler::create($request -> all());
   	return "İşlem Basarılı";

   }

}
