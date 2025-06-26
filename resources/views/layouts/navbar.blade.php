<nav class="bg-white shadow-md fixed top-0 w-full z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16 items-center">
            <div class="text-2xl font-bold text-blue-600">Akshay's Portfolio.</div>
            <div class="space-x-6">
                <a href="#home" class="text-gray-700 hover:text-blue-600">Home</a>
                <a href="#about" class="text-gray-700 hover:text-blue-600">About</a>
                <a href="#education" class="text-gray-700 hover:text-blue-600">Education</a>
                <a href="#skills" class="text-gray-700 hover:text-blue-600">Skills</a>
                <a href="#experience" class="text-gray-700 hover:text-blue-600">Experience</a>
                <a href="#contact" class="text-gray-700 hover:text-blue-600">Contact</a>
            </div>
        </div>
    </div>
</nav>

<script>
    let lastScrollTop = 0;
    const navbar = document.querySelector('nav');
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        if (scrollTop > lastScrollTop) {
            // Scrolling down
            navbar.classList.add('navbar-hide');
        } else {
            // Scrolling up
            navbar.classList.remove('navbar-hide');
        }
        lastScrollTop = scrollTop <= 0 ? 0 : scrollTop;
    }, false);
</script>
<style>
    .navbar-hide {
        transform: translateY(-100%);
        transition: transform 0.1s ease;
    }
    nav {
        transition: transform 0.1s ease;
    }
</style>
