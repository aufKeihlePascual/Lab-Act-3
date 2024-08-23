<?php
    require "helpers.php";

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.php');
        exit();
    }

    $complete_name = $_POST['complete_name'];
    $email = $_POST['email'];
    $birthdate = $_POST['birthdate'];
    $contact_number = $_POST['contact_number'];
    $agree = $_POST['agree'];
    $answer = $_POST['answer'] ?? null;
    $answers = $_POST['answers'] ?? '';

    $questions_data = retrieve_questions(); 
    $questions = $questions_data['questions'];

?>

<html>
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css" />
</head>
<body>
<section class="section" style="background-color: #1A4870;">
    <h1>Quiz Application</h1>
    <h3>You have 60 seconds to answer all of the questions.</h3>

    <form method = "POST" action = "result.php" id = "autoSubmit">
        <input type = "hidden" name = "complete_name" value = "<?php echo $complete_name; ?>" />
        <input type = "hidden" name = "email" value = "<?php echo $email; ?>" />
        <input type = "hidden" name = "birthdate" value = "<?php echo $birthdate; ?>" />
        <input type = "hidden" name = "contact_number" value = "<?php echo $contact_number; ?>" />
        <input type = "hidden" name = "answers" value = "<?php echo $answers; ?>" />
        <input type = "hidden" name = "agree" value = "<?php echo $agree; ?>" />
        
        <?php foreach ($questions as $index => $question): ?>
            <div class="box">
                <h3 class="title is-4"><?php echo ($index + 1) . '. ' . htmlspecialchars($question['question']); ?></h3>

                <?php foreach ($question['options'] as $option): ?>
                    <div class="field">
                        <div class="control">
                            <label class="radio">
                                <input type="radio" name="answers[<?php echo $index; ?>]" value="<?php echo htmlspecialchars($option['key']); ?>" required />
                                <?php echo htmlspecialchars($option['value']); ?>
                            </label>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>

        <!-- Start Quiz button -->
        <button type="submit" class="button">Submit</button>
        
    </form>
</section>

<script type="text/javascript">
    function autoSubmitForm() {
        document.getElementById('autoSubmit').submit();
    }
    
    setTimeout(autoSubmitForm, 60000);
</script>

</body>
</html>