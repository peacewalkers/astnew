<?php

namespace App\Http\Controllers;

use App\Mail\report;
use App\Mail\RequestReceived;
use App\Models\Horoscope;
use App\Models\User;
use App\Models\Auth;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Mail;
use App\Traits\CaptureIpTrait;
use jeremykenedy\LaravelRoles\Models\Role;
use Validator;
use Razorpay\Api\Api;
use App\includes\Razorpay;
use Intervention\Image\Facades\Image;

class HoroscopeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    private function validateRequest() {
        $validatedData= request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'cob' => 'required',
            'tob' => 'required',
            'gender' => '',
            'reptype' => 'required',
            'amount' => '',
            'paymenttype' => '',
            'paymentstatus' => '',
            'reftype' => '',
            'refdetails' => '',
            'comments' => '',
        ]);

    }
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\Horoscope  $model
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('user')) {
            $horoscopes = Horoscope::orderby('id', 'desc')->paginate(5);
        }
        else {
            $horoscopes = Horoscope::whereIn('user_id', $user)->with('user')->latest()->paginate(5);
        }

        return view('horoscope.show', compact('horoscopes'));
    }

    public function create() {
        return view('horoscope.create');
    }

    public function show ($id)
    {
        $horoscopes = Horoscope::findorfail($id);
        return view('horoscope.show-report', compact('horoscopes'));
    }

    public function store()
    {
        $data = request()->validate([
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'pob' => 'required',
            'dob' => 'required',
            'cob' => 'required',
            'tob' => 'required',
            'gender' => '',
            'reptype' => 'required',
            'amount' => '',
            'paymenttype' => '',
            'paymentstatus' => '',
            'reftype' => '',
            'refdetails' => '',
            'comments' => '',
        ]);

        $user = auth()->user();
        $user->id;
        $amount= "";
        $orderid = time() . '-' . $user->id;
        $type = $data['reptype'];

        if($type == "Career") {
            $amount = "120000";
        }
        elseif($type == "Horoscope") {
            $amount = "180000";
        }
        elseif($type == "Muhurtham") {
            $amount = "30000";
        }
        elseif($type == "Child") {
            $amount = "120000";
        }
        elseif($type == "kalasarpadosha") {
            $amount = "120000";
        }
        elseif($type == "Marriage") {
            $amount = "120000";
        }
        elseif($type == "Compatibility") {
            $amount = "150000";
        }
        elseif($type == "Rajayoga") {
            $amount = "120000";
        }
        elseif($type == "Remedies") {
            $amount = "120000";
        }
        elseif($type == "SadeSati") {
            $amount = "120000";
        }
        elseif($type == "Vastu") {
            $amount = "150000";
        }
        elseif($type == "Muhurtham") {
            $amount = "120000";
        }


        auth()->user()->horoscopes()->create([
            'name' => $data['name'],
            'orderID' => $orderid,
            'reptype' => $data['reptype'],
            'gender' => $data['gender'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'pob' => $data['pob'],
            'cob' => $data['cob'],
            'dob' => $data['dob'],
            'tob' => $data['tob'],
            'comments' => $data['comments'],
            'reftype' => $data['reftype'],
            'refdetails' => $data['refdetails'],
            'amount' => $amount,
            'razorpayOrderId' => null
        ]);

        Log::info('Showing user profile for user: ');
        Mail::to("astrolifeguide@gmail.com")->send(new RequestReceived($data));

//        return redirect()->route('horoscopepay')->with('orderid', $orderid);
        return view('pages.thankyou');
    }

  /*  public function horoscopepay()
    {
        try {
                $user = auth()->user();

                $neworderid = \Illuminate\Support\Facades\Session::get('orderid');

                $horoscope = auth()->user()->horoscopes()->where([
                    'orderID' => $neworderid,
                ])->first();
             if($horoscope) {

                 $amount = $horoscope->amount;
                 $name = $horoscope->name;
                 $phone = $horoscope->phone;
                 $email = $horoscope->email;

                 $api = new Api(config('app.razorpay'), config('app.razorsecret'));

                 $orderData = [
                     'receipt' => $neworderid,
                     'amount' => $amount, // 2000 rupees in paise
                     'currency' => 'INR',
                     'payment_capture' => 1 // auto capture
                 ];

                 $razorpayOrder = $api->order->create($orderData);

                 $razorpayOrderId = $razorpayOrder['id'];

                 $horoscope->razorpayOrderId = $razorpayOrderId;
                 $horoscope->save();

                 $key = config('app.razorpay');

                 $pay = [
                     "key" => $key,
                     "amount" => $amount,
                     "name" => "Astrolifeguide",
                     "description" => "",
                     "image" => "",
                     "prefill" => [
                         "name" => $name,
                         "email" => $email,
                         "contact" => $phone,
                     ],
                     "notes" => [
                         "address" => "",
                         "merchant_order_id" => $neworderid,
                         "user" => $user,
                     ],
                     "theme" => [
                         "color" => "#f05f1e"
                     ],
                     "order_id" => $razorpayOrderId,
                 ];

                 return view('pages.thankyou', ['pay' => $pay]);
             } else {
                 echo "Invalid order iD";
             }
                //if completed
                // already completed
                //   else

        }catch (\Exception $e) {
            dd($e);
        }
    }*/

    public function horoscopepay()
    {
        try {
                $user = auth()->user();

                $neworderid = \Illuminate\Support\Facades\Session::get('orderid');

                $horoscope = auth()->user()->horoscopes()->where([
                    'orderID' => $neworderid,
                ])->first();
             if($horoscope) {

                 $amount = $horoscope->amount;
                 $name = $horoscope->name;
                 $type = $horoscope->reptype;
                 $email = $horoscope->email;
                 $udf5 = "";
                 $hash= hash('sha512', 'nm2hFOAI'.'|'.$neworderid.'|'.$amount.'|'.$type.'|'.$horoscope->name.'|'.$horoscope->email.'|||||'.$udf5.'||||||'.'X5YWhs1FyP');

                 $key				=   'nm2hFOAI';
                 $salt				=   'X5YWhs1FyP';
                 $txnid 			= 	$neworderid;
                 $amount      		= 	$amount;
                 $productInfo  		= 	'test';
                 $firstname    		= 	$name;
                 $email        		=	$email;
                 $resphash			= 	$hash;
                 //Calculate response hash to verify
                 $keyString 	  		=  	$key.'|'.$txnid.'|'.$amount.'|'.$productInfo.'|'.$firstname.'|'.$email.'|||||'.$udf5.'|||||';
                 $keyArray 	  		= 	explode("|",$keyString);
                 $reverseKeyArray 	= 	array_reverse($keyArray);
                 $reverseKeyString	=	implode("|",$reverseKeyArray);
                 $CalcHashString 	= 	strtolower(hash('sha512', $salt.'|'.$status.'|'.$reverseKeyString));

                 return view('pages.thankyou', ['pay' => $pay]);
             } else {
                 echo "Invalid order iD";
             }
                //if completed
                // already completed
                //   else

        }catch (\Exception $e) {
            dd($e);
        }
    }

    public function edit($id, Horoscope $horoscopes)
    {
        $horoscopes = Horoscope::find($id);
        return view('horoscope.edit', compact('horoscopes'));
    }

    public function update(Request $request, $id, Horoscope $horoscope) {



        if (request('image')) {
            $request->validate([
                'image' => 'required|mimes:pdf,xlx,csv|max:2048',
            ]);
            $fileName = time().'.'.$request->image->extension();

            $request->image->move('uploads/reports', $fileName);

        }

        $dataval = request()->validate([
            'suggestions' => '',
            'status' => '',
        ]);

        $data = ([
            'suggestions' => $dataval['suggestions'],
            'status'    => $dataval['status'],
            'image' => $fileName,
        ]);

        $datanew = Horoscope::whereId($id)->first();

        $datanew->update([ //updateing to myroutes table
            'suggestions' => $dataval['suggestions'],
            'status'    => $dataval['status'],
            'image' => $fileName
        ]);
        Mail::to("astrolifeguide@gmail.com")->send(new report($data));

        return view('pages.thankyou');
    }


    public function destroy(Horoscope $horoscopes) {
        $horoscopes->delete();
        return back();
    }

    /**
     * Method to search the users.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */

    public function search(Request $request)
    {
        $searchTerm = $request->input('horoscope_search_box');
        $searchRules = [
            'horoscope_search_box' => 'required|string|max:255',
        ];
        $searchMessages = [
            'horoscope_search_box.required' => 'Search term is required',
            'horoscope_search_box.string'   => 'Search term has invalid characters',
            'horoscope_search_box.max'      => 'Search term has too many characters - 255 allowed',
        ];

        $validator = Validator::make($request->all(), $searchRules, $searchMessages);

        if ($validator->fails()) {
            return response()->json([
                json_encode($validator),
            ], Response::HTTP_UNPROCESSABLE_ENTITY);
        }

        $results = Horoscope::where('orderID', 'like', $searchTerm.'%')
            ->orWhere('reptype', 'like', $searchTerm.'%')
            ->orWhere('name', 'like', $searchTerm.'%')
            ->orWhere('phone', 'like', $searchTerm.'%')
            ->orWhere('email', 'like', $searchTerm.'%')->get();


        return response()->json([
            json_encode($results),
        ], Response::HTTP_OK);
    }

}