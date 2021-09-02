@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/home_page/home_page.css') }}">
@endsection

@section('content')
    <h1>Safe for net</h1>

    <h2 class="heading-secondary">
        Is where you learn how to be safe on the web
    </h2><br>


    <article id="art1">
    <div class="head2">
        <h3 class="heading-tertiary">How to protect young kids from inappropriate Internet</h3><br>
            <p class="paragraph">
                Setting strict rules for your young children's Internet adventures protects them from inappropriate content, cyberbullies, identity thieves and child predators. Installing popup blockers and reminding your little one to never, ever give out her real name, age, or address online is a solid start.
            </p>

        </div><br>
    </article><br>

    <article id="art2">
            <div class="head3">

                <h3 class="heading-tertiary">Prevention of phishing attack</h3><br>
                <p class="paragraph">
                    Use anti-phishing protection and anti-spam software to protect yourself when malicious messages slip through to your computer. Anti-malware is included to prevent other types of threats. Similar to anti-spam software, anti-malware software is programmed by security researchers to spot even the stealthiest malware.
                </p>

            </div>
        </article>


@endsection
