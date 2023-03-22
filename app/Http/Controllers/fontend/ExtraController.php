<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\WriterValidation;
use App\Mail\WriterInfoMail;
use App\Models\BewriterInfo;
use App\Models\ContactUs;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Redirect;

class ExtraController extends Controller
{

    public function bewriterInfos()
    {

        return view('frontend.pages.bewritersignup');
    }

    public function storeInfos(WriterValidation $request)
    {
        $storeInfo = new BewriterInfo();
        $storeInfo->fname = $request->fname;
        $storeInfo->lname = $request->lname;
        $storeInfo->email = $request->email;
        $storeInfo->dob = $request->dob;
        $storeInfo->phone = $request->phone;
        $storeInfo->country = $request->country;
        $storeInfo->comments = $request->comments;

        if ($request->hasFile('cv')) {
            $originName = $request->file('cv')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $fileName = preg_replace("/[^a-zA-Z0-9.]/", "", $fileName);
            $extension = $request->file('cv')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;
            $request->file('cv')->move(public_path('file/cv'), $fileName);
            $storeInfo->cv = "$fileName";
        }


        // if ($cv = $request->file('cv')) {
        //     $destinationPath = 'public/file/cv/';
        //     $cvName = date('YmdHis') . "." . $cv->getClientOriginalExtension();
        //     $cv->move($destinationPath, $cvName);
        //     $storeInfo->cv = "$cvName";
        // }
        $storeInfo->save();
        $encrypted = Crypt::encryptString($storeInfo->id);
        $writerName = [
            'fname' => $request->fname,
            'lname' => $request->lname,
            'data' => $encrypted,
        ];
        Mail::to($request->email)->send(new WriterInfoMail($writerName));
        return redirect()->back()->with('sucess', 'Your request has been submited, Please Check your Email inbox or Spam, We have sent you a writing test link there.');
    }

    public function storeContactUs(Request $request)
    {

        $storeContactUS = new ContactUs();
        $storeContactUS->fname = $request->fname;
        $storeContactUS->lname = $request->lname;
        $storeContactUS->email = $request->email;
        $storeContactUS->subject = $request->subject;
        $storeContactUS->message = $request->message;
        $storeContactUS->save();
        return redirect()->back()->with('sucess', 'Thanks for Your feedback');
    }

    public function writerExm($data)
    {
        $decrypted = Crypt::decryptString($data);
        $tempWriterInfos = BewriterInfo::find($decrypted);
        $to = Carbon::createFromFormat('Y-m-d H:s:i', $tempWriterInfos->created_at);
        $from = Carbon::createFromFormat('Y-m-d H:s:i', Carbon::now());
        $diff_in_hours = $to->diffInHours($from);
        if ($diff_in_hours <= 72) {
            return view('frontend.pages.writerexm', compact('tempWriterInfos'));
        } else {
            abort(401);
        }
    }
    public function storeexm(Request $request, $id)
    {

        $storeExm = BewriterInfo::find($id);

        $storeExm->answer = $request->answer;
        $storeExm->exam = 1;
        $storeExm->time = $request->timespend;
        $storeExm->update();
        return redirect()->back()->with('sucess', 'Thanks for participate, You will get update soon');
    }
}
