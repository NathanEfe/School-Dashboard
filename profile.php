<?php include('includes/header.php'); ?>
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
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up" data-aos-delay="300">
        <h3 class="text-lg font-semibold mb-4">User Profile</h3>
        <div class="flex items-center space-x-6">
            <img src="http://static.photos/people/200x200/1" alt="Profile Picture" class="w-24 h-24 rounded-full object-cover">
            <div>
                <p class="text-sm text-gray-500">Name</p>
                <h3 class="text-xl font-semibold text-dark">John Doe</h3>
                <p class="text-sm text-gray-500 mt-2">Email</p>
                <h3 class="text-md text-dark">john.doe@example.com</h3>
                <p>
                <a href="settings.php" class="text-primary hover:underline mt-4">Edit Profile</a>
                </p>
            </div>
        </div>
    </section>
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up" data-aos-delay="400">
        <h4 class="text-lg font-semibold mb-4">Academic Summary</h4>
        <ul class="list-disc pl-6 text-gray-700">
            <li>Current Courses: 5</li>
            <li>Completed Credits: 60</li>
            <li>GPA: 3.8</li>
        </ul>
    </section>
</main>


<?php include('includes/footer.php'); ?>