<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(User $user)
    {
        $favorites = $user->favorites()->with('document')->get();
        return view('home', compact('favorites'));
    }
    public function treebr(){
        $documents = Document::all();
        return view('treebranch', ['documents' => $documents]);
    }
    public function masterlist(){
        return view('masterlist');
    }
    // public function adduser(){
    //     return view('admin.adduser');
    // }
    public function listuser(){
        return view('admin.listuser');
    }
    public function history(){
        return view('admin.history');
    }
    public function mech(){
        return view('mechanical.mech');
    }
    public function elect(){
        return view('electrical.electrical');
    }
    public function util(){
        return view('utility.utility');
    }
    public function others(){
        return view('others.others');
    }
    public function civil(){
        return view('civil.civil');
    }
    public function show($id)
    {
        $documents = Document::all();
        $document = Document::findOrFail($id);
        $pdfPath = storage_path($document->path);
        return view('mechanical.layer2.banbury', compact('document', 'pdfPath'));

        // Lakukan logika untuk membuka file PDF
    }
    public function utility(){
        return view('mechanical.layer2.utility');
    }
    public function polyfilm(){
        return view('mechanical.layer2.polyfilm');
    }
    public function calender(){
        return view('mechanical.layer2.calender');
    }
    public function bexter(){
        return view('mechanical.layer2.bexter');
    }
    public function qct(){
        return view('mechanical.layer2.qct');
    }
    public function ndct()
    {
        return view('mechanical.layer2.1n-dct');
    }
    public function dlpn_ct()
    {
        return view('mechanical.layer2.8ct');
    }
    public function bead()
    {
        return view('mechanical.layer2.bead');
    }
    public function monowire()
    {
        return view('mechanical.layer2.monowire');
    }
    public function rtb()
    {
        return view('mechanical.layer2.rtb');
    }
    public function plycutting1()
    {
        return view('mechanical.layer2.plycutting1');
    }
    public function plycutting2()
    {
        return view('mechanical.layer2.plycutting2');
    }
    public function srbelt1()
    {
        return view('mechanical.layer2.srbelt1');
    }
    public function srbelt2()
    {
        return view('mechanical.layer2.srbelt2');
    }
    public function psp()
    {
        return view('mechanical.layer2.psp');
    }
    public function il2rh()
    {
        return view('mechanical.layer2.il2rh');
    }
    public function kbn2()
    {
        return view('mechanical.layer2.kbn2');
    }
    public function k1s()
    {
        return view('mechanical.layer2.k1-s');
    }
    public function hf1()
    {
        return view('mechanical.layer2.hf-1');
    }
    public function cure()
    {
        return view('mechanical.layer2.cure');
    }
    public function apdd1()
    {
        return view('mechanical.layer2.apdd-1');
    }
    public function inner_apdd1()
    {
        return view('mechanical.layer2.inner_apdd1');
    }
    public function white_buff2()
    {
        return view('mechanical.layer2.white_buff2');
    }
    public function rim_flow()
    {
        return view('mechanical.layer2.rim_flow');
    }
    public function uniformity()
    {
        return view('mechanical.layer2.uniformity');
    }
    public function hp_lrp()
    {
        return view('mechanical.layer2.hp_lrp');
    }
    public function lw_buff()
    {
        return view('mechanical.layer2.lw_buff');
    }
    public function rework()
    {
        return view('mechanical.layer2.rework');
    }
    public function tire_repair()
    {
        return view('mechanical.layer2.tire_repair');
    }
    public function furniture()
    {
        return view('mechanical.layer2.furniture');
    }
    public function cement_house()
    {
        return view('mechanical.layer2.cement_house');
    }

}
