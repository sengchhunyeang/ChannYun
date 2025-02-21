<form action="{{ route('register.store') }}" method="POST" enctype="multipart/form-data" class="max-w-6xl mx-auto p-6 bg-white rounded-lg shadow-md">
    <div class="text-2xl mb-4">
        សិស្សចុះឈ្មោះ
    </div>
    @csrf
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Student Name -->
        <div class="mb-4">
            <label for="student_name" class="block text-sm font-medium text-gray-700">ឈ្មោះសិស្ស:</label>
            <input type="text" name="student_name" id="student_name" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Latin Name -->
        <div class="mb-4">
            <label for="latin_name" class="block text-sm font-medium text-gray-700">ឈ្មោះឡាតាំង:</label>
            <input type="text" name="latin_name" id="latin_name" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Phone Number -->
        <div class="mb-4">
            <label for="phone_number" class="block text-sm font-medium text-gray-700">លេខទូរស័ព្ទ:</label>
            <input type="text" name="phone_number" id="phone_number" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Gender -->
        <div class="mb-4">
            <label for="gender" class="block text-sm font-medium text-gray-700">ភេទ:</label>
            <select name="gender" id="gender" required class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                <option value="M">ប្រុស</option>
                <option value="F">ស្រី</option>
            </select>
        </div>

        <!-- English Level -->
        <div class="mb-4">
            <label for="english_level" class="block text-sm font-medium text-gray-700">កម្រិតភាសាអង់គ្លេស:</label>
            <input type="text" name="english_level" id="english_level" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Khmer Level -->
        <div class="mb-4">
            <label for="khmer_level" class="block text-sm font-medium text-gray-700">កម្រិតភាសាខ្មែរ:</label>
            <input type="text" name="khmer_level" id="khmer_level" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Register Date -->
        <div class="mb-4">
            <label for="register_date" class="block text-sm font-medium text-gray-700">កាលបរិច្ឆេទចុះឈ្មោះ:</label>
            <input type="date" name="register_date" id="register_date"
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Joining Date -->
        <div class="mb-4">
            <label for="joining_date" class="block text-sm font-medium text-gray-700">កាលបរិច្ឆេទចូលរៀន:</label>
            <input type="date" name="joining_date" id="joining_date" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Date of Birth -->
        <div class="mb-4">
            <label for="dob" class="block text-sm font-medium text-gray-700">ថ្ងៃខែឆ្នាំកំណើត:</label>
            <input type="date" name="dob" id="dob" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Current Address -->
        <div class="mb-4">
            <label for="current_address" class="block text-sm font-medium text-gray-700">អាសយដ្ឋានបច្ចុប្បន្ន:</label>
            <textarea name="current_address" id="current_address" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
        </div>

        <!-- Father's Name -->
        <div class="mb-4">
            <label for="father_name" class="block text-sm font-medium text-gray-700">ឈ្មោះប៉ា:</label>
            <input type="text" name="father_name" id="father_name" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Father's Job -->
        <div class="mb-4">
            <label for="father_job" class="block text-sm font-medium text-gray-700">ការងារប៉ា:</label>
            <input type="text" name="father_job" id="father_job" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Mother's Name -->
        <div class="mb-4">
            <label for="mother_name" class="block text-sm font-medium text-gray-700">ឈ្មោះម៉ែ:</label>
            <input type="text" name="mother_name" id="mother_name" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Mother's Job -->
        <div class="mb-4">
            <label for="mother_job" class="block text-sm font-medium text-gray-700">ការងារមែ:</label>
            <input type="text" name="mother_job" id="mother_job" required
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
        </div>

        <!-- Student Photo -->
        <div class="mb-4">
            <label for="student_photo" class="block text-sm font-medium text-gray-700">រូបថតសិស្ស:</label>
            <input type="file" name="student_photo" id="student_photo" accept="image/*" onchange="previewImage(event)"
                class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">

            <!-- Image preview container -->
            <div id="image_preview" class="mt-4">
                <img id="preview_image" src="" alt="Image preview" class="hidden max-w-[150px] h-auto rounded-lg">
            </div>
        </div>
    </div>

    <div class="flex justify-end mt-6 space-x-4">
        <!-- Register Button -->
        <button type="submit" class="bg-blue-600 text-white py-2 px-4 rounded-lg shadow-md">ចុះឈ្មោះ</button>

        <!-- Cancel Button -->
        <button type="reset" class="bg-yellow-400 text-gray-900 py-2 px-4 rounded-lg shadow-md">
            បោះបង់
        </button>
    </div>
</form>
<script>
    function previewImage(event) {
        const file = event.target.files[0];
        const preview = document.getElementById('preview_image');
        const previewContainer = document.getElementById('image_preview');

        if (file) {
            const reader = new FileReader();

            reader.onload = function() {
                preview.src = reader.result;
                preview.classList.remove('hidden'); // Show the image preview
            };

            reader.readAsDataURL(file);
        } else {
            preview.classList.add('hidden'); // Hide the image preview if no file is selected
        }
    }
</script>