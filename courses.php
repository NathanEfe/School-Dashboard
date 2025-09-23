<?php include ('includes/header.php') ?>
 <main class="p-6">
                <div class="gradient-bg text-white rounded-xl p-6 mb-6 shadow-lg" data-aos="fade-up">
                    <div class="flex items-center justify-between">
                        <div>
                            <h2 class="text-2xl font-bold mb-2">Welcome back, John!</h2>
                            <p class="opacity-90">You have 3 classes today and 2 pending assignments</p>
                        </div>
                        <div class="bg-warning bg-opacity-20 p-3 rounded-full">
                            <i data-feather="sun" class="w-8 h-8"></i>
                        </div>
                    </div>
                </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
        <div class="bg-white rounded-lg shadow p-6 transition-all duration-300 card-hover" data-aos="fade-up" data-aos-delay="100">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-indigo-50 text-primary">
                    <i data-feather="book" class="w-6 h-6"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Current Courses</p>
                    <h3 class="text-xl font-semibold text-dark">5</h3>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 transition-all duration-300 card-hover" data-aos="fade-up" data-aos-delay="200">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-50 text-secondary">
                    <i data-feather="check-circle" class="w-6 h-6"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Completed</p>
                    <h3 class="text-xl font-semibold text-dark">12</h3>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 transition-all duration-300 card-hover" data-aos="fade-up" data-aos-delay="300">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-50 text-yellow-500">
                    <i data-feather="alert-circle" class="w-6 h-6"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Pending</p>
                    <h3 class="text-xl font-semibold text-dark">2</h3>
                </div>
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-6 transition-all duration-300 card-hover" data-aos="fade-up" data-aos-delay="400">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-50 text-blue-500">
                    <i data-feather="clock" class="w-6 h-6"></i>
                </div>
                <div class="ml-4">
                    <p class="text-sm text-gray-500">Study Hours</p>
                    <h3 class="text-xl font-semibold text-dark">24.5</h3>
                </div>
            </div>
        </div>
    </div>
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up" data-aos-delay="500">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">Your Courses</h3>
            <a href="add_course.php" class="bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Add New Course</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Course Name</th>
                        <th class="px-4 py-2 text-left">Instructor</th>
                        <th class="px-4 py-2 text-left">Schedule</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">Mathematics 101</td>
                        <td class="px-4 py-2">Dr. Smith</td>
                        <td class="px-4 py-2">Mon, Wed 10:00-11:30</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                    <!-- Repeat for other courses -->
                </tbody>
            </table>
        </div>
    </section>
</main>
<?php include ('includes/footer.php') ?>

