<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Camp;
use App\Models\News;
use App\Models\Picture;
use App\Models\Video;
use App\Models\Donor;
use App\Models\HistoryDonation;
use App\Models\Msg;
use PDF;

class admin extends Controller
{
    // --------admin-------------- //

    public function adminDash(){

        $don=Donor::all();
        $user=User::all();
        $cam=Camp::all();
        $his=DB::table('history')
        ->select('history.*')
        ->where('history.isApproved', '=' , true)
        ->get();
        $pen=DB::table('history')
        ->select('history.*')
        ->where('history.isApproved', '=' , false)
        ->get();
        $um=DB::table('msg')
        ->select('msg.*')
        ->where('msg.is_read', '=' , false)
        ->get();

        return view('admin/dashboard')->with(['don'=>$don,'user'=>$user,'cam'=>$cam,'his'=>$his,'pen'=>$pen,'um'=>$um]);
    }
    
    public function addCamp(){
        return view('admin/addCampaign');
    }

    public function insCamp(Request $r){
        $r->validate([
            'name' => 'required',
            'campDesc' => 'required',
            'campImg' => 'required',
            ]);
            $fl=$r->file('campImg');
            $fn=time().$fl->getClientOriginalName();
            if(isset($fl))
            {
                $fl->move('images',$fn);
            }
            $obj=new Camp();
            $obj->name=ucwords($r->name);
            $obj->campDesc=$r->campDesc;
            $obj->campImg=$fn;
            $obj->save();
            return redirect(url('/admin/addCamp'))->with(['msg'=>'Campeign Added Successfuly !']);;
    }

    public function listCamp(){
        $res=DB::table('camp')
        ->orderby('camp.created_at', 'desc')
        ->get();
        return view('admin/listCampaign')->with(['camps'=>$res]);
    }

    public function delCamp(Request $r){
        $id=$r->id;

        $res=Camp::find($id);
        unlink("images/".$res->campImg);
        $res->delete();
        return redirect(url('admin/listCamp'));
    }

    public function editCamp(Request $r){
        $id=$r->id;

        $res=Camp::find($id);

        return view('admin/editCamp')->with(['c'=>$res]);
    }

    public function updCamp(Request $r){
            $id=$r->id;
            if($r->file('campImg') != null){
                $res=Camp::find($id);
                unlink("images/".$res->campImg);
                $fl=$r->file('campImg');
                $fn=time().$fl->getClientOriginalName();
                if(isset($fl))
                {
                    $fl->move('images',$fn);
                }
                $res->name=ucwords($r->name);
                $res->campDesc=$r->campDesc;
                $res->campImg=$fn;
                $res->update();
            }
            else{
                $res=Camp::find($id);
                $res->name=ucwords($r->name);
                $res->campDesc=$r->campDesc;
                $res->update();
            }
           
            return redirect(url('/admin/listCamp'));
    }

    public function addNews(){
        return view('admin/addNews');
    }

    public function insNews(Request $r){
        $r->validate([
            'name' => 'required',
            'date' => 'required',
            'newsImg' => 'required',
            ]);
            $fl=$r->file('newsImg');
            $fn=time().$fl->getClientOriginalName();
            if(isset($fl))
            {
                $fl->move('images',$fn);
            }
            $obj=new News();
            $obj->name=ucwords($r->name);
            $obj->date=$r->date;
            $obj->newsImg=$fn;
            $obj->save();
            return redirect(url('/admin/addNews'))->with(['msg'=>'News Added Successfuly !']);;
    }

    public function listNews(){
        $res=DB::table('news')
        ->orderby('news.created_at', 'desc')
        ->get();
        return view('admin/listNews')->with(['news'=>$res]);
    }

    public function delNews(Request $r){
        $id=$r->id;

        $res=News::find($id);
        unlink("images/".$res->newsImg);
        $res->delete();
        return redirect(url('admin/listNews'));
    }

    public function editNews(Request $r){
        $id=$r->id;

        $res=News::find($id);

        return view('admin/editNews')->with(['c'=>$res]);
    }

