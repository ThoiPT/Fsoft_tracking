<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{
    public function index()
    {
        $listSkill = DB::table('skills')->get()->all();
        $request = DB::table('requests')->get()->all();

        return view('Request/Request_Create', compact('listSkill','request'));
    }

    public function store(Request $request)
    {
        $idUser = Auth::user()->id;
        $title = $request->input('title');
        $skill = $request->input('skill');
        $other = $request->input('other');
        $experience = $request->input('experience');
        $recruits = $request->input('recruits');
        $level = $request->input('level');
        $open = $request->input('open');
        $close = $request->input('close');
        $description = $request->input('editor');
        $status = $request->input('status_re');

        foreach ($other as $otherList)
        {
            $db = DB::table('requests')->insert([
            'title'=>$title,
            'skill_id'=>$skill,
            'other_id'=>$otherList,
            'experience'=>$experience,
            'numRecruits'=>$recruits,
            'level'=>$level,
            'open'=>$open,
            'close'=>$close,
            'description'=>$description,
            'status'=>$status
        ]);

        // Lấy ID cuối cùng trong quảng request để insert vào cột reuqest_id trong request_skill
        $lastID = DB::table('requests')->latest('id')->first()->id;
        // insert
        $db1 = DB::table('request_skill')->insert([
            'request_id'=>$lastID,
            'skill_id'=>$skill,
            'user_id'=>$idUser,
            'other_id'=>$otherList
        ]);
        }
        dd($db);
        //return view("Request/Request_List");
    }


    public function edit($id)
    {
        $data = DB::table('requests') -> where('id', $id) -> get() -> toArray();
        return view('Request/Request_Update',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $update = DB::table('requests')
            ->where('id',$id)
            ->update([
                'status'=>$request->input('status_re')
            ]);
        dd($update);
    }

    public function list()
    {
        $request = DB::select('SELECT requests.id, requests.title, request_skill.request_id
                                    ,request_skill.skill_id,skills.skillName, request_skill.other_id
                                    , users.email, requests.`status`, requests.description
                                    FROM requests
                                    JOIN request_skill ON request_skill.request_id = requests.id
                                    JOIN skills ON skills.idSkill = request_skill.skill_id
                                    JOIN users ON users.id = request_skill.user_id');
        $getIDSkill = DB::table('skills')->get()->all();
        return view("Request/Request_List",compact('request', 'getIDSkill'));
    }
}
