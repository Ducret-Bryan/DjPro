<?php

function contactPage()
{
    $title = "Djs Pro - Contact";
    $page = "contact";
    $script = ['formScript'];
    include 'src/view/layout.php';
}

function treatmentForm()
{
    $data = [
        'nom' => htmlspecialchars($_POST['name']),
        'email' => htmlspecialchars($_POST['email']),
        'object' => htmlspecialchars($_POST['subject']),
        'message' => htmlspecialchars($_POST['message']),
    ];

    $isEmpty = array_filter($data, function ($value) {
        return empty($value);
    });
    $emailValid = (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) ? true : false;



    $response = '';
    if (empty($isEmpty) && $emailValid) {
        $response = sendMail($data);
    } else {
        $champs = '';
        $i = 1;
        $length = count($isEmpty);

        foreach ($isEmpty as $key => $value) {
            if ($i != $length)
                $champs = $champs . $key . ', ';
            else
                $champs = $champs . $key;
            ++$i;
        }
        $response = [0, 'Un des champs est vide: ' . $champs . '.'];
    }
    echo json_encode($response);
}

function sendMail($data)
{
    $to = 'ducret.bryan@gmail.com';
    $subject = $data['object'];
    $message = 'Message reçu de' . $data['nom'] . ':' . $data['message'];
    $headers = array(
        'From' => $data['email'],
        'Reply-To' => $data['email'],
        'X-Mailer' => 'PHP/' . phpversion()
    );

    $success  = mail($to, $subject, $message, $headers);

    if ($success) {
        return 'Le message a bien été envoyer.';
    } else {
        return 'Désolé, il y a eu une erreur lors de l\'envoi de votre message.';
    }
}
