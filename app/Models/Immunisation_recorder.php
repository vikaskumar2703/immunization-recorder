<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunisation_recorder extends Model
{
    use HasFactory;
    
    protected $table = 'immunisation_recorders';

    protected $fillable = [
        'child_name',
        'password',
        	'phone_no',	
            'father_name' ,
            	'mother_name ',	
                'dob',
                'HepB',
                'HepB1' ,
                'RV' ,
                'RV2' ,
                'RV3'	,
                'DTap1' ,
                'DTap2' ,
                'DTap3' ,
                'Hib1' 	,
                'Hib2' ,
                'Hib3' ,
                'PCV1' ,
                'PCV2 ',
                'PCV3' ,
                'IPV1' ,
                'IPV2',
                'IPV3',
                'Influenza',
                'email'
    ];
}
