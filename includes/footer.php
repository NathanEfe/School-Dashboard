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

</body>
</html>
