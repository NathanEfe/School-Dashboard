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

     <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up" data-aos-delay="200">
        <div class="flex items-center justify-between mb-4">
            <h3 class="text-lg font-semibold">Library Books</h3>
            <a href="add_book.php" class="bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Add New Book</a>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full text-sm">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Title</th>
                        <th class="px-4 py-2 text-left">Author</th>
                        <th class="px-4 py-2 text-left">Category</th>
                        <th class="px-4 py-2 text-left">Availability</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2">Introduction to Algorithms</td>
                        <td class="px-4 py-2">Thomas H. Cormen</td>
                        <td class="px-4 py-2">Computer Science</td>
                        <td class="px-4 py-2">Available</td>
                        <td class="px-4 py-2">
                            <a href="#" class="text-blue-600 hover:underline">View</a>
                        </td>
                    </tr>
                    <!-- Add more rows for other books -->
                </tbody>
            </table>
        </div>
    </section>
</main>


<?php include ('includes/footer.php') ?>