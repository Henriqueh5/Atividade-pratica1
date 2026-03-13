<?php

$cardapio = [
    1 => ["produto" => "X-Burguer", "preco" => 18],
    2 => ["produto" => "X-Salada", "preco" => 20],
    3 => ["produto" => "Batata Frita", "preco" => 15],
    4 => ["produto" => "Refrigerante", "preco" => 8],
    5 => ["produto" => "Suco Natural", "preco" => 10]
];

echo "Nome do cliente: ";
$cliente = trim(fgets(STDIN));

echo "\n--- CARDÁPIO ---\n";
foreach ($cardapio as $codigo => $item) {
    echo "$codigo - {$item['produto']} (R$ {$item['preco']})\n";
}

echo "\nDigite o código do produto: ";
$codigo = trim(fgets(STDIN));

if (!isset($cardapio[$codigo])) {
    echo "Código inválido.\n";
    exit;
}

echo "Quantidade: ";
$qtd = trim(fgets(STDIN));

if ($qtd <= 0) {
    echo "Quantidade inválida.\n";
    exit;
}

$produto = $cardapio[$codigo]['produto'];
$preco = $cardapio[$codigo]['preco'];

$total = $preco * $qtd;

echo "Valor pago: ";
$valorPago = trim(fgets(STDIN));

if ($valorPago < $total) {
    echo "Valor insuficiente.\n";
    exit;
}

$troco = $valorPago - $total;

echo "\n=== RESUMO DO PEDIDO ===\n";
echo "Cliente: $cliente\n";
echo "Produto: $produto\n";
echo "Quantidade: $qtd\n";
echo "Total: R$ $total\n";
echo "Valor pago: R$ $valorPago\n";
echo "Troco: R$ $troco\n";

?>