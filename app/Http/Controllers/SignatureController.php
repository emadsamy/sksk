<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Signature;
use Storage;

class SignatureController extends Controller
{
    public function insertSignature(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'date' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()->all()]);
        }

        $file = $request->imgBase64;
        $base64_str   = substr($file, strpos($file, ",")+1);
        $imageDecoded = base64_decode($base64_str);
        if(explode(';', $file)[0]) {
          $fileType   = explode(';', $file)[0];
          $fileType   = explode('/', $fileType)[1];
           if ($fileType == 'svg+xml') {
                $fileType = 'svg';
            }
        }
        $fileName     = date('Y-m-d-h-i-s').'.'.$fileType;

        Storage::disk('public')->put('signatures/'.$fileName, $imageDecoded);

        $data = new Signature();
        $data->image_name = $fileName;
        $data->image_path = url('storage/signatures/'.$fileName);
        $data->name = $request->name;
        $data->date = $request->date;
        $data->save();

        return response()->json([
            'success' => true,
            'data'=> $data,
        ]);
    }

    public function view(Request $request) {

        $data = Signature::orderBy('id', 'desc')->get();
        $count = Signature::count();

        return view('archives', ['data' => $data, 'count' => $count]);

        // return response()->json([
        //     'success' => true,
        //     'data' => $data,
        //     'count' => $count
        // ]);
    }
}
