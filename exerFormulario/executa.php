<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <title>Resultado</title>
</head>
<body style="background-color: #243757; margin: 50px;">
    <div style="padding: 10px; background-color: white; border-radius: 5px; display:flex; justify-content: center;">
        <div>
            <?php 
                $feedback = $_POST['opcao-radio'];
                $cor = $_POST['select-color'];
                $comentario = $_POST['textArea'];
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $fone = $_POST['fone'];

                $pos = strpos($email, "@");
                $pro_email = substr($email, $pos+1);

                //crie uma variável para receber o código da tabela
                $tabela = '<table class="table table-bordered">';//abre table
                $tabela .='<thead class="thead-dark">';//abre cabeçalho
                $tabela .= '<tr>';//abre uma linha
                $tabela .= '<th>Nome</th>'; // colunas do cabeçalho
                $tabela .= '<th>Email</th>';
                $tabela .= '<th>Telefone</th>';
                $tabela .= '<th>Cor selecionada</th>';
                $tabela .= '<th>Feedback do site</th>';
                $tabela .= '<th>Provedor de email</th>';
                $tabela .= '<th>Comentário</th>';
                $tabela .= '</tr>';//fecha linha
                $tabela .= '</thead>'; //fecha cabeçalho
                $tabela .= '<tbody>';//abre corpo da tabela
                $tabela .= '<tr>';
                $tabela .= "<td>$nome</td>";
                $tabela .= "<td>$email</td>";
                $tabela .= "<td>$fone</td>";
                $tabela .= "<td>$cor</td>";
                $tabela .= "<td>$feedback</td>";
                $tabela .= "<td>$pro_email</td>";
                $tabela .= "<td style='max-width: 650px'>$comentario</td>";
                $tabela .= '</tr>';
                $tabela .= '</tbody>';
                $tabela .= '</table>';

                echo "$tabela <br>";

                if(isset($_POST['check'])){
                    echo "<b>Enviaremos para você semanalmente todas as novidades !!</b> <br>";
                }
                else{
                    echo "checkbox não foi marcado <br>";
                }

                $comentario = strtolower($comentario);

                if(strpos($comentario, "gostei") || strpos($comentario, "legal") || strpos($comentario, "bom") || strpos($comentario, "interessante") || strpos($comentario, "feliz")){
                    echo "<b>Ficamos felizes que você deixou observações positivas em nosso site :=) </b><br>";
                }

                if($cor == 'Preto'){
                    echo "O preto no geral representa tristeza, solidão, medo e isolamento. Caso você não esteja bem e precisando de ajuda, acesse o site : www.https://cvv.org.br/";
                }
            ?>
        </div>
    </div>
</body>
</html>

