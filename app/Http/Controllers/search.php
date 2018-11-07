<?php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\types;
use App\caracteristics;
use App\type_car;
use App\palabras;


class search extends Controller
{

		public function index(Request $request){
			$search = strtolower($request->search);
			$array_s = explode( ',', $search);
			foreach($array_s as $s){
			$car = DB::table('caracteristics')->where('name',$s)->get();
			}
			if(count($car)>0){
			  $response = "ok";
			  foreach($car as $carr){
			  $total = DB::table('type_car')
			  		   ->join('caracteristics', 'type_car.car', '=', 'caracteristics.id')	
			  		   ->join('types', 'type_car.type', '=', 'types.id')
			  		   ->where('caracteristics.id', $carr->id)
			  		   ->select('types.name as typ, caracteristics.name as car')
			  		   ->get();

        	}
        				  $coincidencias = $total;
			}else{
			  $response = "nel";
			  $coincidencias = 0;
			}

			return view('response',[
				'res' => $response,
				'car' => $search
			]);	
		}
		public function save(Request $request){
			$search = $request->cars;
			$array_s = explode( ',', $search);
			$type = DB::table('types')->where('name', $request->type)->first();
			if(!$type){
				$newt = new types;
				$newt->name = $request->type;
				$newt->save();
				$id = $newt->id;
			}else{
				$id = $type->id;	
			}

			foreach($array_s as $s){
			  $car = new caracteristics;
			  $car->name = $s;
			  if($car->save()){
					  $conect = new type_car;
					  $conect->type = $id;
					  $conect->car = $car->id;
					  $conect->save();
				}
			}

			return view('responseend');
		}

		 public function SearchString (Request $request)
      {   
        if($request->search != null){
          $search = palabras::ilike($request->search);
          
          return response()->json($search);
              }
        }

}