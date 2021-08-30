<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CorrectAnswerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('correctanswertable')->insert([
            [
                'id' => 1,
                'answer' => 'In a common area like a living room.',
                'questionId' => 1,
            ],
            [
                'id' => 2,
                'answer' => 'A software to protect your device against viruses.',
                'questionId' => 2,
            ],
            [
                'id' => 3,
                'answer' => 'Keep it private as much as you can.',
                'questionId' => 3,
            ],
            [
                'id' => 4,
                'answer' => 'Yes, they should talk regularly about how they use the internet.',
                'questionId' => 4,
            ],
            [
                'id' => 5,
                'answer' => 'To limit internet use times, website restrictions and control which applications or websites can be opened.',
                'questionId' => 5,
            ],
            [
                'id' => 6,
                'answer' => 'Yes, if they asked their parents first, and the parent does the transaction himself.
                ',
                'questionId' => 6,
            ],
            [
                'id' => 7,
                'answer' => 'Phishing.',
                'questionId' => 7,
            ],
            [
                'id' => 8,
                'answer' => 'Messages that try to trick you into providing sensitive information.',
                'questionId' => 8,
            ],
            [
                'id' => 9,
                'answer' => 'c-2343!Rli8',
                'questionId' => 9,
            ],
            [
                'id' => 10,
                'answer' => 'Credit cards.',
                'questionId' => 10,
            ],
            [
                'id' => 11,
                'answer' => 'Data that tracks your preferences on different websites.',
                'questionId' => 11,
            ],
            [
                'id' => 12,
                'answer' => 'A lock icon and “https” at the very beginning of the URL.',
                'questionId' => 12,
            ],
            [
                'id' => 13,
                'answer' => 'Don’t reply.',
                'questionId' => 13,
            ],
            [
                'id' => 14,
                'answer' => 'Ignore it.',
                'questionId' => 14,
            ],
            [
                'id' => 15,
                'answer' => 'Decline and if you are a minor, denounce it to your parents.',
                'questionId' => 15,
            ],
            [
                'id' => 16,
                'answer' => 'Never post pictures you could regret later.',
                'questionId' => 16,
            ],
            [
                'id' => 17,
                'answer' => 'Verify that the website and software are well known and trustworthy.',
                'questionId' => 17,
            ],
            [
                'id' => 18,
                'answer' => 'No, it concerns every online device such as phones and tablets.',
                'questionId' => 18,
            ],
            [
                'id' => 19,
                'answer' => 'Turn it to a wall or cover it with a piece of tape.',
                'questionId' => 19,
            ],
            [
                'id' => 20,
                'answer' => 'To prevent people and certain softwares from figuring out what it is.',
                'questionId' => 20,
            ],
            [
                'id' => 21,
                'answer' => 'Inform their parents.',
                'questionId' => 21,
            ],
            [
                'id' => 22,
                'answer' => 'Verify the minimum age required.',
                'questionId' => 22,
            ],
            [
                'id' => 23,
                'answer' => 'Try to change the password every time you register on a website or service.',
                'questionId' => 23,
            ],
            [
                'id' => 24,
                'answer' => 'Deleted them.',
                'questionId' => 24,
            ],
            [
                'id' => 25,
                'answer' => 'Cyberbullying is willful and repeated harm (i.e., harassing, humiliating, or threatening text or images) inflicted through the Internet.',
                'questionId' => 25,
            ],
            [
                'id' => 26,
                'answer' => 'Avoid accessing your bank accounts or completing purchases and if you do use a VPN.',
                'questionId' => 26,
            ],
            [
                'id' => 27,
                'answer' => 'A VPN is a service that both encrypts your data and hides your IP address by bouncing your network activity through a secure chain to another server.
                ',
                'questionId' => 27,
            ],
            [
                'id' => 28,
                'answer' => 'A digital footprint is data that is left behind when users have been online.',
                'questionId' => 28,
            ],
            [
                'id' => 29,
                'answer' => 'Ignore this email,  since this is a well known scam.',
                'questionId' => 29,
            ],
            [
                'id' => 30,
                'answer' => 'In case you lose it or it gets stolen, the other person can’t access it.',
                'questionId' => 30,
            ]
        ]);
    }
}
