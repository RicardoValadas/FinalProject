<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WrongAnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('wronganswertable')->insert([
            [
                'id' => 1,
                'answer' => 'In his bedroom.',
                'questionId' => 1,
            ],
            [
                'id' => 2,
                'answer' => 'In the kitchen.',
                'questionId' => 1,
            ],
            [
                'id' => 3,
                'answer' => 'A social network site.',
                'questionId' => 2,
            ],
            [
                'id' => 4,
                'answer' => 'Is a medicine.',
                'questionId' => 2,
            ],
            [
                'id' => 5,
                'answer' => 'Share with everyone you know.',
                'questionId' => 3,
            ],
            [
                'id' => 6,
                'answer' => 'Share with everyone even if you don’t know them.',
                'questionId' => 3,
            ],
            [
                'id' => 7,
                'answer' => 'No, they should let them find out by themselves.',
                'questionId' => 4,
            ],
            [
                'id' => 8,
                'answer' => 'Yes, but not very often.',
                'questionId' => 4,
            ],
            [
                'id' => 9,
                'answer' => 'To know where kids are.',
                'questionId' => 5,
            ],
            [
                'id' => 10,
                'answer' => 'To block access to the internet all together.',
                'questionId' => 5,
            ],
            [
                'id' => 11,
                'answer' => 'No, they should never do online transactions.',
                'questionId' => 6,
            ],
            [
                'id' => 12,
                'answer' => 'Yes, they should have access to a credit card or pay-pal account at all times.',
                'questionId' => 6,
            ],
            [
                'id' => 13,
                'answer' => 'HTTPS.',
                'questionId' => 7,
            ],
            [
                'id' => 14,
                'answer' => 'Add.',
                'questionId' => 7,
            ],
            [
                'id' => 15,
                'answer' => 'A fishing game.',
                'questionId' => 8,
            ],
            [
                'id' => 16,
                'answer' => 'Plugins.',
                'questionId' => 8,
            ],
            [
                'id' => 17,
                'answer' => '42424242.',
                'questionId' => 9,
            ],
            [
                'id' => 18,
                'answer' => 'mike2021',
                'questionId' => 9,
            ],
            [
                'id' => 19,
                'answer' => 'Cash.',
                'questionId' => 10,
            ],
            [
                'id' => 20,
                'answer' => 'Direct wire transfers.',
                'questionId' => 10,
            ],
            [
                'id' => 21,
                'answer' => 'A snack you can buy online.',
                'questionId' => 11,
            ],
            [
                'id' => 22,
                'answer' => 'A plug-in that allows you to view special types of web content.',
                'questionId' => 11,
            ],
            [
                'id' => 23,
                'answer' => 'A star icon to the right of the URL.',
                'questionId' => 12,
            ],
            [
                'id' => 24,
                'answer' => 'A plus sign to the right of the tab.',
                'questionId' => 12,
            ],
            [
                'id' => 25,
                'answer' => 'Reply back.',
                'questionId' => 13,
            ],
            [
                'id' => 26,
                'answer' => 'Change your email.',
                'questionId' => 13,
            ],
            [
                'id' => 27,
                'answer' => 'Click on it.',
                'questionId' => 14,
            ],
            [
                'id' => 28,
                'answer' => 'Share with other friends.',
                'questionId' => 14,
            ],
            [
                'id' => 29,
                'answer' => 'Accept and go meet them.',
                'questionId' => 15,
            ],
            [
                'id' => 30,
                'answer' => 'Accept if they come to your house.',
                'questionId' => 15,
            ],
            [
                'id' => 31,
                'answer' => 'You tag all your friends.',
                'questionId' => 16,
            ],
            [
                'id' => 32,
                'answer' => 'Post everything without worries.',
                'questionId' => 16,
            ],
            [
                'id' => 33,
                'answer' => 'Make space on the drive.',
                'questionId' => 17,
            ],
            [
                'id' => 34,
                'answer' => 'Not get concerned about anything.',
                'questionId' => 17,
            ],
            [
                'id' => 35,
                'answer' => 'No, it concerns computers and phones.',
                'questionId' => 18,
            ],
            [
                'id' => 36,
                'answer' => 'Yes.',
                'questionId' => 18,
            ],
            [
                'id' => 37,
                'answer' => 'Clean it.',
                'questionId' => 19,
            ],
            [
                'id' => 38,
                'answer' => 'Do nothing.',
                'questionId' => 19,
            ],
            [
                'id' => 39,
                'answer' => 'To be harder to remember.',
                'questionId' => 20,
            ],
            [
                'id' => 40,
                'answer' => 'Just for fun.',
                'questionId' => 20,
            ],
            [
                'id' => 41,
                'answer' => 'Insult back.',
                'questionId' => 21,
            ],
            [
                'id' => 42,
                'answer' => 'Share the message online',
                'questionId' => 21,
            ],
            [
                'id' => 43,
                'answer' => 'Verify if your friends are in that social network.',
                'questionId' => 22,
            ],
            [
                'id' => 44,
                'answer' => 'You don’t have to verify anything.',
                'questionId' => 22,
            ],
            [
                'id' => 45,
                'answer' => 'Always use the same so you don’t forget.',
                'questionId' => 23,
            ],
            [
                'id' => 46,
                'answer' => 'Change it only once every couple of years.',
                'questionId' => 23,
            ],
            [
                'id' => 47,
                'answer' => 'Let them online.',
                'questionId' => 24,
            ],
            [
                'id' => 48,
                'answer' => 'Give it to a friend.',
                'questionId' => 24,
            ],
            [
                'id' => 49,
                'answer' => 'Is an online game.',
                'questionId' => 25,
            ],
            [
                'id' => 50,
                'answer' => 'Is a social network.',
                'questionId' => 25,
            ],
            [
                'id' => 51,
                'answer' => 'Verify the wi-fi speed.',
                'questionId' => 26,
            ],
            [
                'id' => 52,
                'answer' => 'Save the password so you don’t have to ask for it later.',
                'questionId' => 26,
            ],
            [
                'id' => 53,
                'answer' => 'Protects you from people with access to your computer snooping at your browsing history.',
                'questionId' => 27,
            ],
            [
                'id' => 54,
                'answer' => 'Is the list of web pages a user has visited.',
                'questionId' => 27,
            ],
            [
                'id' => 55,
                'answer' => 'The fingerprint scanner to unlock your phone.',
                'questionId' => 28,
            ],
            [
                'id' => 56,
                'answer' => 'Is a copy machine.',
                'questionId' => 28,
            ],
            [
                'id' => 57,
                'answer' => 'Help the prince so he can receive his heritage.',
                'questionId' => 29,
            ],
            [
                'id' => 58,
                'answer' => 'Send him money so you can receive your share.',
                'questionId' => 29,
            ],
            [
                'id' => 59,
                'answer' => 'So your parents can’t see what you do with it.',
                'questionId' => 30,
            ],
            [
                'id' => 60,
                'answer' => 'So your friends can’t see what you do with it.',
                'questionId' => 30,
            ],

        ]);
    }
}
