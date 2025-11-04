<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>🎵 Quiz Musical 🎶</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">

  <style>
    body {
      background: linear-gradient(135deg, rgba(0,0,0,0.9), rgba(80,0,0,0.9)),
                  url('https://images.unsplash.com/photo-1511379938547-c1f69419868d?auto=format&fit=crop&w=1600&q=80');
      background-size: cover;
      background-attachment: fixed;
      background-position: center;
      color: white;
      font-family: 'Poppins', sans-serif;
      overflow-x: hidden;
      position: relative;
    }

    h1 {
      color: #ff2e2e;
      text-shadow: 0 0 15px #ff0000;
      font-weight: 800;
      margin-bottom: 10px;
    }

    p {
      color: #ddd;
      font-size: 1.1rem;
      margin-bottom: 30px;
    }

    .card {
      background: rgba(0, 0, 0, 0.7);
      border: 1px solid #ff0000;
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(255, 0, 0, 0.3);
      color: #fff;
      transition: transform 0.2s;
    }

    .card:hover {
      transform: scale(1.02);
    }

    .btn-primary {
      background-color: #ff0000;
      border: none;
      box-shadow: 0 0 20px #ff0000;
      transition: 0.3s;
      font-weight: 600;
    }

    .btn-primary:hover {
      background-color: #b30000;
      box-shadow: 0 0 30px #ff0000;
    }

    /* Notas musicais animadas */
    .note {
      position: absolute;
      font-size: 28px;
      color: #ff0000;
      animation: floatNotes 7s linear infinite;
      opacity: 0.8;
    }

    @keyframes floatNotes {
      0% { transform: translateY(100vh) rotate(0deg); opacity: 1; }
      100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
    }

    /* Música de fundo */
    audio {
      position: fixed;
      bottom: 15px;
      right: 15px;
      width: 220px;
      opacity: 0.8;
      z-index: 1000;
    }

    /* Scrollbar personalizada */
    ::-webkit-scrollbar {
      width: 10px;
    }

    ::-webkit-scrollbar-thumb {
      background: #ff0000;
      border-radius: 10px;
    }

    ::-webkit-scrollbar-track {
      background: #1a0000;
    }
  </style>
</head>

<body>

  <!-- Notas musicais flutuando -->
  <span class="note" style="left:5%; animation-delay: 0s;">♪</span>
  <span class="note" style="left:20%; animation-delay: 1s;">♫</span>
  <span class="note" style="left:35%; animation-delay: 2s;">♩</span>
  <span class="note" style="left:55%; animation-delay: 3s;">♬</span>
  <span class="note" style="left:70%; animation-delay: 1.5s;">♪</span>
  <span class="note" style="left:85%; animation-delay: 2.5s;">♫</span>

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col text-center">
        <h1>🎧 Quiz Musical 🎤</h1>
        <p>São <strong>15 perguntas</strong> para testar seu conhecimento sobre música!</p>

        <form method="POST" action="{{ route(name: 'quizz.responder') }}">
          @csrf
          @foreach($perguntas as $pergunta)
          <div class="card mb-4 p-3">
            <h4>{{ $pergunta->texto }}</h4>
            <div class="p-2 text-start">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" value="A">
                <label class="form-check-label">{{ $pergunta->opcao_a }}</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" value="B">
                <label class="form-check-label">{{ $pergunta->opcao_b }}</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" value="C">
                <label class="form-check-label">{{ $pergunta->opcao_c }}</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="{{ $pergunta->id }}" value="D">
                <label class="form-check-label">{{ $pergunta->opcao_d }}</label>
              </div>
            </div>
          </div>
          @endforeach

          <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-primary btn-lg">🎶 Enviar Respostas 🎵</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- Música de fundo -->
  <audio autoplay loop controls>
    <source src="https://cdn.pixabay.com/audio/2023/03/07/audio_558c7f91d2.mp3" type="audio/mpeg">
    Seu navegador não suporta áudio.
  </audio>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