    public function updNews(Request $r){
        $id=$r->id;
        if($r->file('newsImg') != null){
            $res=News::find($id);
            unlink("images/".$res->newsImg);
            $fl=$r->file('newsImg');
            $fn=time().$fl->getClientOriginalName();
            if(isset($fl))
            {
                $fl->move('images',$fn);
            }
            $res->name=ucwords($r->name);
            $res->date=$r->date;
            $res->newsImg=$fn;
            $res->update();
        }
        else{
            $res=News::find($id);
            $res->name=ucwords($r->name);
            $res->date=$r->date;
            $res->update();
        }
       
        return redirect(url('/admin/listNews'));
}

    public function addImage(){
        return view('admin/addImage');
    }

    public function insImage(Request $r){
          
            if ($files=$r->file('images')) {
                foreach($files as $file){
                    $name=time().$file->getClientOriginalName();
                    $file->move('images',$name);
                    $obj=new Picture();
                    $obj->name=$name;
                    $obj->save();
                }
            }
           
            return redirect(url('/admin/addImage'))->with(['msg'=>'Images Uploaded Successfuly !']);
    }

    public function listImage(){
        $res=DB::table('picture')
        ->orderby('picture.created_at', 'desc')
        ->get();
        return view('admin/listImage')->with(['imgs'=>$res]);
    }

    public function delImage(Request $r){
        $id=$r->id;

        $res=Picture::find($id);
        unlink("images/".$res->name);
        $res->delete();
        return redirect(url('admin/listImage'));
    }

    public function addVideo(){
        return view('admin/addVideo');
    }

    public function listVideo(){
        $res=DB::table('video')
        ->orderby('video.created_at', 'desc')
        ->get();
        return view('admin/listVideo')->with(['vids'=>$res]);
    }

    
    public function insVideo(Request $r){
          
        if ($files=$r->file('videos')) {
            foreach($files as $file){
                $name=time().$file->getClientOriginalName();
                $file->move('videos',$name);
                $obj=new Video();
                $obj->name=$name;
                $obj->save();
            }
        }
       
        return redirect(url('/admin/addVideo'))->with(['msg'=>'Videos Uploaded Successfuly !']);
    }

    public function delVideo(Request $r){
        $id=$r->id;

        $res=Video::find($id);
        unlink("videos/".$res->name);
        $res->delete();
        return redirect(url('admin/listVideo'));
    }

