@extends('layouts.template')

@section('style')
<link rel="stylesheet" href="{{ URL::asset('/css/home_page/home_page.css') }}">
@endsection

@section('content')

<h1>Safefornet</h1><br>

    <h2 class="heading-secondary">
        Is where you learn how to protect your kids on the web
    </h2><br><br><br>
    <!--    ***  first image  ***    -->
    <section id="imghead">
        {{-- <img id="imghome1" src="{{ asset('home_images/kidandparents.jpg') }}" alt=""> --}}
    </section><br><br><br>

 <!--    ***  First Section   ***    -->
<section id="firstSec">
    <div class="row cont1">
        <div class="col head2">
            <article id="art1"> <!-- Article 1 with images -->
                <h3 class="heading-tertiary2">How to protect young kids from inappropriate Internet</h3><br>
                <img id="imgart1" src="{{ asset('home_images/fly-d-zAhAUSdRLJ8-unsplash.jpg') }}" alt=""><br><br>
                <p class="paragraph1">
                    Setting strict rules for your young children's Internet adventures protects them from inappropriate content, cyberbullies, identity thieves and child predators. Installing popup blockers and reminding your little one to never, ever give out her real name, age, or address online is a solid start.
                </p><br><br>
            </article>

            <button id="btnprot"><a href="#">Tutorials</a></button>
        </div>
<!-- Article 2 with images -->
        <div class="col head3">
            <article id=""art2>
            <h3 class="heading-tertiary3">Prevention of phishing attack</h3><br>
                <img id="imgart2" src="{{ asset('home_images/max-bender-XIVDN9cxOVc-unsplash.jpg') }}" alt=""><br><br>
                    <p class="paragraph2">
                        Use anti-phishing protection and anti-spam software to protect yourself when malicious messages slip through to your computer. Anti-malware is included to prevent other types of threats. Similar to anti-spam software, anti-malware software is programmed by security researchers to spot even the stealthiest malware.
                    </p><br><br>
                <button id="btnphis"><a href="#">Phising Techniques</a></button>
            </article>
        </div>
    </div>
</section><br><br>

<!--
<div class="container">
    <div class="row">
        <div class="col">col1</div>
        <div class="col">col2</div>
        <div class="col">col3</div>
    </div>
</div>
-->
<!-- Section with the second image -->

    <div class="col head4">
        <article id="art3">
            <h3 class="heading-tertiary4">Teach them to keep private info private</h3><br>
            <img id="imgart3" src="{{ asset('home_images/nahel-abdul-hadi-flha0KwRrRc-unsplash.jpg') }}" alt=""><br><br>
                <p class="paragraph3">
                    Always insist that your kids never reveal their real names (first, last, or imaginary) or where they live, go to school, hang out or play. The same rule goes for any other personal and confidential information. Repeat this rule often until they say it in their sleep, even if they kick and scream and roll their eyes. While you're at it, tell them not to share your personal information or their siblings', either.
                </p><br>
                <p class="paragraph3">
                    If your child is a regular user of social networks, they must be aware of the risk of personal information or images being made public once they post it. While they won’t fully understand the consequences of revealing personal information online, you should teach them to be cautious and thoughtful about what they post and share.  Encourage your children to ask themselves before posting anything if the information (i.e. name, phone number, home address, email, name of school) or photo is something they would give a stranger. If the answer is no, don’t post it.
                </p><br>
        </article>
        <button id="callQ"><a href="#">Teach your kids</a></button><br><br>
    </div>

<!--   Second section  with -->
<section id="secondSec">
    <div class="row cont2">
        <div class="col head5">
            <h3 class="heading-tertiary5">Know who your children’s online friends are</h3><br>
            <p class="paragraph4">
                As adults, we know that some people online aren’t who they say they are, but children and young people can be alarming naïve about who they are chatting with if they are not taught to be cyber wise from an early age.
            </p><br>
            <p class="paragraph4">
                Make sure you become friends and contacts within your child’s social media circles and ensure you monitor posts. Your children may resist but tell them that is one of the conditions for you to allow them access
            </p><br>
            <p class="paragraph4">
                As adults, we know that some people online aren’t who they say they are, but children and young people can be alarming naïve about who they are chatting with if they are not taught to be cyber wise from an early age.
            </p><br><br>
            <button id="call1"><a href="#">Learn</a></button>
        </div>
        <div class="col head6">

            <h3 class="heading-tertiary6">Take advantage of your browser's parental controls</h3><br>
            <p class="paragraph5">
                The majority of Internet browsers (including Mozilla Firefox, Google Chrome, Safari and many others) have an Internet options folder where you can easily set up security safeguards and content filters for language, nudity, sex, and violence. Or skip the filter fiddling and only allow your kids to use squeaky clean browsers created just for kids.
            </p><br>
            <p class="paragraph5">
                Innocent searches online can lead to not-so-innocent results, so it’s wise to know how to use the parental controls/search restrictions offered by web browsers, internet service provider and devices. For example, the SafeSearch Filters feature on Google will block sites with explicit sexual material. To turn it on, go to Settings/SafeSearch Filters. Although not 100 per cent accurate, parental controls can help prevent your child from seeing and accessing most violent or sexual material. Paid for security tools and features will offer extra protection and control.
            </p><br>
            <button id="call2"><a href="#">How to set up a parental control</a></button>
        </div>
    </div><br><br><br>

    <div class=imghead>
        <img id="imghome2" src="{{ asset('home_images/max-bender-XIVDN9cxOVc-unsplash.jpg') }}" alt="">
    </div><br><br>
    <div class="row cont3">

        <div class="col head7">
            <h3 class="heading-tertiary7">Talk openly with your child about their online activity </h3><br>
            <p class="paragraph6">
                As soon as your child starts accessing the internet, talk to them about what they are reading, watching and who they are communicating with online – and keep the conversation going as they grow older. Ask your child what sites they visit or apps they use, write a list, and look at them together. Talk to your child about what you think is appropriate, and remind them that this may be different for other parents and their children.
            </p><br>
            <p class="paragraph6">
                t’s vital to teach them about their online reputation, too, and how they must be careful about how they behave, interact with people and represent themselves in such a public forum. They must always remember that the internet isn’t private.
            </p><br>
            <p class="paragraph6">
                Listen to your child and reach an agreement about what is right for your family. Remember the time will come when they will access the internet outside the safety of home and you want them to be prepared for that.
            </p><br><br>
        </div>
        <div class="col head8">
            <h3 class="heading-tertiary8">Keep control of your family’s digital footprint </h3><br>
            <p class="paragraph7">
                Every picture and personal detail that is posted and shared on social media and the internet contributes to someone’s digital footprint. The big risk with this is that once information is shared publicly, it can be used in ways you may not expect and cannot control. You should also assume that anything that is put online is permanent (it can sometimes be deleted but not always before others have seen it and saved it). For this reason, children and young people need to be smart about protecting their images and information. The same goes for parents who regularly post pictures of their children’s online.
            </p><br>
            <p class="paragraph7">
                Teach your child to stay in control of their digital footprint, by only sharing with people who they know and trust. Rather than posting to all their friends on social media, encourage them to be selective and use the privacy settings on the social media platforms they use.
            </p><br>
        </div>
</section>


@endsection
