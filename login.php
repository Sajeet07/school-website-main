<style>
    /* Basic form styles */
    /* Basic form styles */
    body {
        background-color: #f5f5f5;
        font-family: Arial, sans-serif;
    }

    form {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        max-width: 600px;
        margin: 0 auto;
    }

    fieldset {
        border: none;
        margin-bottom: 20px;
    }

    legend {
        font-size: 20px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    label {
        display: block;
        font-weight: bold;
        color: #333;
    }

    input[type="text"],
    input[type="tel"],
    input[type="email"],
    textarea,
    select {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
        color: #333;
    }

    input[type="file"] {
        display: block;
        margin-top: 5px;
    }

    button[type="submit"] {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #4caf50;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    button[type="submit"]:hover {
        background-color: #45a049;
    }

    /* Color palette */
    :root {
        --primary-color: #2196f3;
        --secondary-color: #f50057;
        --accent-color: #ff9800;
    }

    /* Additional form styles */
    #preview-photo {
        max-width: 200px;
        margin-top: 5px;
    }

    select {
        appearance: none;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
        background-color: #f9f9f9;
        color: #333;
    }

    select option {
        padding: 8px;
    }

    /* Color styles */
    input[type="text"],
    input[type="tel"],
    input[type="email"],
    textarea,
    select {
        background-color: #fff;
        color: #333;
        border: 1px solid #ddd;
        transition: border-color 0.3s ease;
    }

    input[type="text"]:focus,
    input[type="tel"]:focus,
    input[type="email"]:focus,
    textarea:focus,
    select:focus {
        border-color: var(--primary-color);
    }

    button[type="submit"] {
        background-color: var(--primary-color);
    }

    button[type="submit"]:hover {
        background-color: var(--secondary-color);
    }

    /* Form responsiveness */
    @media only screen and (max-width: 600px) {
        /* Adjust form styles for smaller screens */
        /* Add your specific CSS rules for smaller screens here */
    }
</style>



<form action="admin/addstudent.php" method="POST" id="enrollment-form" enctype="multipart/form-data">
    <fieldset>
        <legend>Student Personal Information</legend>
        <div class="form-group">
            <label for="name">Full Name</label>
            <input type="text" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select id="gender" name="gender" required>
                <option value="" disabled selected>Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" id="dob" name="dob" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact No.</label>
            <input type="tel" id="contact" name="contact" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="class">Admission Applied For Class</label>
            <select id="class" name="class" required>
                <option value="" disabled selected>Select Class</option>
                <option value="1">Nursery</option>
                <option value="2">LKG</option>
                <option value="3">UKG</option>
                <option value="4">Class 1</option>
                <option value="5">Class 2</option>
                <option value="6">Class 3</option>
                <option value="7">Class 4</option>
                <option value="8">Class 5</option>
                <option value="9">Class 6</option>
                <option value="10">Class 7</option>
                <option value="11">Class 8</option>
                <option value="12">Class 9</option>
                <option value="13">Class 10</option>
            </select>
        </div>
    </fieldset>

    <!-- Rest of the fieldsets and form elements -->

    <div class="form-group">
        <label for="img">Upload Photo</label>
        <input type="file" id="img" name="img" accept="image/*" required>
    </div>
    <!-- Add the rest of the personal information fields -->
    </fieldset>

    <fieldset>
        <legend>Parents Details</legend>
        <div class="form-group">
            <label for="f_name">Father's Name</label>
            <input type="text" id="f_name" name="f_name" required>
        </div>
        <div class="form-group">
            <label for="f_profession">Father's Profession</label>
            <input type="text" id="f_profession" name="f_profession" required>
        </div>
        <div class="form-group">
            <label for="f_contact">Father's Contact No.</label>
            <input type="tel" id="f_contact" name="f_contact" required>
        </div>
        <div class="form-group">
            <label for="m_name">Mother's Name</label>
            <input type="text" id="m_name" name="m_name" required>
        </div>
        <div class="form-group">
            <label for="m_profession">Mother's Profession</label>
            <input type="text" id="m_profession" name="m_profession" required>
        </div>
        <div class="form-group">
            <label for="m_contact">Mother's Contact No.</label>
            <input type="tel" id="m_contact" name="m_contact" required>
        </div>

        <!-- Add the rest of the parents' details fields -->
    </fieldset>

    <fieldset>
        <legend>Contact Details</legend>
        <div class="form-group">
            <label for="address">Full Address</label>
            <textarea id="address" name="address" required></textarea>
        </div>
        <div class="form-group">
            <label for="province">Province</label>
            <input type="text" id="province" name="province" required>
        </div>
        <div class="form-group">
            <label for="district">District</label>
            <input type="text" id="district" name="district" required>
        </div>
        <!-- Add the rest of the contact details fields -->
    </fieldset>

    <fieldset>
        <legend>Attach Documents</legend>
        <div class="form-group">
            <label for="doc_type">Document Type</label>
            <select id="doc_type" name="doc_type">
                <option value="marksheet">Marksheet</option>
                <option value="certificate">Certificate</option>
            </select>
        </div>
        <div class="form-group">
            <label for="file_link">Attach Document</label>
            <input type="file" id="file_link" name="file_link" accept=".pdf,.doc,.docx" required>
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea id="description" name="description"></textarea>
        </div>
    </fieldset>

    <button type="submit">Submit</button>
</form>
<script>
    // Image preview for photo upload
    const photoInput = document.getElementById('photo');
    const photoPreview = document.getElementById('preview-photo');

    photoInput.addEventListener('change', function() {
        const file = this.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(event) {
                photoPreview.src = event.target.result;
            }
            reader.readAsDataURL(file);
        } else {
            photoPreview.src = '#';
        }
    });

    // Form submission
    // Form submission
    const enrollmentForm = document.getElementById('enrollment-form');

    enrollmentForm.addEventListener('submit', function(event) {
        event.preventDefault();
        // Perform form submission handling here
        // You can use AJAX or any other method to send form data to the server

        // Assuming the form submission was successful
        // You can replace this with your actual success condition
        const isSubmissionSuccessful = true;

        if (isSubmissionSuccessful) {
            // Display a success message
            alert('Your form has been submitted successfully');
        }
    });

    ;
</script>