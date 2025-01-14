<?php
// $recebido = $_GET['dado'];
// $recebido = $_GET['nome'];
$produtos = [
    [
        'id' => 1,
        'nome' => 'Produto A',
        'descricao' => 'Descrição do Produto A',
        'preco' => 29.99,
        'quantidade' => 100,
        'categoria' => 'Eletrônicos',
        'imagem' => 'produto_a.jpg'
    ],
    [
        'id' => 2,
        'nome' => 'Produto B',
        'descricao' => 'Descrição do Produto B',
        'preco' => 59.99,
        'quantidade' => 50,
        'categoria' => 'Casa',
        'imagem' => 'produto_b.jpg'
    ],
    [
        'id' => 3,
        'nome' => 'Produto C',
        'descricao' => 'Descrição do Produto C',
        'preco' => 19.99,
        'quantidade' => 200,
        'categoria' => 'Moda',
        'imagem' => 'produto_c.jpg'
    ],
    [
        'id' => 4,
        'nome' => 'Produto D',
        'descricao' => 'Descrição do Produto D',
        'preco' => 89.99,
        'quantidade' => 30,
        'categoria' => 'Esportes',
        'imagem' => 'produto_d.jpg'
    ]
];
/* $data = json_encode($produtos, JSON_UNESCAPED_UNICODE);
    echo $data;
    $selectId = $argv[1];
    if ($selectId == null){
        foreach ($produtos as $item) {
            if (isset($item['id'])) {
                $id = $item['id'];
                $nome = $item['nome'];
                $descricao = $item['descricao'];
                $preco = $item['preco'];
                $quantidade = $item['quantidade'];
                $categoria = $item['categoria'];
                $img = $item['imagem'];
                       
    echo "Nome: $nome\t\tDescrição: $descricao\tPreço: $preco\nQuantidade: $quantidade\t\tCategoria: $categoria\t\t\tImagem: $img\n\n";
            }
        }
        } else {
            $itemID = $selectId;
            foreach ($produtos as $item) {
                if ($item['id'] == $itemID) {
                    $id = $item['id'];
                    $nome = $item['nome'];
                    $descricao = $item['descricao'];
                    $preco = $item['preco'];
                    $quantidade = $item['quantidade'];
                    $categoria = $item['categoria'];
                    $img = $item['imagem'];
            
                    echo "Nome: $nome\t\tDescrição: $descricao\tPreço: $preco\nQuantidade: $quantidade\t\tCategoria: $categoria\t\t\tImagem: $img\n\n";
                }
            }
            if($itemID < 1 || $itemID > 4){
                echo "Este produto não foi cadastrado!\n";
            }
    }*/ 
$texto = "";
foreach ($produtos as $item) {
    $id = $item['id'];
    $nome = $item['nome'];
    $descricao = $item['descricao'];
    $preco = $item['preco'];
    $quantidade = $item['quantidade'];
    $categoria = $item['categoria'];
    $img = $item['imagem'];

    
    $texto .= "
    <tr>
        <th scope=\"row\">$id</th>
        <td>$nome</td>
        <td>$descricao</td>
        <td>$preco</td>
        <td>$quantidade</td>
        <td>$categoria</td>
        <td>$img</td>
    </tr>
    ";
}
?>