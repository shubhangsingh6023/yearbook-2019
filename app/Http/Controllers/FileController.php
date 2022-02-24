<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Intervention\Image\Facades\Image as Image;
use Auth;
class FileController extends Controller
{
	 /*
    -------------------------------------------------------------------------------
    function upload_pic_moto()
    -------------------------------------------------------------------------------
        This function upload the profile pic in uploads/ folder
        It also validates the files for proper image fiel and size < 500 Kb


    */
        public function __construct()
        {
        	$this->middleware('auth');
        }
        public function upload_pic_moto(Request $request)
        {
        	$user = Auth::user();
        	if($request->file('fileToUpload'))
        	{
        		$this->validate($request, [

        			'fileToUpload' => 'image|mimes:jpeg,png,jpg,gif,svg|max:500',

        		]);
				$image = $request->file('fileToUpload');//image
				$input['imagename'] = $user->rollno.'.'.$image->getClientOriginalExtension();//name of file
				$destinationPath = public_path('/uploads');//destination of image in public/uploads
				if($image->move($destinationPath, $input['imagename']))
			{

				$user->pro_pic = 'uploads/'.$input['imagename'];
				$thumbnail = Image::make($user->pro_pic)->resize(150, 150);
				$target = public_path('thumbnails/profilePic/'.$input['imagename']);
				$thumbnail->save($target);
				$user->thumbnail = 'thumbnails/profilePic/'.$input['imagename'];
				if(request('motto'))
				{
					$user->view_self = request('motto');//edit 'view_self' column of the current user
				}
				$user->save();
				return back()->with('message','Your image was uploaded.');
				/*
					This message is stores in flashed session data
				*/
				}
				else
				{
					return back()->with('message','Sorry, there was an error uploading your file.');
				/*
					This message is stores in flashed session data
				*/
				}
			}
			else
			{
				if(request('motto'))
				{
					$user->view_self = request('motto');
					$user->save();
				}
				return back();
			}
		}
	}
