<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PagesController extends Controller
{
    public function main_page()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('project_admin_pages.buildings2.buildings_map',
        ['user_id'=>$user_id,
        'user_name'=>$user_name,
        'user_email'=>$user_email
        ]);
    }

    public function building_details(){
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('buildings')
            ->select('id','building_no','street_no','citizen_name','floors_count','latitude','longitude','created_at','updated')
//             ->where('citizen_name','like','%محمد%')
//            ->where('street_no','=',2010)
//            ->where('floors_count','>',2)
            ->get();

        return view('project_admin_pages.buildings2.buildings_details',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }


    public function buildings_page()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('project_admin_pages.buildings.buildings_page',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email
            ]);
    }
    public function buildings_table_page()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('buildings')
            ->join('citizens','citizens.building_id','buildings.id')
            ->select('buildings.id','building_no','street_no','resident_name','floors_count','latitude','longitude',
            'citizen_name','citizen_status','floor')
//             ->where('citizen_name','like','%محمد%')
//            ->where('buildings.street_no','=',1630)
//            ->where('floors_count','>',2)
            ->get();

        return view('project_admin_pages.buildings.buildings_table_page',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }



    public function building_citizens()
    {
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;

        $buildings_query = DB::table('citizens')
//            ->join('buildings','buildings.id','citizens.id')
//            ->select('building_id','citizens.citizen_name','citizen_status','floor','building_no','latitude','longitude','street_no','buildings.citizen_name as citizen','floors_count',)
//            ->select('building_id','citizens.citizen_name','citizen_status','floor','latitude','longitude','building_no')
            ->select('id','building_id','resident_name','citizen_status','floor')
//             ->where('citizen_name','like','%محمد%')
//            ->where('street_no','=',2010)
//            ->where('floors_count','>',2)
            ->get();

        return view('project_admin_pages.buildings.buildings_table_page_c',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email,
                'buildings_query'=>$buildings_query
            ]);
    }


    public function buildings_map(){
        $user_id = Auth::user()->id;
        $user_name = Auth::user()->name;
        $user_email = Auth::user()->email;
        return view('project_admin_pages.buildings2.buildings_map',
            ['user_id'=>$user_id,
                'user_name'=>$user_name,
                'user_email'=>$user_email
            ]);
    }




}