    public function alllDonation(){
        $res=DB::table('history')
        ->join('donor', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->orderby('history.created_at', 'desc')
        ->get();
        return view('admin/allDonation')->with(['dons'=>$res]);
    }

    public function verify(Request $r){
        $id=$r->id;

        $res=HistoryDonation::find($id);
        $res->isApproved=true;
        $res->update();
        return redirect(url('admin/allDonation'));
    }

    public function editRemarks(Request $r){
        $id=$r->id;

        $res=HistoryDonation::find($id);

        return view('admin/editRemarks')->with(['d'=>$res]);
    }

    public function updRemarks(Request $r){
        $id=$r->id;
        $res=HistoryDonation::find($id);
        $res->remarks=$r->remarks;
        $res->update();

        return redirect(url('/admin/allDonation'));
    }
    public function penDonation(){
        $res=DB::table('history')
        ->join('donor', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->where('history.isApproved', '=' , false)
        ->orderby('history.created_at', 'desc')
        ->get();
        return view('admin/penDonation')->with(['dons'=>$res]);
    }

    public function verDonation(){
        $res=DB::table('history')
        ->join('donor', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->where('history.isApproved', '=' , true)
        ->orderby('history.created_at', 'desc')
        ->get();
        return view('admin/verDonation')->with(['dons'=>$res]);
    }

    public function donDonation(){
        $res=DB::table('donor')
        ->select('donor.created_at as date','donor.*')
        ->orderby('donor.created_at', 'desc')
        ->get();
        return view('admin/donDonation')->with(['dons'=>$res]);
    }

    public function viewDonHis(Request $r){
        $id=$r->id;
        $res=DB::table('history')
        ->join('donor', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->where('donor.donor_id', '=' , $id)
        ->orderby('history.created_at', 'desc')
        ->get();

        return view('/admin/viewDonHis')->with(['his'=>$res]);
    }
    public function allAdmin(){
        $res=DB::table('users')
        ->select('users.*')
        ->get();

        return view('/admin/allAdmin')->with(['adm'=>$res]);
    }

    public function addAdmin(){

        return view('admin/addAdmin');
    }

    public function delAdmin(Request $r){
        $id=$r->id;

        $res=User::find($id);
        $res->delete();
        return redirect(url('admin/allAdmin'));
    }

    public function insAdmin(Request $r){
        $r->validate([
            'name' => 'required',
            'mobile' => array(
                        'required',
                        'regex:/^[6-9][0-9]{9}$/',
                        'min:10'
                    ),
            'password' => 'required|min:6',
            ]);

            $obj=new User();
            $obj->name=$r->name;
            $obj->email=$r->mobile;
            $obj->password=bcrypt($r->password);
            $obj->save();
            return redirect(url('/admin/addAdmin'))->with(['msg'=>'Admin Added Successfuly !']);;
    }

    public function allMsg(){
        $res=DB::table('msg')
        ->select('msg.*')
        ->orderby('msg.created_at','desc')
        ->get();

        return view('/admin/allMsg')->with(['msg'=>$res,'h'=>"All"]);
    }

    public function unreadMsg(){
        $res=DB::table('msg')
        ->select('msg.*')
        ->orderby('msg.created_at','desc')
        ->where('msg.is_read','=',false)
        ->get();

        return view('/admin/allMsg')->with(['msg'=>$res,'h'=>"Unread"]);
    }

    public function readMsg(){
        $res=DB::table('msg')
        ->select('msg.*')
        ->orderby('msg.created_at','desc')
        ->where('msg.is_read','=',true)
        ->get();

        return view('/admin/allMsg')->with(['msg'=>$res,'h'=>"Read"]);
    }

    public function viewMsg(Request $r){
        $id=$r->id;
        $res=Msg::find($id);

        return view('/admin/viewMsg')->with(['m'=>$res]);
    }

    public function markMsg(Request $r){
        $id=$r->id;
        $res=Msg::find($id);
        $res->is_read=true;
        $res->update();
        return redirect(url('/admin/readMsg'));
    }

    public function delMsg(Request $r){
        $id=$r->id;

        $res=Msg::find($id);
        $res->delete();
        return redirect(url('admin/allMsg'));
    }

    // --------end of admin-------------- //

    // --------Authenticatin-------------- //

    public function login(){

        return view('admin/login');
    }

    public function lc(Request $r){
        $m=$r->mobile;
        $p=$r->password;
        $validator = Validator::make($r->all(), [
            'email' => 'required|exists:users',
            'password' => 'required|string'
        ]);
        if (User::where('email', '=',$m)->exists()) {
            if(Auth::attempt(["email"=>$m,"password"=>$p])){
                return redirect(url('/admin/dash'));
            }else{
                return redirect(url('admin/login'))->with(["message"=>"Invalid Login Credentials !"]);
            }
         }
         else
        {
            return redirect(url('admin/login'))->with(["message"=>"Mobile no.: ".$m." Not Registered As Admin !"]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }

    public function changePass(){
        return view('admin/changePass');
    }

    public function updPass(Request $r){
        $r->validate([
            'password' => 'required|min:6|confirmed',
            ]);

            $res=User::find(Auth::user()->id);
          
            $res->password=bcrypt($r->password);
            $res->update();
            return redirect(url('/admin/changePass'))->with(['msg'=>"Password Changed Successfuly !"]);
    }

    // --------End Of Authenticatin-------------- //



    // --------user-------------- //

    public function allCamp(){
        $res=DB::table('camp')
        ->orderby('camp.created_at', 'desc')
        ->get();
        return view('front/campaign')->with(['camps'=>$res]);
    }

    public function about(){

        return view('front/about');
    }

    public function blog(){
        $res=DB::table('news')
        ->orderby('news.date', 'desc')
        ->get();
        return view('front/blog')->with(['news'=>$res]);;
    }

    public function gallery(){
        $pics=DB::table('picture')
        ->orderby('picture.created_at', 'desc')
        ->get();

        $vids=DB::table('video')
        ->orderby('video.created_at', 'desc')
        ->get();
        return view('front/galary')->with(['pics'=>$pics,'vids'=>$vids]);
    }

    public function contact(){

        return view('front/contact');
    }

    public function donation(Request $r){
        $camp_id=$r->camp_id;
        $res=DB::table('camp')
        ->where('camp_id', '=', $camp_id)
        ->first();
        return view('front/donate')->with(['c'=>$res]);
    }

    public function donateReg(Request $r){
        $camp_id=$r->camp_id;
        $mobile=$r->mobile;
        if (Donor::where('mobile', '=', $mobile)->exists()){
            $res=DB::table('donor')
            ->where('mobile', '=', $mobile)
            ->first();
            return view('front/payment')->with(['donor'=>$res,'camp_id'=>$camp_id]);
        }
        elseif (!(Donor::where('mobile', '=', $mobile)->exists())) {
            return view('front/payment')->with(['mobile'=>$mobile,'camp_id'=>$camp_id]);
        }
    }

    public function insDonation(Request $r){

        $camp_id=$r->camp_id;
        $amount=$r->amount;
        $fl=$r->file('pimg');
        $fn=time().$fl->getClientOriginalName();
        if(isset($fl))
        {
            $fl->move('images',$fn);
        }
        $mobile=$r->mobile;
        $name=$r->name;
        $address=$r->address;
        $pin=$r->pin;
        $district=$r->district;
        $state=$r->state;
        $country=$r->country;
        $idNumber=$r->idNumber;
        if (isset($r->donor_id)){
            $donor_id=$r->donor_id;
            $obj2=new HistoryDonation();
            $obj2->donor_id=$donor_id;
            $obj2->camp_id=$camp_id;
            $obj2->amount=$amount;
            $obj2->pay_img=$fn;
            $obj2->save();

        }
        elseif (!isset($r->donor_id)) {
            $obj=new Donor();
            $obj->name=$name;
            $obj->mobile=$mobile;
            $obj->address=$address;
            $obj->pin=$pin;
            $obj->district=$district;
            $obj->state=$state;
            $obj->country=$country;
            $obj->idNumber=$idNumber;
            $obj->save();

            $newDonorId = DB::getPdo()->lastInsertId();

            $obj2=new HistoryDonation();
            $obj2->donor_id=$newDonorId;
            $obj2->camp_id=$camp_id;
            $obj2->amount=$amount;
            $obj2->pay_img=$fn;
            $obj2->save();

        }
        return view('front/success');
    }
    public function blogDetails(Request $r){
        $news_id=$r->news_id;
        $obj=DB::table('news')
        ->where('news_id', '=', $news_id)
        ->first();
        return view('front/blogDetails')->with(['news'=>$obj]);
    }

    
    public function listDonation(){

        return view('front/listDonation');
    }

    public function allDonation(Request $r){
        $mobile=$r->mobile;
        $res=DB::table('donor')
        ->join('history', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->where('mobile', '=', $mobile)
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->orderby('history.created_at', 'desc')
        ->get();


        return view('front/allDonation')->with(['his'=>$res]);
 
    }

    public function printPDF(Request $r){
        $history_id=$r->history_id;
        $res=DB::table('history')
        ->join('donor', 'donor.donor_id', '=', 'history.donor_id')
        ->join('camp', 'history.camp_id', '=', 'camp.camp_id')
        ->where('history_id', '=', $history_id)
        ->select('history.created_at as date','donor.*','donor.name as d_name','history.*', 'camp.*')
        ->first();
        $pdf=PDF::loadview('front.pdf',compact('res'));

        return $pdf->download($history_id.'_acknowledgement.pdf');
    }

    public function sendMsg(Request $r){

        $n=$r->name;
        $e=$r->email;
        $m=$r->mobile;
        $msg=$r->msg;

        $obj=new Msg();
        $obj->name=$n;
        $obj->email=$e;
        $obj->mobile=$m;
        $obj->msg_body=$msg;
        $obj->save();
        return redirect('/contact')->with(['msg'=>"Message sent successfuly !"]);


    }
    // --------end of user-------------- //
}