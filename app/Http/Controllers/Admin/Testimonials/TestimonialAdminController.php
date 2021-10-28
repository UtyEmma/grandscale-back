<?php

namespace App\Http\Controllers\Admin\Testimonials;

use App\Http\Controllers\Controller;

class TestimonialAdminController extends Controller{

    function fetchTestimonials () {
        return view('admin.testimonials');
    }

}
