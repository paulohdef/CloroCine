<?php

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";


if ($bd->exec($sql))
    echo "\ntabela filmes apagada\n";

$sql = "CREATE TABLE filmes (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    titulo VARCHAR(200) NOT NULL,
    poster VARCHAR(200),
    sinopse TEXT,
    nota DECIMAL(2,1)
    )    
    ";

if ($bd->exec($sql))
    echo "\ntabela filmes criada\n";
else 
    echo "\nerro ao criar tabela filmes criada\n";

$sql = "INSERT INTO filmes(id,titulo,poster, sinopse,nota) VALUES (
    0,
    'Vingadores',
    'https://www.themoviedb.org/t/p/w300/q6725aR8Zs4IwGMXzZT8aC8lh41.jpg',
    'Após os eventos devastadores de Vingadores: Guerra Infinita, o universo está em ruínas devido aos esforços do Titã Louco, Thanos. Com a ajuda de aliados remanescentes, os Vingadores devem se reunir mais uma vez a fim de desfazer as ações de Thanos e restaurar a ordem no universo de uma vez por todas, não importando as consequências.',
    9.9
    )";


if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else 
    echo "\nerro ao inserir filmes\n";

$sql = "INSERT INTO filmes(id,titulo,poster, sinopse,nota) VALUES (
    1,
    'Ad Astra',
    'https://www.themoviedb.org/t/p/w300/wigZBAmNrIhxp2FNGOROUAeHvdh.jpg',
    'Roy McBride é um engenheiro espacial, portador de um leve grau de autismo, que decide empreender a maior jornada de sua vida: viajar para o espaço, cruzar a galáxia e tentar descobrir o que aconteceu com seu pai, um astronauta que se perdeu há vinte anos atrás no caminho para Netuno.',
    9.7
    )";


if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else 
    echo "\nerro ao inserir filmes\n";


?>