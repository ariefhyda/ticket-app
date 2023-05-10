<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketPriceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ticket_price')->truncate();
        $data =[
            [
                'name' =>  'ONE-DAY',
                'price' =>  '1000000',
                'desc' => '<ul>
                                <li><i class="icon_check"></i>Ticket for one day</li>
                                <li><i class="icon_check"></i>Chance to win doorprize</li>
                                <li><i class="icon_close"></i><s>Free official merchandise</s></li>
                                <li><i class="icon_close"></i><s>Free artist photo + signature</s></li>
                                <li><i class="icon_close"></i><s>Hotel Voucher</s></li>
                            </ul>',
            ], 
            [
                'name' =>  'THREE-DAYS',
                'price' =>  '2000000',
                'desc' => '<ul>
                                <li><i class="icon_check"></i>Ticket for three days</li>
                                <li><i class="icon_check"></i>Chance to win doorprize</li>
                                <li><i class="icon_check"></i>Free official merchandise</li>
                                <li><i class="icon_close"></i><s>Free artist photo + signature</s></li>
                                <li><i class="icon_close"></i><s>Hotel Voucher</s></li>
                            </ul>',
            ],   
            [
                'name' =>  'ALL-DAYS',
                'price' =>  '3500000',
                'desc' => '<ul>
                                <li><i class="icon_check"></i>Ticket for all days</li>
                                <li><i class="icon_check"></i>Chance to win doorprize</li>
                                <li><i class="icon_check"></i>Free official merchandise</li>
                                <li><i class="icon_check"></i>Free artist photo + signature</li>
                                <li><i class="icon_check"></i>Hotel Voucher</li>
                            </ul>',
            ],    
        ];
        DB::table('ticket_price')->insert($data);
    }
}
