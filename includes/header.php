<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/images/delsu.png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4F46E5',
                        secondary: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB'
                    }
                }
            }
        }
    </script>
    <style>
        .sidebar {
            transition: all 0.3s ease;
        }

        .sidebar-collapsed {
            width: 80px !important;
            /* force it to override Tailwind's w-64 */
        }

        .sidebar-collapsed .nav-text {
            display: none;
        }

        .sidebar-collapsed .logo-text {
            display: none;
        }

        .gradient-bg {
            background: linear-gradient(135deg, #4F46E5 0%, #10B981 100%);
        }

        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }

        .sidebar-collapsed .user-info {
            display: none;
        }

        .sidebar-collapsed .flex.items-center {
            justify-content: center;
        }
    </style>
</head>

<body class="bg-gray-50 font-sans">
    <div class="flex h-screen overflow-hidden">
        <!-- Sidebar -->
        <div class="sidebar bg-white shadow-lg flex flex-col transition-all duration-300 ease-in-out w-64" id="sidebar">
            <div class="flex items-center justify-center h-20 px-6 border-b">
                <div class="flex items-center">
                    <a href="index.php">
                        <i data-feather="book" class="text-primary w-8 h-8"></i>
                    </a>
                    <a href="index.php">
                        <span class="logo-text ml-3 text-xl font-semibold text-dark">UniDashboard</span>
                    </a>
                </div>
            </div>
            <div class="flex-grow overflow-y-auto">
                <nav class="px-4 py-6">
                    <div class="mb-8">
                        <p class="text-xs uppercase text-gray-500 font-semibold tracking-wider mb-4 px-2">Main</p>
                        <a href="index.php" class="flex items-center px-3 py-3 text-primary bg-indigo-50 rounded-lg mb-2">
                            <i data-feather="home" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Dashboard</span>
                        </a>
                        <a href="courses.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="book-open" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Courses</span>
                        </a>
                        <a href="schedule.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="calendar" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Schedule</span>
                        </a>
                        <a href="grades.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="bar-chart-2" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Grades</span>
                        </a>

                        <!-- <p class="text-xs uppercase text-gray-500 font-semibold tracking-wider mb-4 px-2">Resource</p> -->
                        <a href="library.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="file-text" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Library</span>
                        </a>
                        <a href="discussion.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="message-square" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Discussion</span>
                        </a>
                        <a href="profile.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="user" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Profile</span>
                        </a>
                        <!-- <a href="settings.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="settings" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Settings</span>
                        </a> -->
                    </div>
                </nav>
            </div>
            <div class="px-4 py-6 border-t">
                <div class="flex items-center">
                    <div class="user-info">
                        <a href="logout.php" class="flex items-center px-3 py-3 text-gray-600 hover:text-primary rounded-lg mb-2">
                            <i data-feather="log-out" class="w-5 h-5"></i>
                            <span class="nav-text ml-3">Logout</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>

        <!-- Main Content -->
        <div class="flex-1 overflow-auto">
            <!-- Header -->
            <header class="bg-white shadow-lg p-3 fixed-top w-full z-10">
                <div class="flex items-center justify-between px-6 py-4">
                    <div class="flex items-center">
                        <button class="text-gray-500 focus:outline-none" id="menu-toggle">
                            <i data-feather="menu" class="w-6 h-6"></i>
                        </button>
                        <h1 class="ml-4 text-xl font-semibold text-dark">UniDashboard</h1>
                    </div>
                    <div class="relative inline-block">
                        <button id="open-search" class="text-gray-500 focus:outline-none">
                            <i data-feather="search" class="w-6 h-6"></i>
                        </button>

                        <!-- Search Modal -->
                         <div id="search-modal" class="absolute top-12 right-4 bg-white rounded-lg p-6 w-[400px] shadow-lg z-50 border opacity-0 scale-95 -translate-y-2 pointer-events-none transition-all duration-300 transform">
                            <form action="search.php" method="get">
                                <input type="text" name="q" class="w-full px-3 py-2 border rounded mb-4" placeholder="Type something to search...">
                                <div class="flex justify-end">
                                    <button type="submit" class="bg-sky-500 text-white px-4 py-2 rounded hover:bg-indigo-700 transition">Search</button>
                                    <button type="button" id="close-search" class="ml-2 px-4 py-2 rounded border">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </header>