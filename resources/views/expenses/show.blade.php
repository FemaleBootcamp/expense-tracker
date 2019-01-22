@extends('layouts.app')

@section('content')
    <div id="app" class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Expense <b style="color: #ef5350">Table</b></h2>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form action="/expenses" method="get" @submit="onSubmit">

                          <!-- <div class="container"> -->
                            <h4>Filter my expenses by: </h4>
                            <div  class="form-group">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="ExpenseType">Expense Type</label>
                                  <select class="form-control" id="ExpenseType" name="ExpenseType" v-model="form.type">
                                    <option>--</option>
                                    <option>Home Expense</option>
                                    <option>Rent</option>
                                    <option>Utility bills</option>
                                    <option>Vehicle maintenance</option>
                                    <option>Clothing & shoes</option>
                                    <option>Gifts</option>
                                    <option>Personal care items</option>
                                    <option>Entertainment</option>
                                    <option>Eating out</option>
                                    <option>Other</option>
                                  </select>
                                </div>
                                <div class="col-md-2" >
                                  <div style="padding-top: 15%; text-align: right;">
                                    <div class="custom-control custom-radio custom-control-inline">
<<<<<<< Updated upstream
                                      <input type="radio" id="lessThan" name="select" value="<" v-model="form.select"><
=======
<<<<<<< HEAD
                                      <input type="radio" id="lessThan" name="select" class="custom-control-input" value="lessThan">
                                      <label class="custom-control-label" for="lessThan"><</label>
>>>>>>> Stashed changes
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="equals" name="select" value="=" v-model="form.select">=
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
<<<<<<< Updated upstream
                                      <input type="radio" id="greaterThan" name="select" value=">" v-model="form.select">>
=======
                                      <input type="radio" id="greaterThan" name="select" class="custom-control-input" value="greaterThan">
                                      <label class="custom-control-label" for="greaterThan">></label>
=======
                                      <input type="radio" id="lessThan" name="select" value="<"><
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="equals" name="select" value="=">=
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" id="greaterThan" name="select" value=">">>
>>>>>>> b54ac9516d05fe1c3b402db0e36ab29fa7697600
>>>>>>> Stashed changes
                                    </div>
                                  </div>
                                </div>
                                <div class="col-md-4">
                                  <div>
                                    <label for="cost">Expense Cost</label>
                                    <input type="number" class="form-control" id="cost" name="cost" placeholder="Enter a value" v-model="form.cost">
                                  </div>
                                </div>
                              </div>
                            </div>


                              <div class="row">
                                <div class='col-md-5'>
                                    <div class="form-group">
                                        <div class='input-group date'>
                                          <label for="datetimepicker6">Date From: </label>
                                            <input type='text' class="form-control" name="dateFrom" id="datetimepicker6" v-model="form.startDate"/>
                                        </div>
                                    </div>
                                </div>
                                <div class='col-md-5'>
                                    <div class="form-group">
                                        <div class='input-group date'>
                                          <label for="datetimepicker7">Date To: </label>
                                            <input type='text' class="form-control" name="dateTo" id="datetimepicker7" v-model="form.endDate"/>
                                        </div>
                                    </div>
                                </div>
                              </div>
                              <button type="submit" value="search">search</button>
                            <!-- </div> -->

                        </form>

                        <div class="table-responsive">
                            <div class="row">
                                <div class="col-12">
                                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable"
                                           id="DataTables_Table_0" role="grid" aria-describedby="DataTables_Table_0_info">
                                        <thead>
                                        <tr>
                                            <th>Expense Title</th>
                                            <th>Expense Type</th>
                                            <th>Cost</th>
                                            <th>Date</th>
                                            <th>Attachment</th>
                                            <th>Actions</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                          @foreach ($expenses as $expense)
                                            <tr>
                                              <td>{{ $expense->title }}</td>
                                              <td>{{ $expense->type }}</td>
                                              <td>{{ $expense->cost }}</td>
                                              <td>{{ $expense->date }}</td>
                                              <td>{{ $expense->attachment }}</td>
                                              <td style="width: 265px;">
                                                  <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                                                      <div class="btn-group" role="group" aria-label="First group" style="padding-right:5px;">
                                                          <button type="button" class="btn btn-info">View Details</button>
                                                      </div>
                                                      <div class="btn-group" role="group" aria-label="Second group" style="padding-right:5px;">
                                                          <button type="button" class="btn btn-warning">Edit</button>
                                                      </div>
                                                      <div class="btn-group" role="group" aria-label="Third group">
                                                          <button type="button" class="btn btn-danger">Delete</button>
                                                      </div>
                                                  </div>
                                              </td>
                                            </tr>
                                          @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
