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
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up">
        <h3 class="text-lg font-semibold mb-4">Account Settings</h3>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Name</label>
                <input type="text" class="w-full px-3 py-2 border rounded" value="John Doe">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Email</label>
                <input type="email" class="w-full px-3 py-2 border rounded" value="john.doe@example.com">
            </div>
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Save Changes</button>
        </form>
    </section>
    <section class="bg-white rounded-lg shadow p-6 mb-6" data-aos="fade-up">
        <h3 class="text-lg font-semibold mb-4">Change Password</h3>
        <form>
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">Current Password</label>
                <input type="password" class="w-full px-3 py-2 border rounded">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 mb-1">New Password</label>
                <input type="password" class="w-full px-3 py-2 border rounded">
            </div>
            <button type="submit" class="bg-primary text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Update Password</button>
        </form>
    </section>
</main>
<?php include('includes/footer.php'); ?>