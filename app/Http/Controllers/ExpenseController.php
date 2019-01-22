<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Expense;
use Carbon\Carbon;

class ExpenseController extends Controller
{
  public function show()
  {
    return view('expenses.show',
      ['expenses' => Expense::all()
    ]);
  }

  public function index(Request $request)
  {
    $input = $request->all();

     // by default use the current month expenses
     $start = Carbon::now()->startOfMonth();
     $end = Carbon::now();

     // get all expenses for the logged in user
     $expenses = Expense::where('user_id', auth()->user()->id);

     if($input['ExpenseType'] != '--')
     {
       $expenses->where('type', $input['ExpenseType']);
     }

     if($input['dateFrom'])
     {
       $start = Carbon::createFromFormat('d-m-Y', $input['dateFrom']);
     }

     if($input['dateTo'])
     {
       $end = Carbon::createFromFormat('d-m-Y', $input['dateTo']);
     }

     // filter the results for the used dates.
     $expenses->whereBetween('date', [$start, $end]);

     if($request->has('select') && $input['cost'])
     {
       $expenses->where('cost', $input['select'], $input['cost']);
     }
     elseif ($input['cost'])
     {
       $expenses->where('cost', $input['cost']);
     }

     return view('expenses.show',
       ['expenses' => $expenses->get()
     ]);
     //return $expenses->get();

  }

  public function filter(Request $request)
  {
    // $expenses = Expense::where('Type', $request->input('ExpenseType'))->get();

    // if ($request->has('ExpenseType')) {
    //   return $expense->where('type', $request->input('ExpenseType'))->get();
    // }
  }
}
