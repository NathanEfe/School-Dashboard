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

    
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up" data-aos-delay="200">
        <h3 class="text-lg font-semibold mb-4">Start a New Discussion</h3>
        <form class="mb-6">
            <input type="text" class="w-full mb-2 px-3 py-2 border rounded focus:ring-blue-500 focus:border-blue-500" placeholder="Discussion Title">
            <textarea class="w-full mb-2 px-3 py-2 border rounded" rows="3" placeholder="Your message..."></textarea>
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Post</button>
        </form>

        <h3 class="text-lg font-semibold mb-4">Recent Discussions</h3>
        <div class="space-y-4">
            <div class="p-4 border rounded hover:bg-gray-50 transition">
                <a href="#" class="font-semibold text-primary hover:underline">How to prepare for the midterm?</a>
                <div class="text-xs text-gray-500 mt-1">Posted by Jane Doe · 2 hours ago · 5 replies</div>
            </div>
            <!-- Repeat for other threads -->
        </div>
    </section>
</main>


<?php include('includes/footer.php'); ?>