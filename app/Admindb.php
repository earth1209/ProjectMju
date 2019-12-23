<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admindb extends Model
{
    //
    protected $fillable = ['v_admissions_companies','v_student_information','v_student_journals','v_student_scores','v_student_GPA',
                            'v_preparation_hours','contact_students','choose_place_students','v_student_internships','send_nformation_companies',
                        'document_startdate_internship','check_diaries_comments','add_delete_edit','staff_registration','manage_documentation',
                        'v_location_internshippast','a_new_internshiplo','c_record','s_GPAhours_passornot','c_internship','v_information_select',
                        'assess_students','contact_staff'];
}
