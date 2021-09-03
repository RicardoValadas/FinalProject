@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/home_page/home_page.css') }}">
@endsection

@section('content')

<h1>Safefornet</h1><br>

    <h2 class="heading-secondary">
        Is where you learn how to protect your kids on the web
    </h2><br>
    <!--    ***  first image  ***    -->
    <section id=imghead>
        <img id="imghome1" src="{{ asset('home_images/kidandparents.jpg') }}" alt="">
    </section><br>

 <!--    ***  First Section   ***    -->
<section id="firstSec">
    <div class="container">
        <div class="head2">
            <h3 class="heading-tertiary2">How to protect young kids from inappropriate Internet</h3><br>
            <p class="paragraph1">
                Setting strict rules for your young children's Internet adventures protects them from inappropriate content, cyberbullies, identity thieves and child predators. Installing popup blockers and reminding your little one to never, ever give out her real name, age, or address online is a solid start.
            </p>
        </div>

        <div class="head3">
            <h3 class="heading-tertiary3">Prevention of phishing attack</h3><br>
            <p class="paragraph2">
                Use anti-phishing protection and anti-spam software to protect yourself when malicious messages slip through to your computer. Anti-malware is included to prevent other types of threats. Similar to anti-spam software, anti-malware software is programmed by security researchers to spot even the stealthiest malware.
            </p>
        </div>
    </div>
</section><br><br>

<!-- Section with the second image -->
<section id=imghead>
    <img id="imghome2" src="{{ asset('home_images/max-bender-XIVDN9cxOVc-unsplash.jpg') }}" alt="">
</section><br><br>


    <div class="head4">
        <h3 class="heading-tertiary4">Teach them to keep private info private</h3><br>
        <p class="paragraph3">
            Always insist that your kids never reveal their real names (first, last, or imaginary) or where they live, go to school, hang out or play. The same rule goes for any other personal and confidential information. Repeat this rule often until they say it in their sleep, even if they kick and scream and roll their eyes. While you're at it, tell them not to share your personal information or their siblings', either.
        </p>
    </div>

<!--   Second section  with -->
<section id="secondSec">
    <div class="parent1">
        <div class="head5">
            <h3 class="heading-tertiary5">Take advantage of your browser's parental controls</h3><br>
            <p class="paragraph4">
                The majority of Internet browsers (including Mozilla Firefox, Google Chrome, Safari and many others) have an Internet options folder where you can easily set up security safeguards and content filters for language, nudity, sex, and violence. Or skip the filter fiddling and only allow your kids to use squeaky clean browsers created just for kids.
            </p>
        </div>
        <div class="head6">
            <h3 class="heading-tertiary6">Take advantage of your browser's parental controls</h3><br>
            <p class="paragraph5">
                The majority of Internet browsers (including Mozilla Firefox, Google Chrome, Safari and many others) have an Internet options folder where you can easily set up security safeguards and content filters for language, nudity, sex, and violence. Or skip the filter fiddling and only allow your kids to use squeaky clean browsers created just for kids.
            </p>
        </div>

    </div>
    <div class="parent2">

        <div class="head7">
            <h3 class="heading-tertiary7">Take advantage of your browser's parental controls</h3><br>
            <p class="paragraph6">
                The majority of Internet browsers (including Mozilla Firefox, Google Chrome, Safari and many others) have an Internet options folder where you can easily set up security safeguards and content filters for language, nudity, sex, and violence. Or skip the filter fiddling and only allow your kids to use squeaky clean browsers created just for kids.
            </p>
        </div>
        <div class="head8">
            <h3 class="heading-tertiary8">Take advantage of your browser's parental controls</h3><br>
            <p class="paragraph7">
                The majority of Internet browsers (including Mozilla Firefox, Google Chrome, Safari and many others) have an Internet options folder where you can easily set up security safeguards and content filters for language, nudity, sex, and violence. Or skip the filter fiddling and only allow your kids to use squeaky clean browsers created just for kids.
            </p>
        </div>

</section>

@endsection
