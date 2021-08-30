<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AnswersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('answers')->insert([
            [
                'id' => 1,
                'answer' => 'In a common area like a living room.',
                'correct' => true,
                'questionId' => 1,
            ],
            [
                'id' => 2,
                'answer' => 'A software to protect your device against viruses.',
                'correct' => true,
                'questionId' => 2,
            ],
            [
                'id' => 3,
                'answer' => 'Keep it private as much as you can.',
                'correct' => true,
                'questionId' => 3,
            ],
            [
                'id' => 4,
                'answer' => 'Yes, they should talk regularly about how they use the internet.',
                'correct' => true,
                'questionId' => 4,
            ],
            [
                'id' => 5,
                'answer' => 'To limit internet use times, website restrictions and control which applications or websites can be opened.',
                'correct' => true,
                'questionId' => 5,
            ],
            [
                'id' => 6,
                'answer' => 'Yes, if they asked their parents first, and the parent does the transaction himself.
                ',
                'correct' => true,
                'questionId' => 6,
            ],
            [
                'id' => 7,
                'answer' => 'Phishing.',
                'correct' => true,
                'questionId' => 7,
            ],
            [
                'id' => 8,
                'answer' => 'Messages that try to trick you into providing sensitive information.',
                'correct' => true,
                'questionId' => 8,
            ],
            [
                'id' => 9,
                'answer' => 'c-2343!Rli8',
                'correct' => true,
                'questionId' => 9,
            ],
            [
                'id' => 10,
                'answer' => 'Credit cards.',
                'correct' => true,
                'questionId' => 10,
            ],
            [
                'id' => 11,
                'answer' => 'Data that tracks your preferences on different websites.',
                'correct' => true,
                'questionId' => 11,
            ],
            [
                'id' => 12,
                'answer' => 'A lock icon and “https” at the very beginning of the URL.',
                'correct' => true,
                'questionId' => 12,
            ],
            [
                'id' => 13,
                'answer' => 'Don’t reply.',
                'correct' => true,
                'questionId' => 13,
            ],
            [
                'id' => 14,
                'answer' => 'Ignore it.',
                'correct' => true,
                'questionId' => 14,
            ],
            [
                'id' => 15,
                'answer' => 'Decline and if you are a minor, denounce it to your parents.',
                'correct' => true,
                'questionId' => 15,
            ],
            [
                'id' => 16,
                'answer' => 'Never post pictures you could regret later.',
                'correct' => true,
                'questionId' => 16,
            ],
            [
                'id' => 17,
                'answer' => 'Verify that the website and software are well known and trustworthy.',
                'correct' => true,
                'questionId' => 17,
            ],
            [
                'id' => 18,
                'answer' => 'No, it concerns every online device such as phones and tablets.',
                'correct' => true,
                'questionId' => 18,
            ],
            [
                'id' => 19,
                'answer' => 'Turn it to a wall or cover it with a piece of tape.',
                'correct' => true,
                'questionId' => 19,
            ],
            [
                'id' => 20,
                'answer' => 'To prevent people and certain softwares from figuring out what it is.',
                'correct' => true,
                'questionId' => 20,
            ],
            [
                'id' => 21,
                'answer' => 'Inform their parents.',
                'correct' => true,
                'questionId' => 21,
            ],
            [
                'id' => 22,
                'answer' => 'Verify the minimum age required.',
                'correct' => true,
                'questionId' => 22,
            ],
            [
                'id' => 23,
                'answer' => 'Try to change the password every time you register on a website or service.',
                'correct' => true,
                'questionId' => 23,
            ],
            [
                'id' => 24,
                'answer' => 'Deleted them.',
                'correct' => true,
                'questionId' => 24,
            ],
            [
                'id' => 25,
                'answer' => 'Cyberbullying is willful and repeated harm (i.e., harassing, humiliating, or threatening text or images) inflicted through the Internet.',
                'correct' => true,
                'questionId' => 25,
            ],
            [
                'id' => 26,
                'answer' => 'Avoid accessing your bank accounts or completing purchases and if you do use a VPN.',
                'correct' => true,
                'questionId' => 26,
            ],
            [
                'id' => 27,
                'answer' => 'A VPN is a service that both encrypts your data and hides your IP address by bouncing your network activity through a secure chain to another server.
                ',
                'correct' => true,
                'questionId' => 27,
            ],
            [
                'id' => 28,
                'answer' => 'A digital footprint is data that is left behind when users have been online.',
                'correct' => true,
                'questionId' => 28,
            ],
            [
                'id' => 29,
                'answer' => 'Ignore this email,  since this is a well known scam.',
                'correct' => true,
                'questionId' => 29,
            ],
            [
                'id' => 30,
                'answer' => 'In case you lose it or it gets stolen, the other person can’t access it.',
                'correct' => true,
                'questionId' => 30,
            ],
            [
                'id' => 31,
                'answer' => 'In his bedroom.',
                'correct' => false,
                'questionId' => 1,
            ],
            [
                'id' => 32,
                'answer' => 'In the kitchen.',
                'correct' => false,
                'questionId' => 1,
            ],
            [
                'id' => 33,
                'answer' => 'A social network site.',
                'correct' => false,
                'questionId' => 2,
            ],
            [
                'id' => 34,
                'answer' => 'Is a medicine.',
                'correct' => false,
                'questionId' => 2,
            ],
            [
                'id' => 35,
                'answer' => 'Share with everyone you know.',
                'correct' => false,
                'questionId' => 3,
            ],
            [
                'id' => 36,
                'answer' => 'Share with everyone even if you don’t know them.',
                'correct' => false,
                'questionId' => 3,
            ],
            [
                'id' => 37,
                'answer' => 'No, they should let them find out by themselves.',
                'correct' => false,
                'questionId' => 4,
            ],
            [
                'id' => 38,
                'answer' => 'Yes, but not very often.',
                'correct' => false,
                'questionId' => 4,
            ],
            [
                'id' => 39,
                'answer' => 'To know where kids are.',
                'correct' => false,
                'questionId' => 5,
            ],
            [
                'id' => 40,
                'answer' => 'To block access to the internet all together.',
                'correct' => false,
                'questionId' => 5,
            ],
            [
                'id' => 41,
                'answer' => 'No, they should never do online transactions.',
                'correct' => false,
                'questionId' => 6,
            ],
            [
                'id' => 42,
                'answer' => 'Yes, they should have access to a credit card or pay-pal account at all times.',
                'correct' => false,
                'questionId' => 6,
            ],
            [
                'id' => 43,
                'answer' => 'HTTPS.',
                'correct' => false,
                'questionId' => 7,
            ],
            [
                'id' => 44,
                'answer' => 'Add.',
                'correct' => false,
                'questionId' => 7,
            ],
            [
                'id' => 45,
                'answer' => 'A fishing game.',
                'correct' => false,
                'questionId' => 8,
            ],
            [
                'id' => 46,
                'answer' => 'Plugins.',
                'correct' => false,
                'questionId' => 8,
            ],
            [
                'id' => 47,
                'answer' => '42424242.',
                'correct' => false,
                'questionId' => 9,
            ],
            [
                'id' => 48,
                'answer' => 'mike2021',
                'correct' => false,
                'questionId' => 9,
            ],
            [
                'id' => 49,
                'answer' => 'Cash.',
                'correct' => false,
                'questionId' => 10,
            ],
            [
                'id' => 50,
                'answer' => 'Direct wire transfers.',
                'correct' => false,
                'questionId' => 10,
            ],
            [
                'id' => 51,
                'answer' => 'A snack you can buy online.',
                'correct' => false,
                'questionId' => 11,
            ],
            [
                'id' => 52,
                'answer' => 'A plug-in that allows you to view special types of web content.',
                'correct' => false,
                'questionId' => 11,
            ],
            [
                'id' => 53,
                'answer' => 'A star icon to the right of the URL.',
                'correct' => false,
                'questionId' => 12,
            ],
            [
                'id' => 54,
                'answer' => 'A plus sign to the right of the tab.',
                'correct' => false,
                'questionId' => 12,
            ],
            [
                'id' => 55,
                'answer' => 'Reply back.',
                'correct' => false,
                'questionId' => 13,
            ],
            [
                'id' => 56,
                'answer' => 'Change your email.',
                'correct' => false,
                'questionId' => 13,
            ],
            [
                'id' => 57,
                'answer' => 'Click on it.',
                'correct' => false,
                'questionId' => 14,
            ],
            [
                'id' => 58,
                'answer' => 'Share with other friends.',
                'correct' => false,
                'questionId' => 14,
            ],
            [
                'id' => 59,
                'answer' => 'Accept and go meet them.',
                'correct' => false,
                'questionId' => 15,
            ],
            [
                'id' => 60,
                'answer' => 'Accept if they come to your house.',
                'correct' => false,
                'questionId' => 15,
            ],
            [
                'id' => 61,
                'answer' => 'You tag all your friends.',
                'correct' => false,
                'questionId' => 16,
            ],
            [
                'id' => 62,
                'answer' => 'Post everything without worries.',
                'correct' => false,
                'questionId' => 16,
            ],
            [
                'id' => 63,
                'answer' => 'Make space on the drive.',
                'correct' => false,
                'questionId' => 17,
            ],
            [
                'id' => 64,
                'answer' => 'Not get concerned about anything.',
                'correct' => false,
                'questionId' => 17,
            ],
            [
                'id' => 65,
                'answer' => 'No, it concerns computers and phones.',
                'correct' => false,
                'questionId' => 18,
            ],
            [
                'id' => 66,
                'answer' => 'Yes.',
                'correct' => false,
                'questionId' => 18,
            ],
            [
                'id' => 67,
                'answer' => 'Clean it.',
                'correct' => false,
                'questionId' => 19,
            ],
            [
                'id' => 68,
                'answer' => 'Do nothing.',
                'correct' => false,
                'questionId' => 19,
            ],
            [
                'id' => 69,
                'answer' => 'To be harder to remember.',
                'correct' => false,
                'questionId' => 20,
            ],
            [
                'id' => 70,
                'answer' => 'Just for fun.',
                'correct' => false,
                'questionId' => 20,
            ],
            [
                'id' => 71,
                'answer' => 'Insult back.',
                'correct' => false,
                'questionId' => 21,
            ],
            [
                'id' => 72,
                'answer' => 'Share the message online',
                'correct' => false,
                'questionId' => 21,
            ],
            [
                'id' => 73,
                'answer' => 'Verify if your friends are in that social network.',
                'correct' => false,
                'questionId' => 22,
            ],
            [
                'id' => 74,
                'answer' => 'You don’t have to verify anything.',
                'correct' => false,
                'questionId' => 22,
            ],
            [
                'id' => 75,
                'answer' => 'Always use the same so you don’t forget.',
                'correct' => false,
                'questionId' => 23,
            ],
            [
                'id' => 76,
                'answer' => 'Change it only once every couple of years.',
                'correct' => false,
                'questionId' => 23,
            ],
            [
                'id' => 77,
                'answer' => 'Let them online.',
                'correct' => false,
                'questionId' => 24,
            ],
            [
                'id' => 78,
                'answer' => 'Give it to a friend.',
                'correct' => false,
                'questionId' => 24,
            ],
            [
                'id' => 79,
                'answer' => 'Is an online game.',
                'correct' => false,
                'questionId' => 25,
            ],
            [
                'id' => 80,
                'answer' => 'Is a social network.',
                'correct' => false,
                'questionId' => 25,
            ],
            [
                'id' => 81,
                'answer' => 'Verify the wi-fi speed.',
                'correct' => false,
                'questionId' => 26,
            ],
            [
                'id' => 82,
                'answer' => 'Save the password so you don’t have to ask for it later.',
                'correct' => false,
                'questionId' => 26,
            ],
            [
                'id' => 83,
                'answer' => 'Protects you from people with access to your computer snooping at your browsing history.',
                'correct' => false,
                'questionId' => 27,
            ],
            [
                'id' => 84,
                'answer' => 'Is the list of web pages a user has visited.',
                'correct' => false,
                'questionId' => 27,
            ],
            [
                'id' => 85,
                'answer' => 'The fingerprint scanner to unlock your phone.',
                'correct' => false,
                'questionId' => 28,
            ],
            [
                'id' => 86,
                'answer' => 'Is a copy machine.',
                'correct' => false,
                'questionId' => 28,
            ],
            [
                'id' => 87,
                'answer' => 'Help the prince so he can receive his heritage.',
                'correct' => false,
                'questionId' => 29,
            ],
            [
                'id' => 88,
                'answer' => 'Send him money so you can receive your share.',
                'correct' => false,
                'questionId' => 29,
            ],
            [
                'id' => 89,
                'answer' => 'So your parents can’t see what you do with it.',
                'correct' => false,
                'questionId' => 30,
            ],
            [
                'id' => 90,
                'answer' => 'So your friends can’t see what you do with it.',
                'correct' => false,
                'questionId' => 30,
            ]

        ]);
    }
}
