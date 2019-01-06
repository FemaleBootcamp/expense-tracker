@extends('layouts.app')

@section('content')
    <div class="container">
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
                                        <td>Groceries</td>
                                        <td>Home Expense</td>
                                        <td>10 $</td>
                                        <td>29.12.2018</td>
                                        <td>link to the receipt</td>
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
