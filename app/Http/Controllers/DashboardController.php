<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Product_user;
use DB;
use App\Berita;
use App\Vismis;
class DashboardController extends Controller
{
     public function shop() {
        $data['subtitle'] = "Shop";
        $data['product'] = Product_user::with('user')->paginate(6);
        return view('dashboard.shop',$data);
    }

    public function detail_shop($id) 
    {
        // $data['product'] = Product_user::with('user')->select('product_users','id');
        $data['subtitle'] = "Detail Shop";
        $data['product'] =  Product_user::with('user')
                            ->where('id',$id)->get();
        $data['product_random'] = Product_user::with('user')->inRandomOrder()->limit(5)->get();
        return view('dashboard.detail-shop',$data); 
    }
    public function dashboard() {
        $data['subtitle'] = "Dashboard";
        $data['product_random'] = Product_user::with('user')->inRandomOrder()->limit(5)->latest()->get();
        $data['berita_random'] = Berita::with('user')->inRandomOrder()->limit(5)->latest()->get();
        return view('dashboard.dashboard',$data);
    }
    
     public function berita() {
        $data['subtitle'] = "Berita";
        $data['berita'] = DB::table('beritas')->paginate(6);
        return view('dashboard.berita',$data);
    }

    public function detail_berita($id) {
        $data['subtitle'] = "Detail Berita";
        $data['berita'] =  Berita::with('user')
                            ->where('id',$id)->get();
        $data['berita_random'] = Berita::with('user')->inRandomOrder()->limit(5)->latest()->get();
        return view('dashboard.detail-berita',$data);
    }

    public function contact() {
        $data['subtitle'] = "Contact";
        return view('dashboard.contact',$data);
    }

     public function contact_store(Request $request) {
        $request->validate ([
            'name'      => 'required:contacts',
            'email'     => 'required',
            'message'   => ' ',
        ]);

        $contact = new Contacts();
        $contact->name      = $request->name;
        $contact->email     = $request->email;
        $contact->message   = $request->message;
        $contact->save();

        return redirect(route('dashboard.contact'))->with('pesan','Pesan Berhasil dikirim');
    }

    public function search(Request $request) {
        $data['subtitle'] = "Search";
        $search = $request->search;
		$data['berita'] = Berita::where('judul','like',"%".$search."%")->paginate(6);
		$data['product'] = Product_user::where('judul','like',"%".$search."%")->paginate(6);
		return view('dashboard.search',$data);
    }

    public function vismis() {
        $data['subtitle'] = "Visi & Misi";
        $data['vismis'] = Vismis::all();
        return view('dashboard.vismis',$data);
    }


    //INI KATEGORI KAYANYA
    public function catHasilHutan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Hasil Hutan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catRumahTangga(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Rumah Tangga"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catManufaktur(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Manufaktur"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPengeringanIkan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pengeringan Ikan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPengolahanMakanan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pengolahan Makanan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPertenunan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pertenunan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPengolahanIkan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pengolahan Ikan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPerebusanIkanTeri(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Perebusan Ikan Teri"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPengawetanIkan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pengawetan Ikan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPengasapanIkan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pengasapan Ikan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPembekuanIkan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pembekuan Ikan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPakaianJadi(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pakaian Jadi"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catKerajinan(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Kerajinan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    } 
    public function catIndustriBerbasisLBA(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Industri Berbasis Lumatan Biota Air"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catBatik(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Batik"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catLogamElektro(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Logam Dan Elektronik"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catKerajinanUmum(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Kerajinan Umum"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catKimia(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Kimia Dan Bahan Bangunan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catPerahu(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pembuatan Perahu Nelayan"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catEsBatuBelah(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pabrik Es Batu Belah"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catEsAntang(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Pabrik Es Antang"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catIkanAsin(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Ikan Asin"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }
    public function catMinyakKelapa(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Minyak Kelapa"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }    
    public function catKayu(Request $request){
        $data['product'] = Product_user::where('kategori','like',"%"."Kayu"."%")->paginate(6);
		return view('dashboard.kategori-product',$data);
    }


    public function about() {
        $data['subtitle'] = "About";
        return view('dashboard.about',$data);
    }


    
}
