<?php
$form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"]);
$mensagem_enviada = null;

if ($form) {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    if ($email) {
        $destinatario = "marcos@marcosribeiro.pt";

        $headers = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        if (mail($destinatario, $nome, $mensagem, $headers)) {
            $mensagem_enviada = [
                "tipo" => "sucesso",
                "mensagem" => "Obrigado pela sua mensagem! Entrarei em contacto em breve."
            ];
        } else {
            $mensagem_enviada = [
                "tipo" => "erro",
                "mensagem" => "Não foi possível enviar a sua mensagem. Tente novamente mais tarde."
            ];
        }
    }
}
?>

<main class="contacto-section">
    <h2><?= $texto_contacto_titulo ?></h2>
    <p><?= $texto_contacto_msg ?></p>

    <?php if ($mensagem_enviada): ?>
        <div class="mensagem-<?php echo $mensagem_enviada['tipo']; ?>">
            <p><?php echo $mensagem_enviada['mensagem']; ?></p>
        </div>
    <?php endif; ?>


    <form class="contacto-form" action="" method="post">
        <div class="form-group">
            <i class="fa-solid fa-user"></i>
            <input type="text" id="name" name="nome" placeholder="<?= $contacto_nome ?>" required />
        </div>
        <div class="form-group">
            <i class="fa-solid fa-envelope"></i>
            <input type="email" id="email" name="email" placeholder="<?= $contacto_email ?>" required />
        </div>
        <div class="form-group">
            <i class="fa-solid fa-message"></i>
            <textarea id="mensagem" name="mensagem" rows="5" placeholder="<?= $contacto_mensagem ?>" required></textarea>
        </div>
        <div class="form-group">
            <button type="submit"><?= $texto_botao_contacto ?></button>
        </div>
    </form>
</main>