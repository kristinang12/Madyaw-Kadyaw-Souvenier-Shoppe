<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementFormRequest;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use App\Models\Announcement;



class AnnouncementController extends Controller
{
    public function create(){

        return view('announcement.create');

    }
    public function store(AnnouncementFormRequest $request){

        $request->validated([
            'header'=>'required',
            'sub_header'=>'required',
            'description'=>'required',
            'photo'=>'required',
            'user_id'=>'required',
        ]);


        $announcement = new Announcement;
        $announcement->header = $request->header;
        $announcement->sub_header = $request->sub_header;
        $announcement->description = $request->description;
        $announcement->photo = $request->photo;
        $announcement->user_id = $request->user_id;
        $announcement->save();
        return redirect('/add-announcement')->with('message', 'Announcement Added Successfully');

    }
}
