<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>

<?php

$student_no = "2024-0001";
$last_name = "Baccay";
$first_name = "Leanne";
$middle_name = "Ebora";
$dob = "2005-11-10";
$birth_country = "Philippines";

?>

<div class="form-container">

    <h1>Student Registration Form</h1>

    <form>

        
        <div class="section">

            <div class="form-row">

                <div class="form-group large">
                    <label>For School Use - Permission to Register:</label>
                    <input type="text">
                </div>

                <div class="form-group small">
                    <label>Date:</label>
                    <input type="text">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label>Student Number:</label>
                    <input type="text" value="<?php echo $student_no; ?>">
                </div>

                <div class="form-group">
                    <label>Entry Date:</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Grade:</label>
                    <input type="text">
                </div>

            </div>

        </div>

       
        <div class="title-bar">
            Student Information
        </div>

        <div class="section">

            <div class="form-row">

                <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" value="<?php echo $last_name; ?>">
                </div>

                <div class="form-group">
                    <label>First Name</label>
                    <input type="text" value="<?php echo $first_name; ?>">
                </div>

                <div class="form-group">
                    <label>Middle Name</label>
                    <input type="text" value="<?php echo $middle_name; ?>">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group small">
                    <label>Gender</label>

                    <div class="radio-group">
                        <input type="radio" checked> Female
                        <input type="radio"> Male
                    </div>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="text" value="<?php echo $dob; ?>">
                </div>

            </div>

        </div>

        
        <div class="title-bar">
            Previous School Information
        </div>

        <div class="section">

            <div class="form-row">

                <div class="form-group">
                    <label>Name of Previous School</label>
                    <input type="text">
                </div>

                <div class="form-group">
                    <label>Grade at Previous School</label>
                    <input type="text">
                </div>

            </div>

            <div class="form-row">

                <div class="form-group">
                    <label>Language of Instruction</label>

                    <div class="radio-group">
                        <input type="checkbox"> English
                        <input type="checkbox"> Filipino
                        <input type="checkbox"> Other
                    </div>

                </div>

            </div>

        </div>

        
        <div class="title-bar">
            Health Information
        </div>

        <div class="section">

            <div class="form-group">
                <label>Medical Conditions</label>
                <textarea rows="4"></textarea>
            </div>

            <div class="radio-group">
                <label>Does the student require an epi-pen?</label>

                <input type="radio"> Yes
                <input type="radio" checked> No
            </div>

        </div>

        
        <div class="title-bar">
            Citizenship Information
        </div>

        <div class="section">

            <div class="form-row">

                <div class="form-group">
                    <label>Birth Country</label>
                    <input type="text" value="<?php echo $birth_country; ?>">
                </div>

                <div class="form-group">
                    <label>Country of Citizenship</label>
                    <input type="text">
                </div>

            </div>

        </div>

        <div class="submit-area">
            <button type="button">Submit Registration</button>
        </div>

    </form>

</div>

</body>
</html>