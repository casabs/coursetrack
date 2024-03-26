<x-layout.app>
    @include('partials.side') <!-- Include the sidebar here -->

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12">

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-hover table-striped" style="height:100vh;">
                        <colgroup>
                            <col class="col-width-10">
                            <col class="col-width-10">
                            <col class="col-width-10">
                            <col class="col-width-10">
                            <col class="col-width-15">
                            <col class="col-width-15">
                            <col class="col-width-5">
                            <col class="col-width-5">
                            <col class="col-width-5">
                        </colgroup>
                        <thead class="table-header text-center rounded">
                            <tr>
                                <th scope="col" class="py-3 text-center">STUDENT NUMBER ({{ $totalStudents }})</th>
                                <th scope="col" class="py-3 text-center">FIRST NAME</th>
                                <th scope="col" class="py-3 text-center">LAST NAME</th>
                                <th scope="col" class="py-3 text-center">MOBILE NUMBER</th>
                                <th scope="col" class="py-3 text-center">EMAIL</th>
                                <th scope="col" class="py-3 text-center">ADDRESS</th>
                                <th scope="col" class="py-3 text-center">ACADEMIC PROGRAM</th>
                                <th scope="col" class="py-3 text-center">YEAR LEVEL</th>
                                <th scope="col" class="py-3 text-center">ACTIONS</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <td class="py-3 text-center">{{ $student->student_number }}</td>
                                    <td class="py-3 text-center">{{ $student->first_name }}</td>
                                    <td class="py-3 text-center">{{ $student->last_name }}</td>
                                    <td class="py-3 text-center">{{ $student->mobile_number }}</td>
                                    <td class="py-3 text-center">{{ $student->email }}</td>
                                    <td class="py-3 justify-text">{{ $student->address }}</td>
                                    <td class="py-3 text-center">{{ $student->acadprog_id }}</td>
                                    <td class="py-3 text-center">{{ $student->year_level }}</td>

                                    <!-- Pencil Button -->
                                    <td class="py-3 text-center">
                                        <a href="{{ route('students.edit', $student->id) }}"
                                            class="icon-box btn btn-warning border-0 rounded text-white">
                                            <i class="bi bi-pencil"></i>
                                        </a>

                                        <form action="{{ route('students.destroy', $student->id) }}" method="POST"
                                            style="display: inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-layout.app>
