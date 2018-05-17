@extends('layouts.master')

@section('title', $title)

@section('content')
<div class="container mt-5">
  <h1 class="text-center red">Waar kan je terecht?</h1>
  <div class="card shadow">
    <div class="card-body">
      <div class="card-text">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem repellendus, assumenda doloremque magnam velit amet
          inventore porro dolores voluptate? Doloribus necessitatibus, omnis cupiditate asperiores sequi atque libero quaerat
          itaque praesentium.</p>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <h2 class="text-center black">Praat er over</h2>
  <div class="card shadow">
    <div class="card-body">
      <div class="card-text">
          <p>Allereerst kan je erover praten met de CLB dienst van je school. Deze mensen zullen je graag verder helpen.
          Anderzijds kan je ook terecht bij je zorgleerkracht op school. Deze persoon gaat er alles aan doen om je terug op je gemak te stellen.
          Als laatste, en zeker daarom niet de minst beste oplossing, is praten met je ouders. Die zullen dan de juiste personen aanspreken in jouw plaats.
        </p>
      </div>
    </div>
  </div>
</div>
<div class="container mt-5">
  <h2 class="text-center black">Online chats</h2>
  <p>
    Als je niet goed weet tegen wie eerst te praten en heb je liever eerst een anoniem gesprek met iemand online, dan kan je terecht bij volgende online chats waarbij ook deze mensen je graag verder helpen.
  </p>
  <div class="card-deck">
    <div class="card shadow">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/jac.png') !!}" alt="Jac">
      </div>
      <div class="card-body">
        <div class="card-title"><h5>JAC</h5></div>
        <div class="card-text">
          Het JAC <strong>helpt jongeren met al hun vragen en problemen</strong>. Problemen thuis? Op zoek naar je eigen stek? Vragen over seks? Slachtoffer van geweld of misbruik? Geldproblemen? Vragen over drugs? Of over pesten? Informatie nodig om zelfstandig te wonen? Of over je rechten en plichten? … Je kan bij het JAC terecht met elke vraag.
        </div>
      </div>
      <div class="card-footer">
        <a href="http://www.jac.be/chat" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/awel.png') !!}" alt="Awel">
      </div>
      <div class="card-body">
        <div class="card-title"><h5>AWEL</h5></div>
        <div class="card-text">
          Awel luistert naar alle kinderen en jongeren met een vraag, een verhaal en/of een probleem.
          Alle kinderen en jongeren kunnen hen anoniem contacteren over alles wat ze bezighoudt. Ze zijn er voor hen door te luisteren, mee te voelen en mee te denken.
        </div>
      </div>
      <div class="card-footer">
        <a href="http://www.awel.be/chat" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-img-top card-image"><img class='img-fluid h-100' src="{!! asset('images/tele-onthaal.png') !!}" alt="Tele-onthaal"></div>
      <div class="card-body">
        <div class="card-title"><h5>Tele-onthaal</h5></div>
        <div class="card-text">
        Soms moet je al je moed bijeen rapen voor een gesprek. Of vraag je je af of zo’n gesprek wel veilig is. Om het voor jou zo makkelijk mogelijk te maken om te praten, houden we de drempel zo laag mogelijk.
        </div>
      </div>
      <div class="card-footer">
        <a href="http://www.tele-onthaal.be" target="_blank">Ga naar de chat of bel ze op</a>
      </div>
    </div>
    </div>

  <div class="card-deck">
      <div class="card shadow">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/nupraatikerover.jpg') !!}" alt="Nu praat ik erover">
      </div>
      <div class="card-body">
        <div class="card-title"><h5>Nu Praat Ik Erover</h5></div>
        <div class="card-text">
          Ben je minderjarig en heb je vragen over seksueel misbruik? Word je seksueel lastig gevallen?
          Word je vaak uitgescholden? Is er iemand die je fysiek pijn doet? Ken je iemand met zo’n probleem?
        </div>
      </div>
      <div class="card-footer">
        <a href="http://www.nupraatikerover.be/" target="_blank">Ga naar de chat</a>
      </div>
    </div>
    <div class="card shadow">
      <div class="card-img-top card-image">
        <img class='img-fluid h-100' src="{!! asset('images/clbchat.png') !!}" alt="CLB Chat">
      </div>
      <div class="card-body">
        <div class="card-title"><h5>CLB Chat</h5></div>
        <div class="card-text">
          Op de chat praat je met een medewerker van het CLB.
          Je kan je verhaal vertellen, een vraag stellen, … of samen met je chatbegeleider bekijken wat je zou willen bereiken, en hoe je dat kan aanpakken.
          De CLB-medewerker chat enkel met jou. Een chatgesprek duurt maximum 45 minuten, zodat ook andere leerlingen een kans krijgen om te chatten.
        </div>
      </div>
      <div class="card-footer">
        <a href="https://www.clbchat.be/" target="_blank">Ga naar de chat</a>
      </div>
    </div>
  </div>
  </div>
<div class="container mt-5">
  <h2 class="text-center black">Aangifte doen</h2>
  <div class="card shadow">
    <div class="card-body">
      <div class="card-text">
        <p>Heb je er met iemand over gepraat en is het duidelijk geworden dat de feiten strafbaar zijn of dat er dringende politiehulp nodig is,
          dan kan je terecht op het noodnummer van de politie. Dit is <strong>101</strong>.
        </p>
        <p>
          Is de hulp niet dringend? Dan kan je De Blauwe Lijn bellen. Dit is <strong>0800 123 12</strong>.
          Ook kan een online afspraak maken met de lokale politie bij het Blauwe Loket op <a href="https://www.politieantwerpen.be/e-loket">https://www.politieantwerpen.be/e-loket</a>.
        </p>
        <p>

        </p>
      </div>
    </div>
</div>
</div>

@endsection
