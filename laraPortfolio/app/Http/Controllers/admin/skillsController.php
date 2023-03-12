<?php

namespace App\Http\Controllers\admin;

use App\Models\skill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class skillsController extends Controller
{
    public function createSkillsSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "skill_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "progress" => "required|numeric",
                "sort" => "required|numeric",
            ],
            [
                'skill_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );

        $skill = new skill();
        $skill->skill_name = $req->skill_name;
        $skill->progress = $req->progress;
        $skill->sort = $req->sort;
        $skill->status = $req->status;
        $skill->created_by = Auth::user()->id;
        $skill->save();
        return Redirect::back()->with('msg', 'Skill has been created successfully!');
    }

    public function viewSkills()
    {
        $skills = skill::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.skills.view-skills', compact('skills'));
    }

    public function editSkills($skill_id)
    {
        $skill = skill::where('id', '=', $skill_id)->first();
        $skills = skill::where('created_by', '=', Auth::user()->id)->orderBy('sort')->get();
        return view('admin.skills.update-skills', compact('skill', 'skills'));
    }

    public function editSkillsSubmit(Request $req)
    {
        $this->validate(
            $req,
            [
                "skill_name" => "required|string|regex:/^[A-Z a-z,.-]+$/i",
                "progress" => "required|numeric",
                "sort" => "required|numeric",
            ],
            [
                'skill_name.regex' => 'Name cannot contain special characters or numbers.',
            ]
        );
        $skill = skill::where('id', '=', $req->skill_id)->first();
        $skill->skill_name = $req->skill_name;
        $skill->progress = $req->progress;
        $skill->sort = $req->sort;
        $skill->status = $req->status;
        $skill->update();
        return Redirect::back()->with('msg', 'Skill has been updated successfully!');
    }

    public function deleteSkills($skill_id)
    {
        $skill = skill::where('id', '=', $skill_id)->first();
        $skill->delete();
        return Redirect::back()->with('msg', 'Skill has been deleted successfully!');
    }
}
