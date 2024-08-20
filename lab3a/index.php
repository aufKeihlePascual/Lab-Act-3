<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>IPT10 Laboratory Activity #3A</title>
    <!-- Add the Bulma CSS here -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@1.0.2/css/bulma.min.css"/>
</head>
<body>
<section class="section">
    <h1 class="title">User Registration</h1>
    <h2 class="subtitle">
        This is the IPT10 PHP Quiz Web Application Laboratory Activity. Please register
    </h2>
    <!-- Supply the correct HTTP method and target form handler resource -->
    <form method="POST" action="instructions.php">
        <div class="field">
            <label class="label">Name</label>
            <div class="control">
                <input id="name" class="input" type="text" name="complete_name" placeholder="Complete Name" required>
            </div>
        </div>

        <div class="field">
            <label class="label">Email</label>
            <div class="control">
                <input id="email" class="input" name="email" type="email" required />
            </div>
        </div>

        <div class="field">
            <label class="label">Birthdate</label>
            <div class="control">
                <input id="birthdate" class="input" name="birthdate" type="date" required />
            </div>
        </div>

        <div class="field">
            <label class="label">Contact Number</label>
            <div class="control">
                <input id="contactNum" class="input" name="contact_number" type="number" required/>
            </div>
        </div>

        <!-- Next button -->
        <button type="submit" class="button is-primary" id="submitButton" disabled>Proceed Next</button>
    </form>

    <script>
        // Function to check if all fields are filled
        function checkFields() {
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const birthdate = document.getElementById('birthdate').value.trim();
            const contactNum = document.getElementById('contactNum').value.trim();

            // Get the submit button
            const submitButton = document.getElementById('submitButton');

            // Check if all fields are filled
            if (name && email && birthdate && contactNum) {
                submitButton.disabled = false;
            } else {
                submitButton.disabled = true;
            }
        }

        // Add event listeners to the input fields
        document.getElementById('name').addEventListener('input', checkFields);
        document.getElementById('email').addEventListener('input', checkFields);
        document.getElementById('birthdate').addEventListener('input', checkFields);
        document.getElementById('contactNum').addEventListener('input', checkFields);
    </script>
</section>
</body>
</html>
