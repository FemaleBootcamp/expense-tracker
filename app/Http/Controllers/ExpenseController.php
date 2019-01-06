<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
          try{
              $statusCode = 200;
              $response = [
                'expenses'  => []
              ];

              $expenses = Expense::all();

              foreach($expenses as $expense){

                  $response['expenses'][] = [
                      'id' => $expense->id,
                      'user_id' => $expense->user_id,
                      'title' => $expense->title,
                      'type' => $expense->type,
                      'cost' => $expense->cost,
                      'attachment' => $expense->attachment,
                      'date' => $expense->date,
                  ];
              }

          }catch (Exception $e){
              $statusCode = 400;
          }finally{
              return Response::json($response, $statusCode);
          }

    }
}
