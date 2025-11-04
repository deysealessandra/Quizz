<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Musical 🎵</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
      /* ======== Fundo principal ======== */
    body {
        background: radial-gradient(circle at center, #000 40%, #1a0000 100%);
        color: #fff;
        font-family: 'Poppins', sans-serif;
        height: 100vh;
        margin: 0;
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        position: relative;
    }

      /* ======== Notas musicais animadas ======== */
    .musical-notes {
        position: absolute;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        overflow: hidden;
        z-index: 0;
    }

    .note {
        position: absolute;
        color: rgba(255, 0, 0, 0.25);
        font-size: 2rem;
        animation: floatNotes 12s linear infinite;
    }

    @keyframes floatNotes {
        0% { transform: translateY(110vh) rotate(0deg); opacity: 0.8; }
        100% { transform: translateY(-10vh) rotate(360deg); opacity: 0; }
    }

        .note:nth-child(1) { left: 5%; animation-delay: 0s; font-size: 2.5rem; }
        .note:nth-child(2) { left: 20%; animation-delay: 2s; font-size: 3rem; }
        .note:nth-child(3) { left: 40%; animation-delay: 4s; font-size: 1.8rem; }
        .note:nth-child(4) { left: 65%; animation-delay: 6s; font-size: 2.3rem; }
        .note:nth-child(5) { left: 80%; animation-delay: 8s; font-size: 3.5rem; }

      /* ======== Caixa central ======== */
    .quiz-box {
        position: relative;
        z-index: 2;
        text-align: center;
        background: rgba(255, 0, 0, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 0, 0, 0.4);
        border-radius: 20px;
        padding: 60px 40px;
        box-shadow: 0 0 30px rgba(255, 0, 0, 0.5);
        max-width: 600px;
        animation: fadeIn 1.5s ease-in-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; transform: translateY(30px); }
        to { opacity: 1; transform: translateY(0); }
    }

    .quiz-box h1 {
        font-weight: 700;
        font-size: 2.8rem;
        color: #ff3b3b;
        text-shadow: 0 0 20px rgba(255,0,0,0.8);
    }

    .quiz-box p {
        font-size: 1.2rem;
        color: #ddd;
        margin-bottom: 30px;
    }

      /* ======== Botão ======== */
    .btn-start {
        background: linear-gradient(45deg, #ff0000, #8b0000);
        color: white;
        font-weight: bold;
        border: none;
        padding: 14px 50px;
        font-size: 1.2rem;
        border-radius: 50px;
        box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
        transition: all 0.3s ease;
    }

    .btn-start:hover {
        transform: scale(1.1);
        box-shadow: 0 0 25px rgba(255, 0, 0, 0.8);
        background: linear-gradient(45deg, #ff4d4d, #b30000);
    }

      /* ======== Controle de som ======== */
    .audio-control {
        position: absolute;
        bottom: 30px;
        right: 30px;
        background: rgba(255, 0, 0, 0.2);
        border: 1px solid rgba(255,0,0,0.4);
        color: #fff;
        font-size: 1.5rem;
        padding: 10px 15px;
        border-radius: 50px;
        cursor: pointer;
        z-index: 5;
        transition: 0.3s;
        backdrop-filter: blur(5px);
    }

    .audio-control:hover {
        background: rgba(255, 0, 0, 0.4);
        transform: scale(1.1);
    }

      /* ======== Efeito de luz suave no fundo ======== */
    .glow {
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(255,0,0,0.4), transparent 70%);
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        z-index: 1;
        filter: blur(60px);
        animation: pulse 6s infinite alternate ease-in-out;
    }

    @keyframes pulse {
        from { opacity: 0.3; transform: translate(-50%, -50%) scale(1); }
        to { opacity: 0.7; transform: translate(-50%, -50%) scale(1.3); }
    }

    </style>
</head>

<body>
    <!-- Fundo animado com notas -->
    <div class="musical-notes">
        <div class="note">🎵</div>
        <div class="note">🎶</div>
        <div class="note">🎼</div>
        <div class="note">🎵</div>
        <div class="note">🎶</div>
    </div>

    <!-- Luz de fundo -->
    <div class="glow"></div>

    <!-- Caixa principal -->
    <div class="quiz-box">
        <h1>🔥 Quiz Musical 🔥</h1>
        <p>Mostre que você é um verdadeiro amante da música!
        São <strong>{{ $total_perguntas }}</strong> perguntas esperando por você!</p>
        <a href="{{ route('responder') }}" class="btn btn-start">Começar Agora 🎧</a>
    </div>

    <!-- Controle de som -->
    <button id="audioToggle" class="audio-control" title="Ativar som">🔇</button>

    <!-- Música de fundo -->
    <audio id="backgroundMusic" loop>
    <source src="{{ asset('musica_fundo.mp3') }}" type="audio/mpeg">
    </audio>

    <script>
        const music = document.getElementById('backgroundMusic');
        const btn = document.getElementById('audioToggle');
        let isPlaying = false;

    document.addEventListener('click', () => {
        if (!isPlaying) {
            music.play().catch(() => {});
            isPlaying = true;
            btn.textContent = "🎵";
            btn.title = "Pausar música";
        }
    }, { once: true });

    btn.addEventListener('click', () => {
        if (isPlaying) {
            music.pause();
            btn.textContent = "🔇";
            btn.title = "Ativar som";
        } else {
            music.play();
            btn.textContent = "🎵";
            btn.title = "Pausar música";
        }
        isPlaying = !isPlaying;
    });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
