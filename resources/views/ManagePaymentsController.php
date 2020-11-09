<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagePaymentsController extends Controller
{
  public function managepayments () {
    return view ('managepayments');
  }
}
