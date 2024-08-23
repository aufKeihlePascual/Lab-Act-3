<?php
    require "helpers.php";

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.php');
        exit();
    }

    $complete_name = $_POST['complete_name'];
    $email = $_POST['email'];
    $birthdate = date('F j, Y', strtotime($_POST['birthdate']));
    
    $contact_number = $_POST['contact_number'];
    $answers = $_POST['answers'] ?? '';
    
    $questions = retrieve_questions();
    $total_questions = count($questions['questions']);

    $score = compute_score($answers);

    $hero = $score > 2 ? 'is-success' : 'is-danger';

    $confetti = $score == $total_questions;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/site/site.min.css">
    <script src="https://cdn.jsdelivr.net/npm/confetti-js@0.0.18/dist/index.min.js"></script>
</head>
<body>

    <section class="hero <?php echo $hero; ?> ">
        <div class="hero-body">
            <p class="title">Your Score <?php echo $score; ?> / <?php echo $total_questions?> </p>
            <p class="subtitle">This is the IPT10 PHP Quiz Web Application Laboratory Activity.</p>
        </div>
    </section>
    <section class="section">
        <div class="table-container">
            <table class="table is-bordered is-hoverable is-fullwidth">
                <tbody>
                    <tr>
                        <th>Input Field</th>
                        <th>Value</th>
                    </tr>
                    <tr>
                        <td>Complete Name</td>
                        <td><?php echo $complete_name; ?></td>
                    </tr>
                    <tr class="is-selected">
                        <td>Email</td>
                        <td><?php echo $email; ?></td>
                    </tr>
                    <tr>
                        <td>Birthdate</td>
                        <td><?php echo $birthdate; ?></td>
                    </tr>
                    <tr>
                        <td>Contact Number</td>
                        <td><?php echo $contact_number; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
        <canvas id="confetti-canvas"></canvas>
    </section>

    <script>
        var confettiSettings = {
            target: 'confetti-canvas'
        };
        var confetti = new ConfettiGenerator(confettiSettings);
        confetti.render();
    </script>

</body>
</html>