@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="jumbotron">
      <div class="jubotron-left col-7">
        <h1 class="display-4 title">DIVENTA <strong>SVILUPPATORE WEB</strong></h1>
        <p class="lead jumbotron-subtitle">Trasformiamo la tua passione in una carriera. Se non trovi lavoro, ti rimborsiamo.</p>
        <ul>
          <li><span>6 mesi</span> di corso intensivo online in diretta</li>
          <li><span>Nessuna competenza</span> di programmazione richiesta</li>
          <li>Siamo certi del tuo successo, altrimenti <span>ti rimborsiamo</span></li>
        </ul>
      </div>
      <div class="jumbotron-img col-4">
        <img src="{{asset('img/pc.gif')}}" alt="">
      </div>
    </div>
</div>
  <section class="boolean-numbers">
    <div class="container">
      <div class="numbers-row">
        <div class="col-lg-3">
          <h2>98%</h2>
          <p>La percentuale dei nostri studenti che ora lavora come web developer, oltre la metà a tempo indeterminato.</p>
        </div>
        <div class="col-lg-3">
          <h2>€ 23.000</h2>
          <p>Lo stipendio medio lordo di partenza degli studenti assunti dalle nostre aziende partner.</p>
        </div>
        <div class="col-lg-3">
          <h2>#1</h2>
          <p>Siamo il primo istituto online in Italia per indice di gradimento e risultati conseguiti.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="partners-logos">
    <div class="container">
      <div class="row">
        <h5>I nostri studenti sono stati assunti da:</h5>
        <div class="">
          <img src="" alt="">
        </div>

      </div>
    </div>

  </section>
@endsection
