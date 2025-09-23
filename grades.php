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
                <div class="bg-white rounded-lg shadow p-6 transition-all duration-300 card-hover" data-aos="fade-up" data-aos-delay="400">
                    <h3 class="text-lg font-semibold mb-4">Your Grades</h3>
                    <table class="min-w-full text-sm">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-left">Course</th>
                                <th class="px-4 py-2 text-left">Assignment/Exam</th>
                                <th class="px-4 py-2 text-left">Grade</th>
                                <th class="px-4 py-2 text-left">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="px-4 py-2">Mathematics 101</td>
                                <td class="px-4 py-2">Midterm Exam</td>
                                <td class="px-4 py-2">88</td>
                                <td class="px-4 py-2">2025-09-10</td>
                            </tr>
                            <!-- Add more rows for other grades -->
                        </tbody>
                    </table>
                </div>
</main>
<?php include ('includes/footer.php') ?>

