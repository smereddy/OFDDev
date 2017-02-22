<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Http\UploadedFile;
//use Intervention\Image\ImageManagerStatic as Image;

trait FileUploadTrait
{

    /**
     * File upload trait used in controllers to upload files
     */


    public function saveFiles(Request $request)
    {
        if (! file_exists(public_path('uploads'))) {
            mkdir(public_path('uploads'), 0777);
            mkdir(public_path('uploads/thumb'), 0777);
        }

        $finalRequest = $request;

        foreach ($request->all() as $key => $value) {
            if ($request->hasFile($key)) {
                if ($request->has($key . '_max_width') && $request->has($key . '_max_height')) {
                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $file     = $request->file($key);
                    $image    = Image::make($file);
                    if (! file_exists(public_path('uploads/thumb'))) {
                        mkdir(public_path('uploads/thumb'), 0777, true);
                    }
                    Image::make($file)->resize(50, 50)->save(public_path('uploads/thumb') . '/' . $filename);
                    $width  = $image->width();
                    $height = $image->height();
                    if ($width > $request->{$key . '_max_width'} && $height > $request->{$key . '_max_height'}) {
                        $image->resize($request->{$key . '_max_width'}, $request->{$key . '_max_height'});
                    } elseif ($width > $request->{$key . '_max_width'}) {
                        $image->resize($request->{$key . '_max_width'}, null, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    } elseif ($height > $request->{$key . '_max_width'}) {
                        $image->resize(null, $request->{$key . '_max_height'}, function ($constraint) {
                            $constraint->aspectRatio();
                        });
                    }
                    $image->save(public_path('uploads') . '/' . $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));

                } else {

                    $filename = time() . '-' . $request->file($key)->getClientOriginalName();
                    $request->file($key)->move(public_path('uploads'), $filename);
                    $finalRequest = new Request(array_merge($finalRequest->all(), [$key => $filename]));
                }
            }
        }

        return $finalRequest;
    }
    public function uploadFiles(Request $request){
//dd($request);



            $file = $request->file('related_file');
//        dd($file);
            // getting all of the post data
//            $file = $request->photo;
            // Making counting of uploaded images
            $file_count = count($file);
//        dd($file_count);
            // start count how many uploaded
            $uploaded = 0;

            foreach($file as $upload) {

//                $rules = array('file' => 'required'); //'required|mimes:png,gif,jpeg,txt,pdf,doc'
//                $validator = Validator::make(array('file'=> $upload), $rules);
//                if($validator->passes()){
                    $destinationPath = 'uploads';
                    $filename = $upload->getClientOriginalName();
                    $image = Image::make($upload);
                    if (! file_exists(public_path('uploads/thumb'))) {
                        mkdir(public_path('uploads/thumb'), 0777, true);
                    }
                    Image::make($upload)->resize(50, 50)->save(public_path('uploads/thumb') . '/' . $filename);

                    $upload->move($destinationPath, $filename);

                    $uploaded ++;
//                }
            }
            if($uploaded == $file_count){
//                Session::flash('success', 'Upload successfully');
//                dd($request);
//                request is images as an array
//                need to process it in the controller
                return $request;
            }
//            else {
//                return "do it again";
//            }


    }
}