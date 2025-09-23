<?php
include('includes/header.php');
?>

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

    <!-- Courses and Schedule -->
    <div>
        <!-- Current Courses -->
        <div class="lg:col-span-2 bg-white rounded-lg shadow overflow-hidden card-hover" data-aos="fade-up">
            <div class="border-b border-gray-200 px-6 py-4">
                <h3 class="text-lg font-semibold text-dark">Current Courses</h3>
            </div>
            <div class="divide-y divide-gray-200">
                <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-12 w-12 rounded-md bg-indigo-50 flex items-center justify-center">
                            <span class="text-primary font-bold">CS</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-medium text-dark">Computer Science 101</h4>
                            <p class="text-sm text-gray-500 mt-1">Prof. Smith • Mon/Wed 10:00-11:30</p>
                            <div class="flex items-center mt-2">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-primary h-2 rounded-full" style="width: 75%"></div>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">75%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-12 w-12 rounded-md bg-green-50 flex items-center justify-center">
                            <span class="text-secondary font-bold">MA</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-medium text-dark">Mathematics Advanced</h4>
                            <p class="text-sm text-gray-500 mt-1">Prof. Johnson • Tue/Thu 13:00-14:30</p>
                            <div class="flex items-center mt-2">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-secondary h-2 rounded-full" style="width: 60%"></div>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">60%</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="p-6 hover:bg-gray-50 transition-colors duration-200">
                    <div class="flex items-start">
                        <div class="flex-shrink-0 h-12 w-12 rounded-md bg-purple-50 flex items-center justify-center">
                            <span class="text-purple-500 font-bold">PH</span>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-base font-medium text-dark">Physics Fundamentals</h4>
                            <p class="text-sm text-gray-500 mt-1">Prof. Williams • Fri 9:00-12:00</p>
                            <div class="flex items-center mt-2">
                                <div class="w-full bg-gray-200 rounded-full h-2">
                                    <div class="bg-purple-500 h-2 rounded-full" style="width: 45%"></div>
                                </div>
                                <span class="text-xs text-gray-500 ml-2">45%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</main>
<?php include('includes/footer.php') ?>