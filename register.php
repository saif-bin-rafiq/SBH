<?php include 'components/header.php'; ?>

<main>
    <section>
        <h2>Registration Page</h2>
        <form action="process_register.php" method="POST" id="registration-form">
            <fieldset>
                <legend>General Information</legend>
                <div class="form-row">
                    <div class="label-pair">
                        <label for="first_name">First Name</label>
                        <input type="text" name="first_name" id="first_name" required>
                    </div>
                    <div class="label-pair">
                        <label for="last_name">Last Name</label>
                        <input type="text" name="last_name" id="last_name" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="label-pair-2">
                        <label for="blood_group">Blood group</label>
                        <select name="blood_group" id="blood_group" required>
                            <option value="">Select</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="label-pair-2">
                        <label for="height">Height</label>
                        <input type="number" name="height" id="height" placeholder="Inch" required> 
                    </div>
                    <div class="label-pair-2">
                        <label for="weight">Weight</label>
                        <input type="number" name="weight" id="weight" placeholder="KG" required> 
                    </div>
                </div>
                <div class="form-row">
                    <div class="label-pair-gender-chronic">
                        <label>Gender</label>
                        <div>
                            <input type="radio" name="gender" id="male" value="Male" required>
                            <label for="male">Male&nbsp;&nbsp;&nbsp;</label>
                            <input type="radio" name="gender" id="female" value="Female" required>
                            <label for="female">Female</label>
                        </div>
                    </div>
                    <div class="label-pair-gender-chronic1">
                        <label>Chronic Diseases</label>
                        <div>
                            <input type="checkbox" name="chronic_diseases" id="blood_pressure" value="Blood Pressure">
                            <label for="blood_pressure">Blood Pressure&nbsp;&nbsp;&nbsp;</label>
                            <input type="checkbox" name="chronic_diseases" id="diabetes" value="Diabetes">
                            <label for="diabetes">Diabetes&nbsp;&nbsp;&nbsp;</label>
                            <input type="checkbox" name="chronic_diseases" id="asthma" value="Asthma">
                            <label for="asthma">Asthma&nbsp;&nbsp;&nbsp;</label>
                            <input type="checkbox" name="chronic_diseases" id="none" value="None">
                            <label for="none">None</label>
                        </div>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Present Address</legend>
                <div class="form-row">
                    <div class="label-pair">
                        <label for="division">Division</label>
                        <select name="division" id="division" required>
                            <option value="">Select</option>
                            <option value="Dhaka">Dhaka</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                    </div>
                    <div class="label-pair">
                        <label for="district">District</label>
                        <select name="district" id="district" required>
                            <option value="">Select</option>
                            <option value="Gazipur">Gazipur</option>
                            <option value="Mymensingh">Mymensingh</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="label-pair">
                        <label for="police_station">Police Station</label>
                        <select name="police_station" id="police_station" required>
                            <option value="">Select</option>
                            <option value="Joydebpur">Joydebpur</option>
                            <option value="Nakla">Nakla</option>
                        </select>
                    </div>
                    <div class="label-pair">
                        <label for="post_office">Post Office</label>
                        <select name="post_office" id="post_office" required>
                            <option value="">Select</option>
                            <option value="Nakla">Nakla</option>
                            <option value="Sherpur">Sherpur</option>
                        </select>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <legend>Contact and Login</legend>
                <div class="form-row">
                    <div class="label-pair">
                        <label for="phone_number">Phone Number</label>
                        <input type="tel" name="phone_number" id="phone_number" required>
                    </div>
                    <div class="label-pair">
                        <label for="email">Email Address</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                </div>
                <div class="form-row">
                    <div class="label-pair">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="label-pair">
                        <label for="confirm_password">Confirm Password</label>
                        <input type="password" name="confirm_password" id="confirm_password" required>
                    </div>
                </div>
            </fieldset>

            <div class="form-row">
                <input type="checkbox" name="terms" id="terms" required>
                <label for="terms">I hereby accept all terms and conditions</label>
            </div>

            <button type="submit" class="create-account-btn">Create Account</button>
        </form>
    </section>
</main>

<?php include 'components/footer.php'; ?>