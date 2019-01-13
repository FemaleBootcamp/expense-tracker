<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Expense;

class ExpenseController extends Controller
{
  public function index(Request $request)
  {
      $input = $request->all();
      $input['dateFrom'] = date("Y-m-d", strtotime($input['dateFrom']));
      $input['dateTo'] = date("Y-m-d", strtotime($input['dateTo']));
      var_export($input);

      // var_dump($request->input('select'));

      if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('select') != NULL &&
          $request->input('cost') != NULL && $request->input('ExpenseType') != '--') {
        if ($request->input('select') == 'equals'){
          $expenses = Expense::where('Type', $request->input('ExpenseType'))
                      ->where('cost', $request->input('cost'))
                      // ->where('date', '>=', $request->input('dateFrom'))
                      // ->where('date', '<=', $request->input('dateTo'))
                      ->get();
          var_export($expenses);
        }

        else if ($request->input('select') == 'lessThan') {
            $expenses = Expense::where('Type', $request->input('ExpenseType'))
                        ->where('cost', '<', $request->input('cost'))
                        // ->where('date', '>=', $request->input('dateFrom'))
                        // ->where('date', '<=', $request->input('dateTo'))
                        ->get();
            var_export($expenses);
          }
          else if ($request->input('select') == 'greaterThan') {
              $expenses = Expense::where('Type', $request->input('ExpenseType'))
                          ->where('cost', '>', $request->input('cost'))
                          // ->where('date', '>=', $request->input('dateFrom'))
                          // ->where('date', '<=', $request->input('dateTo'))
                          ->get();
              var_export($expenses);
            }
        }
        else if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('select') != NULL &&
                $request->input('cost') != NULL && $request->input('ExpenseType') == '--') {
          if ($request->input('select') == 'equals'){
            $expenses = Expense::where('cost', $request->input('cost'))
                        // ->where('date', '>=', $request->input('dateFrom'))
                        // ->where('date', '<=', $request->input('dateTo'))
                        ->get();
            var_export($expenses);
          }
          else if ($request->input('select') == 'lessThan') {
              $expenses = Expense::where('cost', '<', $request->input('cost'))
                          // ->where('date', '>=', $request->input('dateFrom'))
                          // ->where('date', '<=', $request->input('dateTo'))
                          ->get();
              var_export($expenses);
            }
            else if ($request->input('select') == 'greaterThan') {
                $expenses = Expense::where('cost', '>', $request->input('cost'))
                            // ->where('date', '>=', $request->input('dateFrom'))
                            // ->where('date', '<=', $request->input('dateTo'))
                            ->get();
                var_export($expenses);
              }
        }
        else if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('cost') == NULL &&
                $request->input('ExpenseType') != '--') {
          $expenses = Expense::where('Type', $request->input('ExpenseType'))
                      // ->where('date', '>=', $request->input('dateFrom'))
                      // ->where('date', '<=', $request->input('dateTo'))
                      ->get();
          var_export($expenses);
        }
        else if (($request->input('dateFrom') == NULL || $request->input('dateTo') == NULL)) {

          if ($request->input('select') != NULL && $request->input('cost') && $request->input('ExpenseType') != '--')  {
            if ($request->input('select') == 'equals'){
              $expenses = Expense::where('Type', $request->input('ExpenseType'))
                          ->where('cost', $request->input('cost'))
                          ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                          ->get();
              var_export($expenses);
            }
            else if ($request->input('select') == 'lessThan') {
                $expenses = Expense::where('Type', $request->input('ExpenseType'))
                            ->where('cost', '<', $request->input('cost'))
                            ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                            ->get();
                var_export($expenses);
              }
              else if ($request->input('select') == 'greaterThan') {
                  $expenses = Expense::where('Type', $request->input('ExpenseType'))
                              ->where('cost', '>', $request->input('cost'))
                              ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
                              ->get();
                  var_export($expenses);
                }

          }

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
  }

  public function filter(Request $request)
  {
    // $expenses = Expense::where('Type', $request->input('ExpenseType'))->get();

    // if ($request->has('ExpenseType')) {
    //   return $expense->where('type', $request->input('ExpenseType'))->get();
    // }
  }
}
