<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class DealersController extends Controller
{
    public function index(Request $request)
    {
    	//รับค่า
		$lats = $_GET['lat'];
		$lngs = $_GET['lng'];

		if(!empty($lats) or !empty($lngs)){

			$dealer = DB::select("SELECT name_dealers,location,province,( 3959 * acos( cos( radians($lats) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lngs) ) + sin( radians($lats) ) * sin( radians( latitude ) ) ) ) AS distance FROM dealers  HAVING distance < 20 ORDER BY distance LIMIT 0 , 5", []);

        	return response()->json($dealer);

		    // $sql = "SELECT name_dealers,location,province,
		    //     ( 3959 * acos( cos( radians($lats) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians($lngs) ) + sin( radians($lats) ) * sin( radians( latitude ) ) ) ) AS distance 
		    //     FROM dealers 
		    //     HAVING distance < 20 
		    //     ORDER BY distance 
		    //     LIMIT 0 , 5";
		    // $qeury = mysqli_query($connect,$sql);

		    // $search_data = array();

		    // while($result = mysqli_fetch_assoc($qeury)){
		    //     // เก็บข้อมูลที่ค้นหาได้ลงตัวแปร
		    //     $search_data[] = $result;
		    // }

		    echo "<pre>";
		    print_r($dealer);
		    echo "</pre>";

		}

	}
}
