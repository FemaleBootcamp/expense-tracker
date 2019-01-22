<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Expense;
<<<<<<< Updated upstream
use Carbon\Carbon;
=======
<<<<<<< HEAD
=======
use Carbon\Carbon;
>>>>>>> b54ac9516d05fe1c3b402db0e36ab29fa7697600
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
    $input = $request->all();

     // by default use the current month expenses
     $start = Carbon::now()->startOfMonth();
     $end = Carbon::now();

     // get all expenses for the logged in user
     $expenses = Expense::where('user_id', auth()->user()->id);
=======
<<<<<<< HEAD
      $input = $request->all();
      $input['dateFrom'] = date("Y-m-d", strtotime($input['dateFrom']));
      $input['dateTo'] = date("Y-m-d", strtotime($input['dateTo']));
      var_export($input);
>>>>>>> Stashed changes

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

<<<<<<< Updated upstream
     return view('expenses.show',
       ['expenses' => $expenses->get()
     ]);
=======
          else if ($request->input('select') != NULL && $request->input('cost') && $request->input('ExpenseType') == '--') {
            if ($request->input('select') == 'equals'){
              $expenses = Expense::where('cost', $request->input('cost'))
                          ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                          ->get();
              var_export($expenses);
            }
            else if ($request->input('select') == 'lessThan') {
                $expenses = Expense::where('cost', '<', $request->input('cost'))
                            ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                            ->get();
                var_export($expenses);
              }
              else if ($request->input('select') == 'greaterThan') {
                  $expenses = Expense::where('cost', '>', $request->input('cost'))
                              ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                              ->get();
                  var_export($expenses);
                }
          }
        }
=======
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

     return $expenses->get();
>>>>>>> b54ac9516d05fe1c3b402db0e36ab29fa7697600
>>>>>>> Stashed changes
  }

  public function filter(Request $request)
  {
    // $expenses = Expense::where('Type', $request->input('ExpenseType'))->get();

    // if ($request->has('ExpenseType')) {
    //   return $expense->where('type', $request->input('ExpenseType'))->get();
    // }
  }
}
