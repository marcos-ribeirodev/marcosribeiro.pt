<?php
$form = !empty($_POST["nome"]) && !empty($_POST["email"]) && !empty($_POST["mensagem"]);
$mensagem_enviada = null;

if ($form) {
    // Validar reCAPTCHA
    $secret = "6LeoAisrAAAAAMh0f4BdZ2BOSJRM6J-MQ3q6H1Oo"; // <- A tua Secret Key
    $response = $_POST['g-recaptcha-response'] ?? '';

    $verifica = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secret&response=$response");
    $resposta = json_decode($verifica);

    if (!$resposta->success) {
        $mensagem_enviada = [
            "tipo" => "erro",
            "mensagem" => "Verificação reCAPTCHA falhou. Por favor tenta novamente."
        ];
    } else {
        $nome     = $_POST["nome"];
        $email    = $_POST["email"];
        $mensagem = $_POST["mensagem"];

        $destinatario = "marcos@marcosribeiro.pt";

        $mensagem_html = "
        <html><body>
        <h2>Mensagem do formulário de contacto</h2>
        <p><strong>Nome:</strong> $nome</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Mensagem:</strong><br>$mensagem</p>
        </body></html>";

        $headers  = "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
        $headers .= "From: marcos@marcosribeiro.pt\r\n";
        $headers .= "Reply-To: $email\r\n";

        if (mail($destinatario, $nome, $mensagem_html, $headers)) {
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
            <div class="g-recaptcha" data-sitekey="6LeoAisrAAAAAAHaugBFXgdnLxhPspjaplBFRwS4"></div>
        </div>
        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <div class="form-group">
            <button type="submit"><?= $texto_botao_contacto ?></button>
        </div>
    </form>
</main>