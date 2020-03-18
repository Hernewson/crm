<?php

namespace App\Http\Controllers;

use App\Enquiry;
use App\Student;
use App\EnquiryCategory;
use App\EnquiryResponse;
use App\EnquirySource;
use PDF;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{

    protected $enquiry = null;
    protected $category = null;


    public function __construct(Enquiry $enquiry, EnquiryCategory $category)
    {
        $this->enquiry = $enquiry;
        $this->category = $category;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = $this->enquiry->orderBy('id', 'DESC')->get();
        $sources = EnquirySource::all();
        $categories = EnquiryCategory::all();
        return view('admin.enquiry.enquiry.view')->with('enquiry', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sources = EnquirySource::where('status', 1)->get();
        $categories = EnquiryCategory::where('status', 1)->get();
        return view('admin.enquiry.enquiry.form')->with('categories', $categories)->with('sources', $sources);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->request);
        $rules = $this->enquiry->getValidationRules();
        $request->validate($rules);
        // dd($request->request);
        $data = $request->all();
        $enquiry = new Enquiry;
        $enquiry->s_name = $data['s_name'];
        $enquiry->s_phone = $data['s_phone'];
        $enquiry->s_mobile = $data['s_mobile'];
        $enquiry->s_mail = $data['s_mail'];
        $enquiry->s_address = $data['s_address'];
        $enquiry->s_eduLevel = $data['s_eduLevel'];
        $enquiry->s_subject = $data['s_subject'];
        $enquiry->s_qual = $data['s_qual'];
        $enquiry->s_exp = $data['s_exp'];
        $enquiry->s_work = $data['s_work'];
        $enquiry->s_serviceInterest = $data['s_serviceInterest'];
        $enquiry->s_langTest = $data['s_langTest'];
        $enquiry->s_langScore = $data['s_langScore'];
        $enquiry->s_countryInterest = $data['s_countryInterest'];

        if(isset($data['visited'])){
            $enquiry->visited=1;
        }
        else{
            $enquiry->visited=0;
        }
        $enquiry->save();

        return redirect()->route('enquiry.index')->with('flash_message', 'New Enquiry Has Been Added');
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
        $data = $this->enquiry->find($id);
        $categories = EnquiryCategory::where('status', 1)->get();
        $enquiries_category = $data->category()->pluck('enquiry_category_id')->toArray();
        $sources = EnquirySource::where('status', 1)->get();
        $enquiries_source = $data->sources()->pluck('enquiry_source_id')->toArray();
        $enquiries_response = EnquiryResponse::where('enquiry_id', $id)->pluck('enquiry_response_id')->toArray();
        return view('admin.enquiry.enquiry.form')
            ->with('categories', $categories)
            ->with('data', $data)
            ->with('sources', $sources)
            ->with('enquiries_source', $enquiries_source)
            ->with('enquiries_category', $enquiries_category)
            ->with('enquiries_response', $enquiries_response);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $rules = $this->enquiry->getValidationRules();
        $request->validate($rules);
        $data = $request->all();
            $enquiry = Enquiry::findOrFail($id);
        $enquiry->s_name = $data['s_name'];
        $enquiry->s_phone = $data['s_phone'];
        $enquiry->s_mobile = $data['s_mobile'];
        $enquiry->s_mail = $data['s_mail'];
        $enquiry->s_address = $data['s_address'];
        $enquiry->s_eduLevel = $data['s_eduLevel'];
        $enquiry->s_subject = $data['s_subject'];
        $enquiry->s_qual = $data['s_qual'];
        $enquiry->s_exp = $data['s_exp'];
        $enquiry->s_work = $data['s_work'];
        $enquiry->s_serviceInterest = $data['s_serviceInterest'];
        $enquiry->s_langTest = $data['s_langTest'];
        $enquiry->s_langScore = $data['s_langScore'];
        $enquiry->s_countryInterest = $data['s_countryInterest'];
        if(isset($data['visited'])){
            $enquiry->visited=1;
        }
        else{
            $enquiry->visited=0;
        }
        $enquiry->save();

        return redirect()->route('enquiry.index')->with('flash_message', 'Enquiry Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $this->enquiry = $this->enquiry->find($id);
        $success = $this->enquiry->delete();
        if ($success) {
            return redirect()->route('enquiry.index')->with('flash_message', 'Enquiry Has Been Deleted');
        }
    }

     //generatePDF
        public function generatePDF() {
            $data['enquiry'] = Enquiry::all();
            // dd($data['enquiry']);
            $pdf = PDF::loadView('admin.enquiry.enquiry.pdf', $data);

            $pdf->save(storage_path().'_filename.pdf');

            return $pdf->download('enquiry.pdf');
        }

        //print User
        public function printEnquiry(){
            $data['enquiry']=Enquiry::all();
            return view('admin.enquiry.enquiry.print')->with($data);
        }

    public function addtoclient(Request $request){

        // dd($request->all());
         $enquiry=Enquiry::findorFail($request->enquiry_id);
        $client=Student::where('email',$enquiry->email)->count();






        if($client!=null){
            return redirect()->route('enquiry.index')->with('flash_error', 'Student already exist');
        }
         if(strpos($enquiry->name,' ')==false){
                    return redirect()->route('enquiry.index')->with('flash_error', 'Lastname not found');
                }
        $name=explode(" ",$enquiry->name);
        $fname=$name[0];
        $lname=$name[1];

        $client=Student::where('email',$enquiry->email)->count();
        // dd($client);
        if($client!=null){
            return redirect()->route('enquiry.index')->with('flash_error', 'Client already exist');
        }

                $student = new Student;
                $student->fname = $fname;
                $student->lname = $lname;
                $student->email = strtolower($enquiry->email);
                $student->phone =$enquiry->phone;

                $student->save();

                $enquiry->delete();

        return redirect()->route('viewStudent')->with('flash_message', 'Enquiry Has Been Added to Clients');
    }
}
