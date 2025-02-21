<div class="p-6 bg-white shadow-lg rounded-lg m-10">
    <h2 class="text-2xl font-semibold mb-6 text-gray-800">បញ្ជីសិស្ស</h2>
    <div class="overflow-x-auto">
        <table class="min-w-full bg-white rounded-lg overflow-hidden">
            <thead class="bg-gray-50">
                <tr>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ល.រ</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ឈ្មោះ</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">លេខទូរស័ព្ទ</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ភេទ</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ថ្ងៃខែឆ្នាំកំណើត</th>
                    <th class="py-3 px-6 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">សកម្មភាព</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @forelse ($students as $student)
                <tr id="student-row-{{ $student->id }}" class="hover:bg-gray-50 transition duration-150 ease-in-out">
                    <td class="py-4 px-6 text-sm text-gray-900">{{ $student->id }}</td>
                    <td class="py-4 px-6 text-sm text-gray-900">{{ $student->student_name  }}</td>
                    <td class="py-4 px-6 text-sm text-gray-900">{{ $student->phone_number }}</td>
                    <td class="py-4 px-6 text-sm text-gray-900">
                        <span class="px-2 py-1 text-xs font-semibold rounded-full 
                            {{ $student->gender === 'M' ? 'bg-blue-100 text-blue-800' : 'bg-pink-100 text-pink-800' }}">
                            {{ $student->gender === 'M' ? 'ប្រុស' : 'ស្រី' }}
                        </span>
                    </td>
                    <td class="py-4 px-6 text-sm text-gray-900">{{ $student->dob }}</td>
                    <td class="py-4 px-6 text-sm text-gray-900">
                        <div class="flex items-center space-x-4">
                            <!-- Edit Button -->
                            <button class="text-blue-500 hover:text-blue-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z" />
                                </svg>
                            </button>

                            <!-- Delete Button -->
                            <button type="button" onclick="deleteStudent({{ $student->id }})" class="text-red-500 hover:text-red-700">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="py-6 px-6 text-center text-sm text-red-500">
                        មិនមានទិន្នន័យសិស្ស។
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

<!-- Include SweetAlert2 for a beautiful confirmation dialog -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    function deleteStudent(studentId) {
        // Show a confirmation dialog
        Swal.fire({
            title: 'តើអ្នកប្រាកដហើយឬ?',
            text: "អ្នកនឹងមិនអាចយកវាត្រឡប់មកវិញបានទេ!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'បាទ/ចាស, លុបវាចោល!',
            cancelButtonText: 'បោះបង់'
        }).then((result) => {
            if (result.isConfirmed) {
                // Send an AJAX request to delete the student
                fetch(`/students/${studentId}`, {
                    method: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}', // Include CSRF token
                        'Content-Type': 'application/json'
                    }
                })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(data => {
                    if (data.success) {
                        // Remove the student row from the table
                        document.getElementById(`student-row-${studentId}`).remove();
                        // Show a success message
                        Swal.fire('បានលុប!', 'សិស្សនេះត្រូវបានលុបចោល។', 'success');
                    } else {
                        // Show an error message
                        Swal.fire('កំហុស!', data.message || 'មានបញ្ហាកើតឡើង។', 'error');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    Swal.fire('កំហុស!', 'មានបញ្ហាកើតឡើង។', 'error');
                });
            }
        });
    }
</script>