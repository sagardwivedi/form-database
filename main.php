<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
        <title>Student</title>
    </head>
    <body>
        <div class="container"> 
            <div class="title">Student Details</div>
            <form action="data.php" method="POST">
                <div class="details">
                    <div class="form__div">
                        <input type="text" name="student_name" class="form__input" placeholder=" " required>
                        <label  class="form__label">Name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" name="father_name" class="form__input" placeholder=" " required>
                        <label  class="form__label">Father Name</label>
                    </div>
                    <div class="form__div">
                        <input type="text" name="mother_name" class="form__input" placeholder=" " required>
                        <label  class="form__label">Mother Name</label>
                    </div>
                    <div class="form__div">
                        <input type="tel" name="student_mobile" class="form__input" placeholder=" " required>
                        <label  class="form__label">Mobile Number</label>
                    </div>
                    <div class="form__div">
                        <input type="email" name="student_email" class="form__input" placeholder=" " required>
                        <label  class="form__label">Email</label>
                    </div>
                    <div class="form__div">
                        <input type="text" name="student_aadhar" class="form__input" placeholder=" " required>
                        <label  class="form__label">Aadhar Card</label>
                    </div>
                    <div class="form__div">
                        <input type="text" name="student_add" class="form__input" placeholder=" " required>
                        <label class="form__label">Address</label>
                    </div>
                    <div class="form__div">
                        <input type="text" name="student_gender" class="form__input" placeholder=" " required>
                        <label class="form__label">Gender</label>
                    </div>
                </div>
                <input type="submit" name="submit" class="form__button" value="Submit">
            </form>
        </div>
    </body>
</html>