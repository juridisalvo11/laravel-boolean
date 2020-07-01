@extends('layouts.app');

@php
$faqs = [
  [
    'question' => "Chi può fare il corso Boolean?",
    'answer' => [
    "Chiunque abbia una forte curiosità verso il mondo della programmazione e voglia di imparare a fare il mestiere di sviluppatore.
    <br>
    Età e curriculum non sono una discriminante: infatti, i nostri studenti hanno dai 18 ai 45 anni, sono giovani ragazzi senza alcuna esperienza lavorativa, ma anche affermati professionisti che vogliono cambiare settore.Se non hai mai programmato o se hai già seguito qualche corso ma senti di non aver approfondito abbastanza per diventare programmatore, Boolean è il corso che fa per te."
    ]
  ],
  [
    'question' => "Che competenze devo avere per iniziare il corso?",
    'answer' => [
      "Il corso parte da zero, quindi non serve alcuna competenza di programmazione, è necessario però superare il processo di selezione."
    ]
  ],
  [
    'question' => "In cosa consiste il processo di selezione?",
    'answer' => [
      "Boolean è un corso intensivo che richiede impegno costante, dedizione e un’attitudine al problem solving. Per assicurarci che ogni studente abbia concrete possibilità di diventare uno sviluppatore e iniziare una nuova carriera, selezioniamo gli studenti tramite un test di logica a risposta multipla e un colloquio motivazionale. Contattaci per iniziare il tuo percorso o per saperne di più!"
    ]
  ],
  [
    'question' => "Posso seguire il corso mentre lavoro o studio?",
    'answer' => [
      "Il nostro corso è full-time e si svolge ogni giorno, dal lunedì al venerdì, occupando - tra le lezioni al mattino e le esercitazioni al pomeriggio - almeno 6 ore della giornata di ogni studente. Avere una seconda occupazione rende poco probabile che tu riesca a stare al passo con il resto della classe. Il nostro obiettivo è che, a fine corso, tu sia pronto a entrare nel mondo del lavoro: il tuo pressoché completo coinvolgimento è essenziale. "
    ]
  ],
  [
    'question' => "Di cosa ho bisogno per seguire il corso?",
    'answer' => [
      "Ti basta un PC, una webcam e una buona connessione Internet (non inferiore ai 5Mb/s)."
    ]
  ],
  [
    'question' => "Questo corso è una valida alternativa alla laurea?",
    'answer' => [
      "Sì, nel mondo della programmazione non ci sono percorsi di carriera che ti sono preclusi se non sei in possesso di una laurea. Le aziende alla ricerca di web developer sanno che degli studi universitari non rappresentano una garanzia nel saper programmare e, per questo motivo, valutano anche candidati non laureati."
    ]
  ],
  [
    'question' => "Quanto costa il corso?",
    'answer' => [
      "Trovi tutte le informazioni sul prezzo nell'apposita sezione della pagina corso"
    ]
  ],
];

$faqs2 = [
  [
    'question2' => "Ho la certezza di essere assunto?",
    'answer2' => [
    "Dipende tutto da te! Come dimostrano numerosi studi di settore, lo sviluppatore web è uno dei mestieri più ricercati in Italia e Boolean fornisce tutte le competenze richieste dalle aziende per iniziare a fare questo lavoro. Oltre a fornirti conoscenze di programmazione, ti presentiamo alle nostre aziende partner che assumono in tutta Italia e ti aiutiamo a prepararti al meglio per i colloqui!"
    ]
  ],
  [
    'question2' => "Terminato il corso, sono supportato nella ricerca del lavoro?",
    'answer2' => [
      "Certamente! Verrai presentato a oltre 50 aziende che operano nel settore Internet in Italia. Dalla multinazionale più quotata alla startup in ascesa, avrai l’occasione di presentare te stesso e le tue qualità da neo-sviluppatore. Inoltre, ti affianchiamo nella costruzione del CV, del portfolio di progetti e simuliamo insieme dei colloqui: il tuo successo è il nostro!"
    ]
  ],
  [
    'question2' => "Quanti dei vostri ex allievi hanno ricevuto offerte di lavoro?",
    'answer2' => [
      "Il 100%. Tutti gli studenti che hanno terminato il corso hanno ricevuto una o più offerte di lavoro. Il nostro corso fornisce solide basi di programmazione ed essendo il mestiere del developer molto ricercato, le aziende sono sempre ben disposte ad assumere persone competenti e volenterose."
    ]
  ],
  [
    'question2' => "Posso fare lo sviluppatore freelance al termine del corso?",
    'answer2' => [
      "È una possibilità, ma sconsigliamo di intraprendere questa strada subito dopo il corso: per essere sviluppatori freelance l'esperienza è fondamentale e difficilmente sono sufficienti 6 mesi. Se il tuo obiettivo è lavorare seguendo i tuoi ritmi, la strada è quella giusta: molte aziende si stanno aprendo al work from home e, con un po' di esperienza in più, siamo certi che diventerai un ottimo sviluppatore freelance!"
    ]
  ],
  [
    'question2' => "Troverò un lavoro nella mia città?",
    'answer2' => [
      "Collaboriamo con tante aziende, ma non possiamo garantire un’opportunità di lavoro in una zona specifica: attualmente ci siamo concentrati sulle migliori aziende del settore, quelle che creano prodotti tecnologici di alta qualità e hanno team di sviluppo ben organizzati che permettono di fare esperienze formative. Certo è che, qualora le tue esigenze non combaciassero con le aree geografiche delle nostre aziende partner, sarà nostra cura aiutarti a ricercare soluzioni più vicine a te."
    ]
  ],
  [
    'question2' => "Che tipo di attestato rilasciate?",
    'answer2' => [
      "Rilasciamo un attestato di frequenza che certifica il numero di ore di lezione frequentate e gli argomenti trattati (HTML, CSS, Javascript, MySql e PHP)."
    ]
  ],
]

@endphp

@section('content')
    <div class="container">
      <div class="row domande-frequenti">
        <h1>Domande frequenti</h1>
        <p>Le nostre risposte a tutte le tue domande. Non trovi la risposta che stai cercando? Contattaci e saremo felici di darti una mano.</p>
      </div>
    </div>
    <div class="faq-row">
      <div class="wrapper-grey">
          <div class="title-faq">
            <h2>Prima del corso</h2>
          </div>
        <div class="container">
          @foreach ($faqs as $faq)
            <div class="faq-box">
            <h1 class="title"><?php echo $faq['question'] ?></h1>
            @foreach ($faq['answer'] as $paragraph)
                <p class="paragraph"><?php echo $paragraph ?></p>
            @endforeach

            </div>
          @endforeach
        </div>
      </div>
      <div class="wrapper-blu">
          <div class="title-faq">
            <h2>Dopo il corso</h2>
          </div>
        <div class="container">
          @foreach ($faqs2 as $faq2)
            <div class="faq-box">
            <h1 class="title"><?php echo $faq2['question2'] ?></h1>
            @foreach ($faq2['answer2'] as $paragraph)
                <p class="paragraph"><?php echo $paragraph ?></p>
            @endforeach

            </div>
          @endforeach
        </div>

      </div>
    </div>
@endsection
