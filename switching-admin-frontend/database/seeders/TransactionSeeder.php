<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transactions =[
            [
                'date'=>'2023-06-09',
                'transaction_date'=>'2023-06-09',
                'status'=>'COMPLETED',
                'debit'=>'33.50',
                'credit'=>'0.00',
                'amount'=>'158000',
                'fees'=>0,
                'commission'=>'0.01',
                'billid'=>'1',
                'channel'=>'0.02',
                'description'=>'SALE',
                'biller_id'=>'1',
                'product_id'=>'1',
                'agent_id'=>'1',
                'client_id'=>'1',
                'device_id'=>'1',
                'employee_id'=>'1',
                'source'=>'CBZ',
                'destination'=>'CBZ',
                'accounts_id'=>'1',
                'users_id'=>'1',
                'transaction_types_id'=>'1',
                'counter_transaction_id'=>'1',
                'balance'=>'55.00',
                'payment_channels_id'=>'1',
                'card_id'=>'1',
                'status_counter'=>'2',
                'api_data'=>'DATA',
                'terminal_id'=>'1',
                'capture_method'=>'GETWAY',
                'currency'=>'USD',
                'acquire_response_code'=>'3264',
                'acquire_response_description'=>'TRANSACTION',
                'agent_name'=>'GABRIELLA',
                'agent_account'=>'1643026',
                'association'=>'NMB',
                'provider'=>'NEMESIS',
                'app_version'=>'2.0',
                'pos_type'=>'SPF',
                'tax'=>'0.01',
                'acquire_remote_reference'=>'3045',
                'operator_session'=>'TIMED',
                'origin'=>'CARD',
                'other_description'=>'TRANSACTION',
                'reference'=>'2211'
            ],
            [
                'date'=>'2023-06-012',
                'transaction_date'=>'2023-06-012',
                'status'=>'PENDING',
                'debit'=>'33.50',
                'credit'=>'0.00',
                'amount'=>'158000',
                'fees'=>'0',
                'commission'=>'0.01',
                'billid'=>'2',
                'channel'=>'0.05',
                'description'=>'SALE',
                'biller_id'=>'2',
                'product_id'=>'2',
                'agent_id'=>'2',
                'client_id'=>'2',
                'device_id'=>'2',
                'employee_id'=>'2',
                'source'=>'STEWARD',
                'destination'=>'STEWARD',
                'accounts_id'=>'2',
                'users_id'=>'2',
                'transaction_types_id'=>'3',
                'counter_transaction_id'=>'3',
                'balance'=>'55.00',
                'payment_channels_id'=>'4',
                'card_id'=>'5',
                'status_counter'=>'1',
                'api_data'=>'DATA',
                'terminal_id'=>'5',
                'capture_method'=>'GETWAY',
                'currency'=>'RAND',
                'acquire_response_code'=>'3264',
                'acquire_response_description'=>'TRANSACTION',
                'agent_name'=>'GABRIELLA',
                'agent_account'=>'1643026',
                'association'=>'NMB',
                'provider'=>'NEMESIS',
                'app_version'=>'2.0',
                'pos_type'=>'SPF',
                'tax'=>'0.01',
                'acquire_remote_reference'=>'3045',
                'operator_session'=>'TIMED',
                'origin'=>'CARD',
                'other_description'=>'TRANSACTION',
                'reference'=>'2211'
            ],
        ];

        foreach ($transactions as $transaction) {
            Transaction::create($transaction);
        }
    }
}