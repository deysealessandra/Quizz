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
            'texto' => 'Quem é conhecido como o "rei do pop"?',
            'opcao_a' => 'Elvis Presley',
            'opcao_b' => 'Michael Jackson',
            'opcao_c' => 'Justin Timberlake',
            'opcao_d' => 'Prince',
            'resposta correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);


        Pergunta::create([
            'texto' => 'Qual banda ficou famosa com a música Bohemian Rhapsody?',
            'opcao_a' => 'The Beatles',
            'opcao_b' => 'Nirvana',
            'opcao_c' => 'Queen',
            'opcao_d' => 'U2',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem é o autor da música O Leãozinho?',
            'opcao_a' => 'Gilberto Gil',
            'opcao_b' => 'Caetano Veloso',
            'opcao_c' => 'Chico Buarque',
            'opcao_d' => 'Milton Nascimento',
            'resposta_correta' => 'B',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Qual dupla sertaneja lançou o sucesso Evidências?',
            'opcao_a' => 'Zezê Di Camargo & Luciano',
            'opcao_b' => 'Matheus & Kauan',
            'opcao_c' => 'Chitãozinho & Xororó',
            'opcao_d' => 'Bruno & Marrone',
            'resposta_correta' => 'C',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'A música Construção, de Chico Buarque, é conhecida por:',
            'opcao_a' => 'Utilizar versos que terminam sempre com palavras proparoxítonas',
            'opcao_b' => 'Ter uma letra escrita em forma de diálogo',
            'opcao_c' => 'Ser uma crítica direta à censura militar',
            'opcao_d' => 'Ser uma homenagem a operários da ditadura',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'Quem foi a primeira cantora brasileira a vencer um Grammy Latino?',
            'opcao_a' => 'Elba Ramalho',
            'opcao_b' => 'Marisa Monte',
            'opcao_c' => 'Ivete Sangalo',
            'opcao_d' => 'Daniela Mercur',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);


        Pergunta::create([
            'texto' => ' O que significa a sigla "MPB"?',
            'opcao_a' => 'a música popular brasileira',
            'opcao_b' => 'movimento popular brasileiro',
            'opcao_c' => 'música popular de Brasília',
            'opcao_d' => 'melodia popular brasileira',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
        'texto' => 'Qual cantor e compositor brasileiro é conhecido por misturar samba, rock e poesia em músicas como
“O Bêbado e a Equilibrista”?',
            'opcao_a' => 'Chico Buarque',
            'opcao_b' => 'Djavan',
            'opcao_c' => 'Milton Nascimento',
            'opcao_d' => 'Caetano Veloso',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => ' Qual cantor ficou famoso por músicas como “Festa” e “Vamo Batê Lata” no cenário do pagode/axé?',
            'opcao_a' => 'Daniela Mercury',
            'opcao_b' => 'Marisa Monte',
            'opcao_c' => 'Ivete Sangalo',
            'opcao_d' => 'Cláudia Leitte',
            'resposta_correta' => 'D',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => 'A música “Garota de Ipanema” foi composta por:',
            'opcao_a' => 'Chico Buarque e Edu Lobo',
            'opcao_b' => 'Tom Jobim e Vinícius de Moraes',
            'opcao_c' => 'João Gilberto e Caetano Veloso',
            'opcao_d' => 'Gilberto Gil e Caetano Veloso',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

        Pergunta::create([
            'texto' => ' Qual dos seguintes sucessos é de Anitta?',
            'opcao_a' => 'bang',
            'opcao_b' => 'evidências',
            'opcao_c' => 'trem das onze',
            'opcao_d' => 'fio de cabelo',
            'resposta_correta' => 'A',
            'imagem' => null,
            'pontos' => 1,
        ]);

    }
}
