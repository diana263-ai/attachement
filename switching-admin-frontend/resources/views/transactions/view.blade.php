@extends('layouts.master')
@section('title')
TRANSACTIONS
@endsection
    @section('content')
        <div class="col-lg-12">
                <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary" style="width:100%">TRANSACTIONS</button>
                </div>
                    <div class="card-body">
                        <div id="timeout">
                           @if(Session::has('success'))
                     <p class="alert alert-info">{{ Session('success') }}</p>
                      @endif
                      @if(Session::has('error'))
                     <p class="alert alert-danger">{{ Session('error') }}</p>
                      @endif
                      </div>
                      <div class="card">
                    <div class="card-body">
            <div class="row align-items-center-g3">
            <div class="col-lg-4">
                    <form action="/filter-transactions" method="GET"> 
                        <label>Filter Dates</label>
                        <div class="input-group mb-3">
                            <input type="date" class="form-control form-control-sm" name="start_date"  >
                            <input type="date" class="form-control form-control-sm" name="end_date" >
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{route('transactions.filterByTerminalId')}}" method="POST"> 
                    @csrf
                        <label>Filter By Terminal ID</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" name="terminal_id">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-4">
                    <form action="{{route('transactions.filterByAgentId')}}" method="POST"> 
                    @csrf
                        <label>Filter By Agent ID</label>
                        <div class="input-group mb-3">
                        <input type="text" class="form-control form-control-sm" name="agent_id">
                            <button class="btn btn-primary" type="submit">GET</button>
                        </div>
                    </form>
                </div>
                </div>
                <table id="example" class="table table-bordered dt-responsive nowrap table-striped align-middle" style="width:100%">
            <thead class="thead-dark">
            <tr>

                <th>ID</th>
                <th>Reference</th>
                <th>Transaction Date</th>
                <th>Terminal ID</th>
                <th>Agent ID</th>
                <th>Status</th>
                <th>Debit</th>
                <th>Credit</th>
                <th>Commission</th>
                <th>Fees</th>
                <th>Tax</th>
                <th>Amount</th>
                

            </tr>
            </thead>


                <tbody>
                @foreach($transactions as $transaction)
                <tr>

                    <td>{{ $transaction['id'] }}</td>
                    <td>{{ $transaction['reference'] }}</td>
                    <td>{{ $transaction['transaction_date'] }}</td>
                    <td>{{ $transaction['terminal_id'] }}</td>
                    <td>{{ $transaction['agent_id'] }}</td>
                    <td>{{ $transaction['status'] }}</td>
                    <td>{{ $transaction['debit'] }}</td>
                    <td>{{ $transaction['credit'] }}</td>
                    <td>{{ $transaction['commission'] }}</td>
                    <td>{{ $transaction['fees'] }}</td>
                    <td>{{ $transaction['tax'] }}</td>
                    <td>{{ $transaction['amount'] }}</td>
                    </td>

                </tr>
                @endforeach
                </tbody>

                </table>
                
                    </div>
                </div>
        </div>
@endsection