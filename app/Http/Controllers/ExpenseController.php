<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
  public function index(Request $request)
  {
      $input = $request->all();

      var_export($input);

      //
  }

  public function filter(Request $request)
  {
    if ($request->has('ExpenseType')) {
      return $expense->where('type', $request->input('ExpenseType'))->get();
    }
  }
}
