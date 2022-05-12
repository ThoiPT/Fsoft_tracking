<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SkillController extends Controller
{
    public function index()
    {
        return view('Skill/Skill_Create');
    }
    public function list()
    {
        $list = DB::table('skills')->get()->all();
        return view("Skill/Skill_List",compact('list'));
    }

    public function store(Request $request)
    {
        $list = DB::table('skills')->get()->all();
        $skill = $request->input('skill');
        $status = $request->input('status');
        DB::table('skills')->insert([
            'skillName' => $skill,
            'status' => $status
        ]);
        return view('Skill/Skill_List',compact('list'));
    }

    public function delete($idSkill)
    {
        $list = DB::table('skills')->get()->all();
        $deleteSkill = DB::table('skills')->where('idSkill', '=', $idSkill)->delete();
        return view("Skill/Skill_List",compact('list'));
    }

    public function testGit()
    {

    }
}
