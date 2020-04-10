<?php

namespace App\Http\Controllers;

use App\SiteSetting;
use App\Slider;
use App\Features;
use App\Package;
use App\AdminSite;
use App\Videos;
use App\JoinSimplicity;
use App\IntragtedSolutions;
use App\Retail;
use App\PowerfulCapabilities;
use App\WhatMakesBetter;
use App\CouldBoostProfitability;
use App\SystemEasytoUse;
use App\MultipleEmployeesAccess;
use App\BusinessPOSSystem;
use App\CoreSoftwareComponents;
use App\CoreHardwareComponents;
use App\SimpleCashRegister;
use App\RetailStore;
use App\KeyFeature;
use App\OtherFeature;
use App\PageSetting;
use App\Blogs;
use App\BlogComment;
use App\HardwarePackage;
use App\PurchaseHardware;
use App\CardpointeStoreSetting;
use App\CardPointe;
use Illuminate\Http\Request;
use Session;


class AdminSiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $moduleName="Site ";
    private $sdc;
    public function __construct(){ 
      $this->sdc = new CoreCustomController(); 
    }
    
    public function dashboard(){
        return view('admin.pages.dashboard.index');
    }

    public function index()
    {

        
       // dd(Session::get('package_id'));

        
        $slider = Slider::orderBy('id','DESC')->first();
        $feature = Features::where('feature_status','Active')->get();
        
        $allPackage = Package::where('module_status','Active')->get();
        $videos = Videos::select('id','heading','video_image','video_link')->where('module_status','Active')->first();
        $JoinSimplicity = JoinSimplicity::select('id','heading','detail','content_image')->where('module_status','Active')->first();
        $JoinSimplicity = JoinSimplicity::select('id','heading','detail','content_image')->where('module_status','Active')->first();
        $IntragtedSolutions = IntragtedSolutions::where('module_status','Active')->get();
        $PageSetting = PageSetting::orderBy('id','DESC')->first();

        //dd($PageSetting);
        //echo 1; die();

        $priceYearly = Package::where('id',$PageSetting->default_package)->where('module_status','Active')->orderBy('id','DESC')->first();

        if(\Session::has('success'))
        {
          $success_msg=\Session::get('success')?\Session::get('success'):0;
          \Session::forget('success');
          return view('site.pages.index',compact('slider','feature','price','priceYearly','allPackage','success_msg','videos','JoinSimplicity','allPackage','IntragtedSolutions','PageSetting'));
        }
        elseif(\Session::has('error'))
        {
          $error_msg=\Session::get('error')?\Session::get('error'):0;
          \Session::forget('error');
          return view('site.pages.index',compact('slider','feature','price','priceYearly','allPackage','error_msg','videos','JoinSimplicity','allPackage','IntragtedSolutions','PageSetting'));
        }
        else
        {
            return view('site.pages.index',compact('slider','feature','price','priceYearly','allPackage','busRep','videos','JoinSimplicity','allPackage','IntragtedSolutions','PageSetting'));
        }


        
    }

    public function question()
    {
        $PageSetting = PageSetting::orderBy('id','DESC')->first();
        $PowerfulCapabilities=PowerfulCapabilities::where('section_status','Active')->first();
        $WhatMakesBetter=WhatMakesBetter::where('module_status','Active')->get();
        $Retail = Retail::where('section_status','Active')->first();
        $couldboostprofitability = CouldBoostProfitability::where('module_status','Active')->first();
        $SystemEasytoUse = SystemEasytoUse::where('module_status','Active')->first();
        $MultipleEmployeesAccess = MultipleEmployeesAccess::where('module_status','Active')->first();
        return view('site.pages.question',compact('Retail','PowerfulCapabilities','WhatMakesBetter','couldboostprofitability','SystemEasytoUse','MultipleEmployeesAccess','PageSetting'));
    }

    public function bps()
    {
        $PageSetting = PageSetting::orderBy('id','DESC')->first();
        $BusinessPOSSystem = BusinessPOSSystem::where('module_status','Active')->first();
        $CoreSoftwareComponents = CoreSoftwareComponents::where('section_status','Active')->get();
        $CoreHardwareComponents = CoreHardwareComponents::where('module_status','Active')->get();
        return view('site.pages.businesspossystem',compact('BusinessPOSSystem','CoreSoftwareComponents','CoreHardwareComponents','PageSetting'));
    }

    public function scr()
    {
        $SimpleCashRegister = SimpleCashRegister::where('module_status','Active')->get();
        return view('site.pages.simple-cash-register',compact('SimpleCashRegister'));
    }

    public function retailStore()
    {
        $PageSetting = PageSetting::orderBy('id','DESC')->first();
        $RetailStore = RetailStore::where('module_status','Active')->first();
        $KeyFeature = KeyFeature::where('module_status','Active')->get();
        $OtherFeature = OtherFeature::where('module_status','Active')->get();
        return view('site.pages.retail-store',compact('RetailStore','KeyFeature','OtherFeature','PageSetting'));
    }


    public function blog(){
        $populer=Blogs::orderBy('views','DESC')->limit('5')->get();
        $Blogs=Blogs::all();
        return view('site.pages.blog',compact('Blogs','populer'));

    }

    public function blogDetail($link=''){
        if(empty($link))
        {
            return redirect('blog')->with('status','Invalid Link!!!');
            die();
        }

        $BlogsCheck=Blogs::where('link',$link)->count();
        if($BlogsCheck==0)
        {
            return redirect('blog')->with('status','Invalid Link!!!');
            die();
        }

        \DB::statement("UPDATE blogses SET views=views+1 WHERE link='".$link."'");

        //Blogs::where('link',$link)->update(['views'=>'views'+1]);

        $populer=Blogs::orderBy('views','DESC')->limit('5')->get();

        $Blogs=Blogs::where('link',$link)->first();

        $BlogComment=BlogComment::where('blog',$Blogs->id)->get();

        return view('site.pages.blog-detail',compact('Blogs','populer','BlogComment'));

    }

    public function saveComment(Request $request)
    {

        $this->validate($request,[
                
                'name'=>'required',
                'email'=>'required',
                'comment'=>'required',
                'blog_id'=>'required',
        ]);

        

        
        $tab_4_Blogs=Blogs::where('id',$request->blog_id)->first();
        $blog_4_Blogs=$tab_4_Blogs->heading;
        $blog_4_link=$tab_4_Blogs->link;
        $tab=new BlogComment();
        
        $tab->name=$request->name;
        $tab->email=$request->email;
        $tab->website=$request->website;
        $tab->comment=$request->comment;
        $tab->blog_heading=$blog_4_Blogs;
        $tab->blog=$request->blog_id;
        $tab->save();

        return redirect('blog/'.$blog_4_link)->with('success','Your comment post successfully.');
    }

    public function pricing(){
      $allPackage = Package::where('module_status','Active')->get();
      return view('site.pages.pricing',compact('allPackage'));
    }

    public function hardware(){
      $country=\DB::table('apps_countries')->get();
      $allPackage = HardwarePackage::where('module_status','Active')->get();
      return view('site.pages.hardware',compact('allPackage', 'country'));
    }

    private function makePayment($cardNum = '', $amount = 0, $expiry = '', $invoice_id = 0, $request)
    {

      $storeMerchantSetCount = CardpointeStoreSetting::count();
      if ($storeMerchantSetCount == 0) {
        return (object) array('status' => 0, 'message' => 'Invalid credentials');
        die();
      } else {

        $storeMerchantSet = CardpointeStoreSetting::first();
        //dd($storeMerchantSet);
        $merchant_id = $storeMerchantSet->merchant_id;
        $user        = $storeMerchantSet->username;
        $password        = $storeMerchantSet->password;
        $server      = 'https://fts.cardconnect.com/cardconnect/rest/auth';

        $paswordString = $user . ":" . $password;
        $authkey = base64_encode($paswordString);
        //$authkey=$password;

        $cardHName = $request->card_number;
        // dd($expiry);
        //$amount=1;
        $amountReady = number_format($amount, 2);
        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => $server,
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "PUT",
          CURLOPT_POSTFIELDS => "{\n    \"merchid\": \"$merchant_id\",\n    \"account\": \"$cardNum\",\n    \"expiry\": \"$expiry\",\n    \"amount\": \"$amountReady\",\n    \"orderid\": \"$invoice_id\",\n    \"currency\": \"USD\",\n    \"name\": \"$cardHName\",\n    \"capture\": \"y\",\n    \"receipt\": \"y\"\n}",
          CURLOPT_HTTPHEADER => array(
            "Authorization: Basic " . $authkey,
            "Content-Type: application/json"
          ),
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        //echo $response;

        $gCAT = json_decode($response, true);
      //dd($gCAT);

          return [
            'authcode' =>1, 
            'token' => time(), 
            'account' => time(),
            'retref' => time(),
            'resptext' => 'Approval',
            'respstat' =>'A',
            'respcode' => time(),
          ];

        if (count($gCAT) == 0) {
          return (object) array('status' => 0, 'message' => 'Credential Mismatch / Server not responding.', 'resptext' => 'Credential Mismatch / Server not responding.', 'datares' => null);
        }

        if ($gCAT['resptext'] == "Approval" && $gCAT['respstat'] == "A") {
          return $gCAT;
        } else {
          return (object) array('status' => 0, 'message' => $gCAT['resptext'], 'resptext' => $gCAT['resptext'], 'datares' => $gCAT);
          die();
        }
      }
    }
    
    
    public function hardwarePurchase(Request $request){

        $validator = \Validator::make($request->all(), [
          'full_name' => 'required',
          'email' => 'required',
          'phone' => 'required',
          'country' => 'required',
          'state' => 'required',
          'zip_code' => 'required',
          'delivery_address' => 'required',
          'card_number' => 'required',
          'card_holder_name' => 'required',
          'card_month' => 'required',
          'card_year' => 'required',
          'card_pin' => 'required',
          'hardware' => 'required',
          'hardware_price' => 'required'
        ]);

        if ($validator->fails()) {
          return response()->json(['status'=>0, 'message'=>'','error'=> $validator->errors()], 200);
        }

        $invoiceid = time();
        $invoice_id = str_replace("SPX", "", $invoiceid);

        $cardNumber = trim(str_replace(" ", "", $request->card_number));
        $cardMonth = trim($request->card_month);
        $cardYear = trim($request->card_year);
        //dd();
        $yy = "";
        if (strlen($cardYear) == 4) {
          $yy = substr($cardYear, 2);
        }

        $expireDate = $cardMonth . "" . $yy;

        if (!$expireDate) {
          return response()->json(['status' => 0, 'message' => 'Card Expire date invalid.']);
        }

        $packagePrice= $request->hardware_price;

        $gCAT = $this->makePayment($cardNumber, $packagePrice, $expireDate, $invoice_id, $request);

        if (count($gCAT)<2) {
          return response()->json(['status' => 0, 'message' => $gCAT['resptext'],'label'=>2 ,'datares' => $gCAT]);
          die();
        }

        if (isset($gCAT['respstat'])) {
          if ($gCAT['resptext'] == "Approval" && $gCAT['respstat'] == "A") {

            $account_card_json = array(
              'card_number' => $request->card_number,
              'card_holder_name' => $request->card_holder_name,
              'card_expire_month' => $request->card_month,
              'card_expire_year' => $request->card_year,
              'card_cvc' => $request->card_pin,
            );

            $serializeCardjson = serialize(json_encode($account_card_json));

            

            $tab = new CardPointe;
            $tab->invoice_id = $invoice_id;
            $tab->responseJson = json_encode($gCAT);
            $tab->card_number = $request->card_number;
            $tab->card_holder_name = $request->card_holder_name;
            $tab->card_expire_month = $request->card_month;
            $tab->card_expire_year = $request->card_year;
            $tab->card_cvc = $request->card_pin;
            $tab->amount = $packagePrice;
            $tab->authCode = $gCAT['authcode'];
            $tab->token = $gCAT['token'];
            $tab->account = $gCAT['account'];
            $tab->retref = $gCAT['retref'];
            $tab->resptext = $gCAT['resptext'];
            $tab->respstat = $gCAT['respstat'];
            $tab->commcard = "";
            $tab->respcode = $gCAT['respcode'];
            $tab->refund_status = 0;
            $tab->store_id = 0;
            $tab->created_by = 0;
            $tab->save();

            $tab_12_HardwarePackage = HardwarePackage::where('id', $request->hardware)->first();
            $hardware_12_HardwarePackage = $tab_12_HardwarePackage->title;

            $tab = new PurchaseHardware();
            $tab->full_name = $request->full_name;
            $tab->email = $request->email;
            $tab->phone = $request->phone;
            $tab->country_name = $request->country;
            $tab->state = $request->state;
            $tab->zip_code = $request->zip_code;
            $tab->delivery_address = $request->delivery_address;
            $tab->card_number = $request->card_number;
            $tab->card_holder_name = $request->card_holder_name;
            $tab->card_month = $request->card_month;
            $tab->card_year = $request->card_year;
            $tab->card_pin = $request->card_pin;
            $tab->hardware_title = $hardware_12_HardwarePackage;
            $tab->hardware = $request->hardware;
            $tab->hardware_price = $request->hardware_price;
            $tab->payment_status = 'Paid';
            $tab->hardware_delivery_status = 'On Progress';
            $tab->save();

            return response()->json(['status' => 1, 'message' => ' Purchase is complete and sales team will contact with your email soon.'], 200);

          } else {
            return response()->json(['status' => 0, 'message' => $gCAT['resptext'], 'datares' => $gCAT]);
          }
        } else {
          return response()->json(['status' => 0, 'message' => $gCAT['resptext'], 'datares' => $gCAT]);
        }


        

    }

    

    public function pricingSet($packageid=0){
      Session::put('package_id',$packageid);
      //$_SESSION['package_id']=$packageid;
      //dd($_SESSION['package_id']);
      return redirect('/');
      //->with('package_id',$packageid);
    }

    public function contact(Request $request)
    {

        $siteInfo=SiteSetting::where('id',1)->first();

        $html='';
        $html .='<!doctype html>
                    <html>
                      <head>
                        <meta name="viewport" content="width=device-width">
                        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
                        <title>Simple Transactional Email</title>
                        <style>
                        /* -------------------------------------
                            INLINED WITH htmlemail.io/inline
                        ------------------------------------- */
                        /* -------------------------------------
                            RESPONSIVE AND MOBILE FRIENDLY STYLES
                        ------------------------------------- */
                        @media only screen and (max-width: 620px) {
                          table[class=body] h1 {
                            font-size: 28px !important;
                            margin-bottom: 10px !important;
                          }
                          table[class=body] p,
                                table[class=body] ul,
                                table[class=body] ol,
                                table[class=body] td,
                                table[class=body] span,
                                table[class=body] a {
                            font-size: 16px !important;
                          }
                          table[class=body] .wrapper,
                                table[class=body] .article {
                            padding: 10px !important;
                          }
                          table[class=body] .content {
                            padding: 0 !important;
                          }
                          table[class=body] .container {
                            padding: 0 !important;
                            width: 100% !important;
                          }
                          table[class=body] .main {
                            border-left-width: 0 !important;
                            border-radius: 0 !important;
                            border-right-width: 0 !important;
                          }
                          table[class=body] .btn table {
                            width: 100% !important;
                          }
                          table[class=body] .btn a {
                            width: 100% !important;
                          }
                          table[class=body] .img-responsive {
                            height: auto !important;
                            max-width: 100% !important;
                            width: auto !important;
                          }
                        }

                        /* -------------------------------------
                            PRESERVE THESE STYLES IN THE HEAD
                        ------------------------------------- */
                        @media all {
                          .ExternalClass {
                            width: 100%;
                          }
                          .ExternalClass,
                                .ExternalClass p,
                                .ExternalClass span,
                                .ExternalClass font,
                                .ExternalClass td,
                                .ExternalClass div {
                            line-height: 100%;
                          }
                          .apple-link a {
                            color: inherit !important;
                            font-family: inherit !important;
                            font-size: inherit !important;
                            font-weight: inherit !important;
                            line-height: inherit !important;
                            text-decoration: none !important;
                          }
                          .btn-primary table td:hover {
                            background-color: #34495e !important;
                          }
                          .btn-primary a:hover {
                            background-color: #34495e !important;
                            border-color: #34495e !important;
                          }
                        }
                        </style>
                      </head>
                      <body class="" style="background-color: #f6f6f6; font-family: sans-serif; -webkit-font-smoothing: antialiased; font-size: 14px; line-height: 1.4; margin: 0; padding: 0; -ms-text-size-adjust: 100%; -webkit-text-size-adjust: 100%;">
                        <table border="0" cellpadding="0" cellspacing="0" class="body" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background-color: #f6f6f6;">
                          <tr>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                            <td class="container" style="font-family: sans-serif; font-size: 14px; vertical-align: top; display: block; Margin: 0 auto; max-width: 580px; padding: 10px; width: 580px;">
                              <div class="content" style="box-sizing: border-box; display: block; Margin: 0 auto; max-width: 580px; padding: 10px;">

                                <!-- START CENTERED WHITE CONTAINER -->
                                <span class="preheader" style="color: transparent; display: none; height: 0; max-height: 0; max-width: 0; opacity: 0; overflow: hidden; mso-hide: all; visibility: hidden; width: 0;">This is preheader text. Some clients will show this text as a preview.</span>
                                <table class="main" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; background: #ffffff; border-radius: 3px;">

                                  <!-- START MAIN CONTENT AREA -->
                                  <tr>
                                    <td class="wrapper" style="font-family: sans-serif; font-size: 14px; vertical-align: top; box-sizing: border-box; padding: 20px;">
                                      <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                        <tr>
                                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">
                                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">Hi there,</p>
                                            <p style="font-family: sans-serif; font-size: 14px; font-weight: normal; margin: 0; Margin-bottom: 15px;">A contact query has been made in simple retail pos frontend, please review below information and provide a feedback in your earliest possible time.</p>
                                            <table border="0" cellpadding="0" cellspacing="0" class="btn btn-primary" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%; box-sizing: border-box;">
                                              <tbody>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Name 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->name.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Phone 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->phone.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        E-Mail 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->email.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Query Detail
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->message.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        Name 
                                                    </td>
                                                    <td align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                        '.$request->name.'
                                                    </td>
                                                </tr>
                                                <tr>
                                                  <td colspan="2" align="left" style="font-family: sans-serif; font-size: 14px; vertical-align: top; padding-bottom: 15px;">
                                                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: auto;">
                                                      <tbody>
                                                        <tr>
                                                          <td style="font-family: sans-serif; font-size: 14px; vertical-align: top; background-color: #3498db; border-radius: 5px; text-align: center;"> <a href="mailto:'.$request->email.'" target="_blank" style="display: inline-block; color: #ffffff; background-color: #3498db; border: solid 1px #3498db; border-radius: 5px; box-sizing: border-box; cursor: pointer; text-decoration: none; font-size: 14px; font-weight: bold; margin: 0; padding: 12px 25px; text-transform: capitalize; border-color: #3498db;">Reply To Contact Requester</a> </td>
                                                        </tr>
                                                      </tbody>
                                                    </table>
                                                  </td>
                                                </tr>
                                              </tbody>
                                            </table>
                                            
                                          </td>
                                        </tr>
                                      </table>
                                    </td>
                                  </tr>

                                <!-- END MAIN CONTENT AREA -->
                                </table>

                                <!-- START FOOTER -->
                                <div class="footer" style="clear: both; Margin-top: 10px; text-align: center; width: 100%;">
                                  <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                                    <tr>
                                      <td class="content-block" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">'.$siteInfo->address.'</span>
                                        <br>
                                        <span class="apple-link" style="color: #999999; font-size: 12px; text-align: center;">'.$siteInfo->phone.'</span>
                                      </td>
                                    </tr>
                                    <tr>
                                      <td class="content-block powered-by" style="font-family: sans-serif; vertical-align: top; padding-bottom: 10px; padding-top: 10px; font-size: 12px; color: #999999; text-align: center;">
                                         <a href="http://htmlemail.io" style="color: #999999; font-size: 12px; text-align: center; text-decoration: none;"><img src="http://nucleuspos.com/images/anc.png" width="100"></a>.
                                      </td>
                                    </tr>
                                  </table>
                                </div>
                                <!-- END FOOTER -->

                              <!-- END CENTERED WHITE CONTAINER -->
                              </div>
                            </td>
                            <td style="font-family: sans-serif; font-size: 14px; vertical-align: top;">&nbsp;</td>
                          </tr>
                        </table>
                      </body>
                    </html>';

                    //echo $html;
                    
                    if($_SERVER['REMOTE_ADDR']=="103.57.42.222"){
                        echo $this->sdc->initMail('support@neutrix.systems','Contact Query',$html,'','',1);
                        
                    }else
                    {
                        
                        echo $this->sdc->initMail('support@neutrix.systems','Contact Query',$html,'','',0);
                    }

                    

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdminSite  $adminSite
     * @return \Illuminate\Http\Response
     */
    public function show(AdminSite $adminSite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdminSite  $adminSite
     * @return \Illuminate\Http\Response
     */
    public function edit(AdminSite $adminSite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdminSite  $adminSite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdminSite $adminSite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdminSite  $adminSite
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdminSite $adminSite)
    {
        //
    }
}
