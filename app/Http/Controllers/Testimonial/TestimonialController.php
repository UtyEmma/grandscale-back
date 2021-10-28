<?php

namespace App\Http\Controllers\Testimonial;

use App\Http\Controllers\Controller;
use App\Http\Library\Response\Status;
use App\Models\Testimonial;
use Exception;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    function fetch () {
        try {
            $query = Testimonial::query();
            $query->latest();
            $testimonials = $query->get();
        } catch (Exception $e) {
            return Status::error($e->getCode(), $e->getMessage());
        }
        return Status::success("Testimonials", [
            'testimonials' => $testimonials->random()
        ]);
    }
}
