<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreSkillRequest;
use App\Http\Resources\v1\SkillCollection;
use App\Http\Resources\v1\SkillResource;
use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function index()
    {
        return new SkillCollection(Skill::all());
    }

    public function store(StoreSkillRequest $request)
    {
        skill::create($request->validated());
        return response()->json("Skill Created");
    }

    public function show(Skill $skill)
    {
        return new SkillResource($skill);
    }

    public function update(StoreSkillRequest $request, Skill $skill)
    {
        $skill->update($request->validated());
        return response()->json("Skill updated");
    }

    public function destroy(Skill $skill)
    {
        $skill->delete();
        return response()->json("Skill delted");
    }


}
