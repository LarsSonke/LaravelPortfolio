@extends('layout')

@section('content')
    <article class="faq-page">
        <h1>Frequently Asked Questions</h1>
    </article>
    <article class="faq-info">
        <div id="rcorners2">
            <p>In this page I will answer a few frequently asked questions(FAQ) about useful things to know while
                attending the HZ.
            </p>
        </div>
    </article>
    <pre></pre>
    <article class="faq-questions">
        <div id="rcorners1">
            <h4>1. How can you print a document from your laptop at HZ?</h4>
            <p>You can send a print job to the printers in the school through <a href="https://print.hz.nl/login.cfm?dest=index.cfm&"target="_blank">print.hz.nl</a>,
                once you have done that you go to the printer and scan your HZ pass on the TouchID.
                After that press Print in the menu, if you have sufficient credit on your printing account it will
                succeed.
                Press Stop once you are done and you will be logged out. </p>
        </div>
        <pre></pre>
        <div id="rcorners1">
            <h4>2. How can you scan a document and send it to your laptop at HZ?</h4>
            <p>Scanning is free but you need to have €0.07 credit.
                Next you need to use your HZ pass on the TouchID to register.
                After that select the option Scanning - Scan,
                lay the document you want to scan on the feeder or glass plate.
                Press Scan and Send, then press Scan to me, press Yes after that press start.
                Last of all press Stop once you are done and you will be logged out.</p>
        </div>
        <pre></pre>
        <div id="rcorners1">
            <h4>3. What do you need to do when you are sick / show symptoms of coronavirus?</h4>
            <p>You should message one of your teachers and let them know,
                that way you might be able to follow the lesson online.</p>
        </div>
        <pre></pre>
        <div id="rcorners1">
            <h4>4. How can you book a project space in one of the wings?</h4>
            <p>Go to <a
                    href="https://hzuniversity.topdesk.net/tas/public/ssp/content/page/locationreservationplanner?from=bbe9a4bc-42b9-4e92-9e56-da44fdcde8d2"
                    target="_blank">Reserve location</a>
                and select a location, after that go to Select additional services
                and lastly press Confirm reservation.</p>
        </div>
        <pre></pre>
        <div id="rcorners1">
            <h4>5. What are the instructions if you want to park your car at the HZ parking lot?</h4>
            <p>There is a free parking lot at Poelendaelesingel 10 in Middelburg, you need to scan your HZ pass at the
                card
                reader
                this way the gates will open and you can enter. Same goes for leaving the parking lot,
                you need to scan your HZ pass at the card reader when you want to leave and then the gates will open
                again.</p>
        </div>
    </article>
    <ul>
        @foreach($faqs as $faqIndex => $faq)
            <li>
                <div id="rcorners1">
                    <h4>{{$faqIndex + 1}}. {{$faq->question}}</h4>
                    <p>{{$faq->answer}}</p>
                    <a href="{{route('faqs.show', $faq->id)}}">Show</a>
                </div>
            </li>
        @endforeach
    </ul>
@endsection
