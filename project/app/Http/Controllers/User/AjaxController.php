<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\Input;
use Validator;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\User;
use App\Models\Countrys;
use App\Models\State;
use App\Models\City;
use Image;

class AjaxController extends Controller {

    private $ImgPath = 'storage/app/public/profilePic/';
    private $HTTP_status = 200;
    private $status = 0;
    private $message = '';
    private $response = array();
    private $Error = array();

    public function __construct() {
        
    }

    //Chatbot
    public function activityTrack(Request $request) {
        ignore_user_abort(true);
        set_time_limit(0);
        @ini_set('upload_max_size', '4000M');
        @ini_set('post_max_size', '4500M');
        @ini_set('max_execution_time', '30000000');
        @ini_set('memory_limit', '15288M');
        @ini_set('max_file_uploads', 1000);

        $userinfo = json_decode(Helper::getUserInfo(), true);
        $log = [];
        if (!empty($userinfo)) {
            $log['country'] = $userinfo['country'];
            $log['countryCode'] = $userinfo['countryCode'];
            $log['regionName'] = $userinfo['regionName'];
            $log['region'] = $userinfo['region'];
            $log['city'] = $userinfo['city'];
            $log['zip'] = $userinfo['zip'];
            $log['lat'] = $userinfo['lat'];
            $log['lon'] = $userinfo['lon'];
        }
        $log['json_data'] = json_encode($userinfo);
        $log['page'] = $_POST['page'] ? $_POST['page'] : '';
        $log['section'] = $_POST['section'] ? $_POST['section'] : '';
        $log['str'] = $_POST['str'] ? $_POST['str'] : '';
        $log['url'] = $request->fullUrl();
        $log['ip'] = $request->ip();
        $log['agent'] = $request->header('user-agent');
        $log['user_id'] = auth()->check() ? auth()->user()->id : 1;
        UsersActivityTrack::insert($log);
    }  

    //get country records
    public function ajaxCountry() {
        $input = Input::all();
        $q = $input['data']['q'];
        $results = array();
        $tblcountries = Countrys::get();
        foreach ($tblcountries as $i => $state) {
            if (stripos($state->name, $q) === 0) {
                $results[] = array('id' => $state->country_id, 'text' => $state->name);
            }
        }
        echo json_encode(array('q' => $q, 'results' => $results));
    }

    //get state records
    public function ajaxStateById(Request $request) {
        $tblstates = State::where('country_id', '=', $request->id)->get();
        echo '<option value=""> - Select State - </option>';
        if (!empty($tblstates)) {
            foreach ($tblstates as $item) {
                ?>
                <option value="<?php echo $item->state_id; ?>"><?php echo $item->name; ?> </option>
                <?php
            }
        }
    }

    //get city records
    public function ajaxCityById(Request $request) {
        echo '<option value=""> - Select City - </option>';
        $tblcities = City::where('state_id', '=', $request->id)->get();
        if (!empty($tblcities)) {
            foreach ($tblcities as $item) {
                ?>
                <option value="<?php echo $item->city_id; ?>"><?php echo $item->name; ?> </option>
                <?php
            }
        }
    }

}
