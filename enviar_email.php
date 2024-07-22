<?php
// Verifica se o formulário foi submetido
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Verifica se todos os campos foram preenchidos
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Email para onde você deseja receber as mensagens
        $to = "add_info@uol.com.br";
        $subject = "Nova mensagem de contato da ADD Informática";
        $content = "Nome: $name\n";
        $content .= "Email: $email\n\n";
        $content .= "Mensagem:\n$message\n";

        // Cabeçalhos para o email
        $headers = "From: $name <$email>";

        // Envia o email
        if (mail($to, $subject, $content, $headers)) {
            // Redireciona para uma página de sucesso
            header("Location: index.html");
            exit;
        } else {
            // Se houver um erro no envio
            echo "Ocorreu um erro ao enviar a mensagem. Por favor, tente novamente mais tarde.";
        }
    } else {
        // Se algum campo estiver vazio
        echo "Por favor, preencha todos os campos do formulário.";
    }
} else {
    // Se o formulário não foi submetido diretamente
    echo "Este formulário não pode ser acessado diretamente.";
}
