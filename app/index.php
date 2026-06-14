<?php
$host = 'postgres_db';
$port = '5432';
$dbname = 'edutech_db';
$user = 'postgres';
$pass = 'senha_da_nasa';

try {
    $pdo = new PDO(
        "pgsql:host=$host;port=$port;dbname=$dbname",
        $user,
        $pass
    );
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "✅ Conectado ao PostgreSQL com sucesso!";
} catch (PDOException $e) {
    die("Erro na conexão: " . $e->getMessage());
}