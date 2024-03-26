<x-layout.app>
    @section('header')
        @include('partials.header')
    @endsection

    <div class="d-flex justify-content-start py-3 ms-5">
        <a href="/directory" class="btn btn-secondary">Back to Student Directory</a>
    </div>
    <div class="container p-5">
        <div class="row h-100 justify-content-center align-items-center">
            <div class="col-md-8 text-center">
                <h1 class="jumbotron">Update</h1>
                <p class="lead">Update and maintain accurate student profiles.</p>
            </div>
        </div>
    </div>


    <div class="container full-height">

        <div class="row justify-content-center align-items-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">

                        <form action="{{ route('students.update', $student->id) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="first_name"
                                    value="{{ $student->first_name }}" required>
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="last_name"
                                    value="{{ $student->last_name }}"required>
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="mobile_number" class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" id="mobileNumber" name="mobile_number"
                                    value="{{ $student->mobile_number }}" required>
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email"
                                    value="{{ $student->email }}" required>
                            </div>

                            <!-- Address -->
                            <div class="mb-3">
                                <label for="address" class="form-label">Address</label>
                                <input type="text" class="form-control" id="address" name="address"
                                    value="{{ $student->address }}" required>
                            </div>

                            <!-- Academic Program Dropdown -->
                            <div class="mb-3">
                                <label for="academicProgram" class="form-label">Academic Program</label>
                                <select class="form-control" id="academicProgram" name="acadprog_id" required>
                                    <option value="">Select Program</option>
                                    @foreach (['IT', 'CS', 'ECE', 'BSN', 'ARCHI', 'BSE', 'ABComm', 'BSA', 'EE'] as $program)
                                        <option value="{{ $program }}"
                                            {{ $student->acadprog_id == $program ? 'selected' : '' }}>
                                            {{ $program }}</option>
                                    @endforeach
                                    <!-- Add more options as needed -->
                                </select>
                            </div>

                            <!-- Year Level -->
                            <div class="mb-3">
                                <label for="yearLevel" class="form-label">Year Level</label>
                                <input type="number" class="form-control" id="yearLevel" name="year_level"
                                    min="1" value="{{ $student->year_level }}" required>
                            </div>



                            <!-- Submit Button -->
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-violet">Update Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-layout.app>
