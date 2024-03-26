<x-layout.app>

    <div class="d-flex justify-content-start py-3 ms-5">
        <a href="/directory" class="btn btn-secondary">View Student Directory</a>
    </div>
    <div class="container p-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <h1 class="jumbotron">Student+</h1>
                <p class="lead">Welcome and integrate new students.</p>
            </div>
        </div>
    </div>


    <div class="container full-height">
        <!-- Display Success Message -->

        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <form action="/create" method="POST">
                            @csrf <!-- CSRF Token -->

                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name" required
                                    placeholder="Enter your first name...">
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name" required
                                    placeholder="Enter your last name...">
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="mobileNumber" name="mobile_number"
                                    value="09" placeholder="09" oninput="formatMobileNumber(this)" required
                                    placeholder="Provide your contact number...">


                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="email" name="email" required
                                        placeholder="Add your email address...">
                                </div>

                                <!-- Address -->
                                <div class="mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" required
                                        placeholder="Include your address details...">
                                </div>

                                <!-- Academic Program Dropdown -->
                                <div class="mb-3">
                                    <label for="academicProgram" class="form-label">Academic Program</label>
                                    <select class="form-control" id="academicProgram" name="acadprog_id" required>
                                        <option value="">Select Program</option>
                                        <option value="BSIT">IT</option>
                                        <option value="CS">CS</option>
                                        <option value="ECE">ECE</option>
                                        <option value="BSN">BSN</option>
                                        <option value="ARCHI">ARCHI</option>
                                        <option value="BSE">BSE</option>
                                        <option value="ABComm">ABComm</option>
                                        <option value="BSA">BSA</option>
                                        <option value="EE">EE</option>
                                        <!-- Add more options as needed -->
                                    </select>
                                </div>

                                <!-- Year Level -->
                                <div class="mb-3">
                                    <label for="yearLevel" class="form-label">Year Level</label>
                                    <input type="number" class="form-control" id="yearLevel" name="year_level"
                                        min="1" required placeholder="Your current year level...">
                                </div>


                                <!-- Submit Button -->
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-violet">Add Student</button>
                                </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.app>
