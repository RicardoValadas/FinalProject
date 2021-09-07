<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class QuestionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            [
                'id' => '1',
                'questions' => 'Where should a kid’s computer be kept?',

            ],
            [
                'id' => '2',
                'questions' => 'What is an antivirus?',

            ],
            [
                'id' => '3',
                'questions' => 'What should you do with your personal information?',

            ],
            [
                'id' => '4',
                'questions' => 'Should parents talk to their kids about the internet?',

            ],
            [
                'id' => '5',
                'questions' => 'What parental controls are used for?',

            ],
            [
                'id' => '6',
                'questions' => 'Should kids be allowed to do transactions online?',

            ],
            [
                'id' => '7',
                'questions' => 'Which of the following is an example of threats you may encounter online?',

            ],
            [
                'id' => '8',
                'questions' => 'What are phishing scams?',

            ],
            [
                'id' => '9',
                'questions' => 'Which of the following is an example of a strong password?',

            ],
            [
                'id' => '10',
                'questions' => 'When shopping online, which payment method is generally safest?',

            ],
            [
                'id' => '11',
                'questions' => 'What is a cookie?',

            ],
            [
                'id' => '12',
                'questions' => 'To see if a website is using a secure connection, what should you look for?',

            ],
            [
                'id' => '13',
                'questions' => 'When you receive an email or message from someone you don’t know what should you  do ?',

            ],
            [
                'id' => '14',
                'questions' => 'If someone you don’t know sends you a link you should...',

            ],
            [
                'id' => '15',
                'questions' => 'If someone you only know online sends you a message saying they want to meet with you in person you should …',

            ],
            [
                'id' => '16',
                'questions' => 'When sharing pictures online you should …',

            ],
            [
                'id' => '17',
                'questions' => 'When downloading software to your computer you should …',

            ],
            [
                'id' => '18',
                'questions' => 'Internet safety only concerns computers?',

            ],
            [
                'id' => '19',
                'questions' => 'When your webcam is not in use you should…',

            ],
            [
                'id' => '20',
                'questions' => 'Why should you choose a strong password?',

            ],
            [
                'id' => '21',
                'questions' => 'What should a kid do if they receive an insulting message ?',

            ],
            [
                'id' => '22',
                'questions' => 'How should you verify before registering into a social network ?',

            ],
            [
                'id' => '23',
                'questions' => 'How often should you use the same password?',

            ],
            [
                'id' => '24',
                'questions' => 'What should you do with unused accounts ?',

            ],
            [
                'id' => '25',
                'questions' => 'What is cyberbullying ?',

            ],
            [
                'id' => '26',
                'questions' => 'What cautions should you have when using free public wi-fi ?',

            ],
            [
                'id' => '27',
                'questions' => 'What is a VPN?',

            ],
            [
                'id' => '28',
                'questions' => 'What is a digital footprint ?',

            ],
            [
                'id' => '29',
                'questions' => 'If you receive an email from a man claiming to be a prince from Nigeria you should…',

            ],
            [
                'id' => '30',
                'questions' => 'Why should your mobile phone/computer account be protected by a password ?',

            ]

        ]);
    }
}
