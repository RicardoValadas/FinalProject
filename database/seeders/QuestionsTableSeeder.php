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
        DB::table('questions')->insert(
            [
                'questions' => 'Where should a kid’s computer be kept?',
                'levelID' => 1,
            ],
            [
                'questions' => 'What is an antivirus?',
                'levelID' => 2,
            ],
            [
                'questions' => 'What should you do with your personal information?',
                'levelID' => 2,
            ],
            [
                'questions' => 'Should parents talk to their kids about the internet?',
                'levelID' => 1,
            ],
            [
                'questions' => 'What parental controls are used for?',
                'levelID' => 2,
            ],
            [
                'questions' => 'Should kids be allowed to do transactions online?',
                'levelID' => 1,
            ],
            [
                'questions' => 'Which of the following is an example of threats you may encounter online?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What are phishing scams?',
                'levelID' => 3,
            ],
            [
                'questions' => 'Which of the following is an example of a strong password?',
                'levelID' => 2,
            ],
            [
                'questions' => 'When shopping online, which payment method is generally safest?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What is a cookie?',
                'levelID' => 3,
            ],
            [
                'questions' => 'To see if a website is using a secure connection, what should you look for?',
                'levelID' => 2,
            ],
            [
                'questions' => 'When you receive an email or message from someone you don’t know what should you  do ?',
                'levelID' => 1,
            ],
            [
                'questions' => 'If someone you don’t know sends you a link you should...',
                'levelID' => 1,
            ],
            [
                'questions' => 'If someone you only know online sends you a message saying they want to meet with you in person you should …',
                'levelID' => 1,
            ],
            [
                'questions' => 'When sharing pictures online you should …',
                'levelID' => 2,
            ],
            [
                'questions' => 'When downloading software to your computer you should …',
                'levelID' => 2,
            ],
            [
                'questions' => 'Internet safety only concerns computers?',
                'levelID' => 1,
            ],
            [
                'questions' => 'When your webcam is not in use you should…',
                'levelID' => 2,
            ],
            [
                'questions' => 'Why should you choose a strong password?',
                'levelID' => 1,
            ],
            [
                'questions' => 'Why should you choose a strong password?',
                'levelID' => 1,
            ],
            [
                'questions' => 'What should a kid do if they receive an insulting message ?',
                'levelID' => 1,
            ],
            [
                'questions' => 'How should you verify before registering into a social network ?',
                'levelID' => 2,
            ],
            [
                'questions' => 'How often should you use the same password?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What should you do with unused accounts ?',
                'levelID' => 2,
            ],
            [
                'questions' => 'What is cyberbullying ?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What cautions should you have when using free public wi-fi ?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What is a VPN?',
                'levelID' => 3,
            ],
            [
                'questions' => 'What is a digital footprint ?',
                'levelID' => 3,
            ],
            [
                'questions' => 'If you receive an email from a man claiming to be a prince from Nigeria you should…',
                'levelID' => 3,
            ],
            [
                'questions' => 'Why should your mobile phone/computer account be protected by a password ?',
                'levelID' => 2,
            ]

        );
    }
}
