   </div>
    </div>

    <script>
        // sidebar toggle
document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
    feather.replace();

    const menuButton = document.getElementById('menu-toggle');
    const sidebar = document.querySelector('.sidebar');

    if (menuButton && sidebar) {
        menuButton.addEventListener('click', function () {
            sidebar.classList.toggle('sidebar-collapsed');
        });
    }
});

    </script>

    <script>
        //active link highlighting
document.addEventListener("DOMContentLoaded", function () {
    // Get current page URL path (e.g., "/courses.php")
    const currentPath = window.location.pathname.split("/").pop();

    // Get all sidebar links
    const navLinks = document.querySelectorAll(".sidebar nav a");

    navLinks.forEach(link => {
        const linkPath = link.getAttribute("href");

        if (linkPath === currentPath) {
            // Remove active styles from all links
            navLinks.forEach(l => {
                l.classList.remove("text-primary", "bg-indigo-50");
                l.classList.add("text-gray-600");
            });

            // Add active styles to current link
            link.classList.add("text-primary", "bg-indigo-50");
            link.classList.remove("text-gray-600");
        }
    });

    // Feather icons refresh (in case elements changed)
    feather.replace();
});
</script>



<script>
    document.addEventListener("DOMContentLoaded", function () {
        feather.replace(); // Init icons

        const openBtn = document.getElementById('open-search');
        const modal = document.getElementById('search-modal');
        const closeBtn = document.getElementById('close-search');

        // Show modal with animation
        openBtn.addEventListener('click', () => {
            modal.classList.remove('opacity-0', 'scale-95', '-translate-y-2', 'pointer-events-none');
            modal.classList.add('opacity-100', 'scale-100', 'translate-y-0');
        });

        // Hide modal with animation
        closeBtn.addEventListener('click', () => {
            modal.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
            modal.classList.add('opacity-0', 'scale-95', '-translate-y-2', 'pointer-events-none');
        });

        // Close modal if clicked outside
        document.addEventListener('click', function (e) {
            if (!modal.contains(e.target) && !openBtn.contains(e.target)) {
                modal.classList.remove('opacity-100', 'scale-100', 'translate-y-0');
                modal.classList.add('opacity-0', 'scale-95', '-translate-y-2', 'pointer-events-none');
            }
        });

        // Sidebar toggle
        document.getElementById('menu-toggle').addEventListener('click', function () {
            const sidebar = document.getElementById('sidebar');
            sidebar.classList.toggle('sidebar-collapsed');
        });

        // Init AOS animations (optional for other parts of the page)
        AOS.init();
    });
</script>


</body>
</html>
