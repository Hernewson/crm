<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable=['name','email','phone','date','remarks'];


    public function getValidationRules()
    {
         return [
            // 'name'=>'required|string',
            // 'email'=>'email|nullable',
            // 'phone'=>'min:6|max:16|numeric|nullable',
            // 'date'=>'date|nullable',
            // 'remarks'=>'nullable|string'
         ];
    }

    public function sources(){
        return $this->belongsToMany(EnquirySource::class, 'enquiries_source');
    }

    public function category(){
        return $this->belongsToMany(EnquiryCategory::class, 'enquiries_enquiry_categories');
    }

    public function enquiry_responses(){
        return $this->belongsToMany(EnquiryResponse::class, 'enquiries_responses');
    }
}