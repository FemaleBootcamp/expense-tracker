<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Expense;
use Carbon\Carbon;

class ExpenseController extends Controller
{
  public function index(Request $request)
  {
      $input = $request->all();
      $input['dateFrom'] = date("Y-m-d", strtotime($input['dateFrom']));
      $input['dateTo'] = date("Y-m-d", strtotime($input['dateTo']));
      var_export($input);

      $expenses = Expense::where('user_id', auth()->user()->id);

      if($input['ExpenseType'] != '--' && $input['dateFrom'] != '1970-01-01' && $input['dateTo'] != '1970-01-01' && $input['cost'] != NULL) {
        if ($input['select'] == 'equals') {
          $expenses->where('type', $input['ExpenseType'])
                   ->where('cost',  $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        else if ($input['select'] == 'lessThan') {
          $expenses->where('type', $input['ExpenseType'])
                   ->where('cost', '<', $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        else if ($input['select'] == 'greaterThan') {
          $expenses->where('type', $input['ExpenseType'])
                   ->where('cost', '>', $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        // dd($input['select']);
        dd($expenses->get());
      }
      else if ($input['ExpenseType'] == '--' && $input['dateFrom'] != '1970-01-01' && $input['dateTo'] != '1970-01-01' && $input['cost'] != NULL) {
        if ($input['select'] == 'equals') {
          $expenses->where('cost',  $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        else if ($input['select'] == 'lessThan') {
          $expenses->where('cost', '<', $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        else if ($input['select'] == 'greaterThan') {
          $expenses->where('cost', '>', $input['cost'])
                   ->where('date', '>=', $input['dateFrom'])
                   ->where('date', '<=', $input['dateTo']);
        }
        dd($expenses->get());
      }
      else if ($input['ExpenseType'] == '--' && $input['dateFrom'] != '1970-01-01' && $input['dateTo'] != '1970-01-01' && $input['cost'] == NULL) {
        $expenses->where('date', '>=', $input['dateFrom'])
                 ->where('date', '<=', $input['dateTo']);
        dd($expenses->get());
        dd($input['select']);
      }
      // else if (($input['dateFrom'] == '1970-01-01' || $input['dateTo'] == '1970-01-01') && ($input['ExpenseType'] == '--' && $input['cost'] == NULL) {
      //   $expenses->where('type', $input['ExpenseType'])
      //             ->where('date', '>=', Carbon::now()->month);
      //   dd($expenses->get());
      // }

      else if ($input['dateFrom'] == '1970-01-01' || $input['dateTo'] == '1970-01-01') {
        if ($input['ExpenseType'] != '--' && $input['cost'] == NULL) {
          $expenses->where('type', $input['ExpenseType'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          dd($expenses->get());
        }
        else if ($input['ExpenseType'] == '--' && $input['cost'] == NULL) {
          $expenses->whereYear('date', Carbon::now()->year)
                  ->whereMonth('date', Carbon::now()->month);
          dd($expenses->get());
        }
        else if ($input['ExpenseType'] == '--' && $input['cost'] != NULL) {
          if ($input['select'] == 'equals') {
            $expenses->where('cost',  $input['cost'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          }
          else if ($input['select'] == 'lessThan') {
            $expenses->where('cost', '<', $input['cost'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          }
          else if ($input['select'] == 'greaterThan') {
            $expenses->where('cost', '>', $input['cost'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          }
          dd($expenses->get());
        }
        else if ($input['ExpenseType'] != '--' && $input['cost'] != NULL) {
          if ($input['select'] == 'equals') {
            $expenses->where('type', $input['ExpenseType'])
                      ->where('cost',  $input['cost'])
                      ->whereYear('date', Carbon::now()->year)
                      ->whereMonth('date', Carbon::now()->month);
          }
          else if ($input['select'] == 'lessThan') {
            $expenses->where('type', $input['ExpenseType'])
                    ->where('cost', '<', $input['cost'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          }
          else if ($input['select'] == 'greaterThan') {
            $expenses->where('type', $input['ExpenseType'])
                    ->where('cost', '>', $input['cost'])
                    ->whereYear('date', Carbon::now()->year)
                    ->whereMonth('date', Carbon::now()->month);
          }
          dd($expenses->get());
        }
      }




      // var_dump($request->input('select'));

      // if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('select') != NULL &&
      //     $request->input('cost') != NULL && $request->input('ExpenseType') != '--') {
      //   if ($request->input('select') == 'equals'){
      //     $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                 ->where('cost', $request->input('cost'))
      //                 // ->where('date', '>=', $request->input('dateFrom'))
      //                 // ->where('date', '<=', $request->input('dateTo'))
      //                 ->get();
      //     var_export($expenses);
      //   }
      //
      //   else if ($request->input('select') == 'lessThan') {
      //       $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                   ->where('cost', '<', $request->input('cost'))
      //                   // ->where('date', '>=', $request->input('dateFrom'))
      //                   // ->where('date', '<=', $request->input('dateTo'))
      //                   ->get();
      //       var_export($expenses);
      //     }
      //     else if ($request->input('select') == 'greaterThan') {
      //         $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                     ->where('cost', '>', $request->input('cost'))
      //                     // ->where('date', '>=', $request->input('dateFrom'))
      //                     // ->where('date', '<=', $request->input('dateTo'))
      //                     ->get();
      //         var_export($expenses);
      //       }
      //   }
      //   else if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('select') != NULL &&
      //           $request->input('cost') != NULL && $request->input('ExpenseType') == '--') {
      //     if ($request->input('select') == 'equals'){
      //       $expenses = Expense::where('cost', $request->input('cost'))
      //                   // ->where('date', '>=', $request->input('dateFrom'))
      //                   // ->where('date', '<=', $request->input('dateTo'))
      //                   ->get();
      //       var_export($expenses);
      //     }
      //     else if ($request->input('select') == 'lessThan') {
      //         $expenses = Expense::where('cost', '<', $request->input('cost'))
      //                     // ->where('date', '>=', $request->input('dateFrom'))
      //                     // ->where('date', '<=', $request->input('dateTo'))
      //                     ->get();
      //         var_export($expenses);
      //       }
      //       else if ($request->input('select') == 'greaterThan') {
      //           $expenses = Expense::where('cost', '>', $request->input('cost'))
      //                       // ->where('date', '>=', $request->input('dateFrom'))
      //                       // ->where('date', '<=', $request->input('dateTo'))
      //                       ->get();
      //           var_export($expenses);
      //         }
      //   }
      //   else if ($request->input('dateFrom') != NULL && $request->input('dateTo') != NULL && $request->input('cost') == NULL &&
      //           $request->input('ExpenseType') != '--') {
      //     $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                 // ->where('date', '>=', $request->input('dateFrom'))
      //                 // ->where('date', '<=', $request->input('dateTo'))
      //                 ->get();
      //     var_export($expenses);
      //   }
      //   else if (($request->input('dateFrom') == NULL || $request->input('dateTo') == NULL)) {
      //
      //     if ($request->input('select') != NULL && $request->input('cost') && $request->input('ExpenseType') != '--')  {
      //       if ($request->input('select') == 'equals'){
      //         $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                     ->where('cost', $request->input('cost'))
      //                     ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                     ->get();
      //         var_export($expenses);
      //       }
      //       else if ($request->input('select') == 'lessThan') {
      //           $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                       ->where('cost', '<', $request->input('cost'))
      //                       ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                       ->get();
      //           var_export($expenses);
      //         }
      //         else if ($request->input('select') == 'greaterThan') {
      //             $expenses = Expense::where('Type', $request->input('ExpenseType'))
      //                         ->where('cost', '>', $request->input('cost'))
      //                         ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                         ->get();
      //             var_export($expenses);
      //           }
      //
      //     }
      //
      //     else if ($request->input('select') != NULL && $request->input('cost') && $request->input('ExpenseType') == '--') {
      //       if ($request->input('select') == 'equals'){
      //         $expenses = Expense::where('cost', $request->input('cost'))
      //                     ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                     ->get();
      //         var_export($expenses);
      //       }
      //       else if ($request->input('select') == 'lessThan') {
      //           $expenses = Expense::where('cost', '<', $request->input('cost'))
      //                       ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                       ->get();
      //           var_export($expenses);
      //         }
      //         else if ($request->input('select') == 'greaterThan') {
      //             $expenses = Expense::where('cost', '>', $request->input('cost'))
      //                         ->where(DB::raw('MONTH(created_at)'), '=', date('n') )
      //                         ->get();
      //             var_export($expenses);
      //           }
      //     }
      //   }
  }

  public function filter(Request $request)
  {
    // $expenses = Expense::where('Type', $request->input('ExpenseType'))->get();

    // if ($request->has('ExpenseType')) {
    //   return $expense->where('type', $request->input('ExpenseType'))->get();
    // }
  }
}
