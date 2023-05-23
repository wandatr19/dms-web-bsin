<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function treebr(){
        return view('treebranch');
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

    // layer2 mechanical
    public function banbury(){
        return view('mechanical.layer2.banbury');
    }
    public function strainer(){
        return view('mechanical.layer2.strainer');
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
    public function plycut1()
    {
        return view('mechanical.layer2.plycutting1');
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
}
