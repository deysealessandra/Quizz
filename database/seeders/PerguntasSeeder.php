<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pergunta;

class PerguntasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Criar perguntas de exemplo
        Pergunta::create([
            'texto' => 'Qual banda lançou o álbun abbey road?',
            'opcao_a' => 'Pink Floyd',
            'opcao_b' => 'The Beatles',
            'opcao_c' => 'Queen',
            'opcao_d' => 'The Rolling Stones',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem canta a música Marry you?',
            'opcao_a' => 'Justin Bieber',
            'opcao_b' => 'Buno Mars',
            'opcao_c' => 'Ariana Grande',
            'opcao_d' => 'Adele',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual é o gênero musical da banda Sorriso Maroto?',
            'opcao_a' => 'Samba',
            'opcao_b' => 'K-pop',
            'opcao_c' => 'Pagode',
            'opcao_d' => 'Sertanejo',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual artista é conhecida como "Rainha do Pop"?',
            'opcao_a' => 'Madonna',
            'opcao_b' => 'Lady Gaga',
            'opcao_c' => 'Beyoncé',
            'opcao_d' => 'Katy Perry',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual desses cantores é brasileiro?',
            'opcao_a' => 'Ariana Grande',
            'opcao_b' => 'Adele',
            'opcao_c' => 'Chico Buarque',
            'opcao_d' => 'Bruno Mars',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);
    }
}
