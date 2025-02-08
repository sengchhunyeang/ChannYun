<form method="">
    <div class="flex-1 p-4 text-center bg-gray-50">
        <div class="bg-gradient-to-r from-[#E3C108] via-[#D62537] to-[#038AB9] text-white py-4 rounded-lg shadow-lg">
            <h1 class="text-2xl font-bold tracking-wider">ចុះឈ្មោះសិស្ស</h1>
        </div>
        <div class="p-4 grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Row 1 -->
            <div>
                <label for="student_name" class="block mb-2 text-sm font-medium text-start">
                    ឈ្មោះសិស្ស (Name Student) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="student_name" placeholder="John Doe" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="latin_name" class="block mb-2 text-sm font-medium text-start">
                    ឡាតាំង (Latin Name) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="latin_name" placeholder="John Doe" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="phone_number" class="block mb-2 text-sm font-medium text-start">
                    លេខទូរស័ព្ទ (Phone Number)<span class="text-red-600">*</span>
                </label>
                <div class="flex">
                    <span class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-l-lg p-2.5">+855</span>
                    <input type="tel" id="phone_number" placeholder="123 456 789" required
                           pattern="^\d{8}$" title="Phone number must be 8 digits long"
                           class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-r-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                </div>
            </div>


            <!-- Row 2 -->
            <div>
                <label for="gender" class="block mb-2 text-sm font-medium text-start">
                    ភេទ (Gender) <span class="text-red-600">*</span>
                </label>
                <select id="gender" required
                        class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
            </div>
            <div>
                <label for="english_level" class="block mb-2 text-sm font-medium text-start">
                    ភាសាអង់គ្លេស (English Level) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="english_level" placeholder="Intermediate, Advanced..." required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="khmer_level" class="block mb-2 text-sm font-medium text-start">
                    ភាសាខ្មែរ (Khmer Level) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="khmer_level" placeholder="Beginner, Fluent..." required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Row 3 -->
            <div>
                <label for="register_date" class="block mb-2 text-sm font-medium text-start">
                    ថ្ងៃចុះឈ្មោះ (Registration Date) <span class="text-red-600">*</span>
                </label>
                <input type="date" id="register_date" value="<?php echo date('Y-m-d'); ?>" readonly
                       class="bg-gray-200 border-2 border-gray-400 text-gray-900 text-sm rounded-lg block w-full p-2.5">
            </div>
            <div>
                <label for="joining_date" class="block mb-2 text-sm font-medium text-start">
                    ថ្ងៃចូលសាលា (Date Joining School)<span class="text-red-600">*</span>
                </label>
                <input type="date" id="joining_date" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="dob" class="block mb-2 text-sm font-medium text-start">
                    ថ្ងៃកំណើត (Date of Birth) <span class="text-red-600">*</span>
                </label>
                <input type="date" id="dob" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Row 4 -->
            <div>
                <label for="current_address" class="block mb-2 text-sm font-medium text-start">
                    អាសយដ្ឋានបច្ចុប្បន្ន (Current Address) <span class="text-red-600">*</span>
                </label>
                <div class="mb-4">
                    <select id="province" name="province" class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required>
                        <option value="">Select Province</option>
                        <option value="Phnom Penh">Phnom Penh</option>
                        <option value="Siem Reap">Siem Reap</option>
                        <option value="Battambang">Battambang</option>
                        <option value="Sihanoukville">Sihanoukville</option>
                        <option value="Kampong Cham">Kampong Cham</option>
                        <option value="Kampot">Kampot</option>
                        <option value="Banteay Meanchey">Banteay Meanchey</option>
                        <option value="Kandal">Kandal</option>
                        <option value="Koh Kong">Koh Kong</option>
                        <option value="Kratie">Kratie</option>
                        <option value="Mondulkiri">Mondulkiri</option>
                        <option value="Pailin">Pailin</option>
                        <option value="Preah Vihear">Preah Vihear</option>
                        <option value="Prey Veng">Prey Veng</option>
                        <option value="Pursat">Pursat</option>
                        <option value="Ratanakiri">Ratanakiri</option>
                        <option value="Siem Reap">Siem Reap</option>
                        <option value="Stung Treng">Stung Treng</option>
                        <option value="Svay Rieng">Svay Rieng</option>
                        <option value="Takeo">Takeo</option>
                        <option value="Tboung Khmum">Tboung Khmum</option>
                        <option value="Oddar Meanchey">Oddar Meanchey</option>
                        <option value="Kep">Kep</option>
                        <option value="Sihanoukville">Sihanoukville</option>
                        <option value="Kandal">Kandal</option>
                        <!-- Add more provinces as needed -->
                    </select>
                </div>

            </div>
            <div>
                <label for="father_name" class="block mb-2 text-sm font-medium text-start">
                    ឈ្មោះឪពុក (Name Father) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="father_name" placeholder="Father's name" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="father_job" class="block mb-2 text-sm font-medium text-start">
                    មុខរបររបស់ឪពុក (Job's Father)<span class="text-red-600">*</span>
                </label>
                <select id="father_job" required
                        class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">សូមជ្រើសរើសមុខរបរ</option>
                    <option value="farmer">កសិករ</option>
                    <option value="teacher">គ្រូបង្រៀន</option>
                    <option value="doctor">វេជ្ជបណ្ឌិត</option>
                    <option value="engineer">វិស្វករ</option>
                    <option value="business">ម្ចាស់អាជីវកម្ម</option>
                    <option value="other">មុខរបរផ្សេង</option>
                </select>
            </div>

            <!-- Row 5 -->
            <div>
                <label for="mother_name" class="block mb-2 text-sm font-medium text-start">
                    ឈ្មោះម្តាយ (Name Mother) <span class="text-red-600">*</span>
                </label>
                <input type="text" id="mother_name" placeholder="Mother's name" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>
            <div>
                <label for="mother_job" class="block mb-2 text-sm font-medium text-start">
                    មុខរបររបស់ម្តាយ (Job's Mother) <span class="text-red-600">*</span>
                </label>
                <select id="mother_job" required
                        class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                    <option value="">សូមជ្រើសរើសមុខរបរ</option>
                    <option value="farmer">កសិករ</option>
                    <option value="teacher">គ្រូបង្រៀន</option>
                    <option value="doctor">វេជ្ជបណ្ឌិត</option>
                    <option value="engineer">វិស្វករ</option>
                    <option value="business">ម្ចាស់អាជីវកម្ម</option>
                    <option value="other">មុខរបរផ្សេង</option>
                </select>
            </div>
            <div>
                <label for="student_photo" class="block mb-2 text-sm font-medium text-start">
                    រូបថតសិស្ស 4x6 (Photo Student) <span class="text-red-600">*</span>
                </label>
                <input type="file" id="student_photo" accept="image/*" required
                       class="bg-gray-50 border-2 border-cyan-600 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
            </div>

            <!-- Buttons -->
            <div class="flex justify-between mt-4">
                <button type="reset" onclick="clearForm()" class="bg-[#E3C108] hover:bg-[#E3C108]/90 text-gray-900 font-medium rounded-lg text-sm px-5 py-2.5">
                    Cancel
                </button>
                <button type="button" class="bg-[#038AB9] hover:bg-[#038AB9]/90 text-white font-medium rounded-lg text-sm px-5 py-2.5">
                    Register
                </button>
            </div>
        </div>
    </div>

</form>
