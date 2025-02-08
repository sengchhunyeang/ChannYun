<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">

<div class="w-full overflow-x-auto px-8 py-6">
    <h1 class="text-2xl font-bold tracking-wider">បញ្ជីឈ្មោះសិស្ស</h1>

    <table class="mt-4 min-w-full table-auto bg-white shadow-xl rounded-lg border border-gray-300">
        <thead class="bg-yellow-500 text-white">
        <tr>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">ឈ្មោះសិស្ស</th>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">លេខទូរស័ព្ទ</th>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">ភេទ</th>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">អាសយដ្ឋានបច្ចុប្បន្ន</th>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">ថ្ងៃកំណើត</th>
            <th class="px-8 py-4 text-left text-lg font-semibold uppercase tracking-wider">Action</th>
        </tr>
        </thead>
        <tbody>
        <tr class="hover:bg-blue-50 transition-colors duration-300">
            <td class="px-8 py-5 text-base font-medium text-gray-700">ចាន់ វិនាមា</td>
            <td class="px-8 py-5 text-base text-gray-500">+855 12 345 678</td>
            <td class="px-8 py-5 text-base text-gray-500">ប្រុស</td>
            <td class="px-8 py-5 text-base text-gray-500">ភ្នំពេញ</td>
            <td class="px-8 py-5 text-base text-gray-500">មិថុនា 15, 1995</td>
            <td class="px-8 py-5 space-x-4">
                <button onclick="openModal('Chann Vina', '+855 12 345 678', 'ប្រុស', 'ភ្នំពេញ', 'មិថុនា 15, 1995')" class="text-blue-700 hover:text-white border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">មើលលម្អិត</button>
            </td>
        </tr>
        <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<!-- Modal -->
<!-- Modal -->
<div id="modal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
    <div class="bg-white p-6 rounded-lg max-w-sm w-full">
        <h2 class="text-2xl font-semibold mb-6 text-center">Detail Information</h2>

        <!-- Section for Name -->
        <div class="mb-4">
            <p class="font-medium text-lg"><strong>ឈ្មោះសិស្ស:</strong></p>
            <p id="student-name" class="text-gray-600"></p>
        </div>

        <!-- Section for Phone -->
        <div class="mb-4">
            <p class="font-medium text-lg"><strong>លេខទូរស័ព្ទ:</strong></p>
            <p id="student-phone" class="text-gray-600"></p>
        </div>

        <!-- Section for Gender -->
        <div class="mb-4">
            <p class="font-medium text-lg"><strong>ភេទ:</strong></p>
            <p id="student-gender" class="text-gray-600"></p>
        </div>

        <!-- Section for Address -->
        <div class="mb-4">
            <p class="font-medium text-lg"><strong>អាសយដ្ឋានបច្ចុប្បន្ន:</strong></p>
            <p id="student-address" class="text-gray-600"></p>
        </div>

        <!-- Section for Birth Date -->
        <div class="mb-4">
            <p class="font-medium text-lg"><strong>ថ្ងៃកំណើត:</strong></p>
            <p id="student-dob" class="text-gray-600"></p>
        </div>

        <!-- Close Button -->
        <div class="flex justify-end">
            <button onclick="closeModal()" class="text-red-500 font-medium">Close</button>
        </div>
    </div>
</div>

<script>
    function openModal(name, phone, gender, address, dob) {
        document.getElementById('student-name').innerText = name;
        document.getElementById('student-phone').innerText = phone;
        document.getElementById('student-gender').innerText = gender;
        document.getElementById('student-address').innerText = address;
        document.getElementById('student-dob').innerText = dob;

        // Show the modal
        document.getElementById('modal').classList.remove('hidden');
    }

    function closeModal() {
        document.getElementById('modal').classList.add('hidden');
    }
</script>


</body>
</html>
