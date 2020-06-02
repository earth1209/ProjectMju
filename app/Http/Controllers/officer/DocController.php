<?php

namespace App\Http\Controllers\officer;

use App\Document;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Session;



class DocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('officer.internship_document')->with('document',Document::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('officer.internship_document_create')->with('document',Document::all());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'name_documents' => 'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:10000'
    //     ]);

    //     $uploadedFile = $request->file('name_documents');
    //     $filename = time().$uploadedFile->getClientOriginalName();

    //     Storage::disk('local')->putFileAs('public/file/'.$filename,$uploadedFile,$filename);                                
        

    //     //-----------แปลงชื่อไฟล์ใหม่------------------------//
    //     // $stringImageReFormat=base64_encode('_'.time());
    //     // $ext=$request->file('name_documents')->getClientOriginalExtension();
    //     // $documentsName=$stringImageReFormat.".".$ext;
    //     // $documentsEncoded = File::get($request->name_documents);
    //     //-------------------------------------------------//

    //     //-----------------uploade && insert-----------------//
    //     // Storage::disk('local')->put('public/file/'.$documentsName,$documentsEncoded);

    //     $document = new Document;
    //     $document->name_documents = $request->name_documents;

    //     $document->save();
    //     Session::flash('success', 'Uploade แล้วนะ !');
    //     return redirect()->back();
    // }

    public function store(Request $request)
    {
        $request->validate([
            'name_documents' => 'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:5000'
        ]);

        //แปลงชื่อไฟล์ใหม่
        $stringFileReFormat=time(); //time()เท่ากับเวลาในขณะนั้น
        $ext=$request->file('name_documents')->getClientOriginalName(); //ตัวแปรนี้เก็บชื้อไฟล์ที่มีการ request มาโดยจะรับจาก function getClientOriginalName();
        $fileName=$stringFileReFormat."-".$ext; //นำ String แต่ละตัวมาต่อกัน เพื่อกันไม่ให้ชื่อไฟล์ซ้ำกัน
        $fileEncoded = File::get($request->name_documents); //

        //upload to storage & insert to data
        Storage::disk('local')->put('public/file/'.$fileName,$fileEncoded); //uploadfile เก็บไว้ใน storage

        $file = new Document; 
        $file->name_documents = $fileName;
        $file->save();

        Session::flash('success', 'เพิ่มข้อมูล สำเร็จ');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $documents_id)
    {
        $request->validate([
            'name_documents' => 'required|mimes:ppt,pptx,doc,docx,pdf,xls,xlsx|max:5000' //กรองรีเควสที่รับมา
        ]);

        //เงื่อนไขเช็ค ถ้าหากมีไฟล์ที่ชื่อตรงตามฐานข้อมูล
        if ($request->hasFile('name_documents')) {
           $document = Document::find($documents_id);
           $exists = Storage::disk('local')->exists("public/file/".$document->name_documents); //ถ้าเจอไฟล์ชื่อเหมือนกับ
           if ($exists) {
                Storage::delete("public/file/".$document->name_documents); //ลบไฟล์เก่า
           }
           $request->name_documents->storeAs("public/file/",$document->name_documents); //อัปไฟล์ใหม่เข้าไป
           Session::flash('success', 'แก้ไขแล้วนะ !');
           return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($documents_id)
    {
        $document = Document::find($documents_id);
        $exists = Storage::disk('local')->exists("public/file/".$document->name_documents); //ถ้าเจอไฟล์ชื่อเหมือนกับ
        
        if ($exists) {
            Storage::delete("public/file/".$document->name_documents); //ลบไฟล์
        }
        $document->delete();
        Session::flash('success', 'ลบแล้วนะจะ !');
        return redirect()->back();
    }

    public function download($documents_id)
    {
        $document = Document::find($documents_id);

        return Storage::download("public/file/".$document->name_documents); //downloadfile จาก storage
    }
}
