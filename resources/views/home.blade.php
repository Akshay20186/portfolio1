@extends('layouts.app')
@section('content')

<!-- Home-->
<div id="home" class="relative bg-cover bg-center bg-no-repeat min-h-screen flex items-center justify-center px-6 scroll-mt-20"
    style="background-image: url('{{ asset('img.webp') }}');">

    <div class="relative z-10 max-w-4xl text-center text-white">
        <h1 class="text-4xl sm:text-5xl font-extrabold leading-tight mb-4">
            Hi, I'm <span class="text-blue-400">Akshay</span><br>
            Full Stack Developer
        </h1>
        <p class="text-lg text-gray-200 mb-6">
            I build modern, responsive web applications using Laravel, PHP, and front-end technologies like Tailwind CSS & JavaScript.
        </p>
        <div class="flex justify-center gap-4">
            <a href="{{ asset('Akshay_kumar_profile.pdf') }}" download
                class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow hover:bg-blue-700 transition">
                Download Resume
            </a>

            <a href="#contact"
                class="bg-white text-gray-800 px-6 py-3 rounded-lg shadow hover:bg-gray-300 transition">
                Contact Me
            </a>
        </div>
    </div>
</div>

<!-- About -->
<div id="about" class="bg-gray-50 py-16 px-6 min-h-screen scroll-mt-20">
    <div class="max-w-5xl mx-auto grid md:grid-cols-2 gap-10 items-center">
        <div>
            <h1 class="text-4xl font-bold text-gray-800 mb-4">About Me</h1>
            <p class="text-gray-600 leading-relaxed">
                I’m a passionate and self-motivated Web Developer with hands-on experience in building dynamic and responsive web applications using HTML, CSS, JavaScript, PHP, Laravel, and MySQL. I specialize in crafting clean UI with Bootstrap and developing robust backend functionalities using the Laravel framework.

                Currently, I’m working as a Web Development Intern at Digicrome Academy, where I’m involved in real-world projects such as HR Management Systems. My work includes authentication systems, dashboard design, CRUD operations, and performance optimization.

                I’m constantly exploring new technologies and best practices to grow as a full-stack developer.
            </p>
        </div>
        <div class="flex justify-center">
            <img src="{{ asset('image2.jpeg') }}" alt="About Me Image" class="rounded-lg shadow-md">
        </div>
    </div>
</div>

<!-- Education -->
<div id="education" class="bg-gray-50 py-16 px-6 min-h-screen scroll-mt-20">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">Education</h1>
        <p class="text-gray-600 mt-2">My academic background and qualifications</p>
    </div>
    <div class="max-w-5xl mx-auto grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <img src="{{ asset('image4.jpg') }}" alt="College Image" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-blue-600">Bachelor of Technology</h2>
                <p class="text-sm text-gray-500">Tula's Institute | 2019 - 2023</p>
                <p class="mt-3 text-gray-700">
                    Studied web development, data structures, and software engineering. Completed real-time projects using Laravel and MySQL.
                </p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <img src="{{ asset('image5.jpeg') }}" alt="Intermediate Image" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-blue-600">Intermediate (12th Grade)</h2>
                <p class="text-sm text-gray-500">Asha Modern Int. School | 2018 - 2019</p>
                <p class="mt-3 text-gray-700">Focus on PCM stream.</p>
            </div>
        </div>
        <div class="bg-white rounded-xl shadow-md overflow-hidden transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <img src="{{ asset('image5.jpeg') }}" alt="High School Image" class="w-full h-40 object-cover">
            <div class="p-6">
                <h2 class="text-xl font-semibold text-blue-600">High School (10th Grade)</h2>
                <p class="text-sm text-gray-500">Asha Modern Int. School | 2016 - 2017</p>
                <p class="mt-3 text-gray-700">Strong base in Science and Mathematics.</p>
            </div>
        </div>
    </div>
</div>

<!-- Skills -->
<div id="skills" class="bg-white py-16 px-6 min-h-screen scroll-mt-20">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">Skills</h1>
        <p class="text-gray-600 mt-2">Technologies and tools I work with</p>
    </div>
    <div class="max-w-6xl mx-auto grid gap-8 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5">
        @foreach ([
        ['Laravel', 'laravel.png'],
        ['PHP', 'php.png'],
        ['HTML5', 'html.jpeg'],
        ['CSS3', 'css.jpeg'],
        ['JavaScript', 'javascript.png'],
        ['MySQL', 'mysql.jpeg'],
        ['Git', 'git.jpeg'],
        ['Tailwind CSS', 'tailwind.jpeg'],
        ['Bootstrap', 'bootstrap.png'],
        ['Python', 'python.jpg'],
        ] as [$name, $icon])
        <div class="bg-gray-50 rounded-xl shadow-sm p-6 text-center transform transition duration-300 hover:scale-105 hover:shadow-lg">
            <img src="{{ asset('images/skills/' . $icon) }}" alt="{{ $name }} logo" class="w-16 h-16 mx-auto mb-4">
            <h2 class="text-lg font-semibold text-gray-700">{{ $name }}</h2>
        </div>
        @endforeach
    </div>
</div>

<!-- Experience -->
<div id="experience" class="bg-white py-16 px-6 min-h-screen scroll-mt-20">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800">Experience</h1>
        <p class="text-gray-600 mt-2">Professional background and current work</p>
    </div>

    <div class="max-w-4xl mx-auto bg-gray-50 p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-semibold text-blue-600">Web Development Intern</h2>
        <p class="text-sm text-gray-500 mb-2">Digicrome Academy | Current</p>

        <ul class="list-disc list-inside text-gray-700 leading-relaxed space-y-2 mt-4">
            <li>Contributing to real-world projects such as an HR Management System using Laravel and MySQL.</li>
            <li>Developed custom authentication systems and designed user dashboards with responsive UI using Bootstrap and Tailwind CSS.</li>
            <li>Implemented CRUD operations and optimized application performance across modules.</li>
            <li>Collaborated with a team to deliver secure, scalable web apps using best development practices.</li>
        </ul>
    </div>

    <div class="max-w-4xl mx-auto mt-12 text-gray-700 leading-relaxed">
        <p>
            I’m a passionate and self-motivated Web Developer with hands-on experience in building dynamic and responsive web applications using HTML, CSS, JavaScript, PHP, Laravel, and MySQL.
            I specialize in crafting clean UIs with Bootstrap and developing robust backend functionalities using the Laravel framework.
        </p>
        <p class="mt-4">
            I’m constantly exploring new technologies and best practices to grow as a full-stack developer. I take pride in writing clean, maintainable code and delivering solutions that provide real value to users.
        </p>
    </div>
</div>

<!-- Contact -->
<div id="contact" class="bg-white py-20 px-6 scroll-mt-20">
    <div class="max-w-4xl mx-auto text-center mb-12">
        <h2 class="text-4xl font-extrabold text-gray-900 mb-2">Contact Me</h2>
        <p class="text-lg text-gray-600">Let’s connect! Reach out for freelance work, internships, or just a quick hello.</p>
    </div>

    <form action="{{ route('contact.submit') }}" method="POST"
        class="max-w-2xl mx-auto bg-gray-50 p-10 rounded-2xl shadow-lg space-y-6">
        @csrf

        <div class="relative">
            <input type="text" id="name" name="name" required
                class="peer w-full border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="Your Name">
            <label for="name"
                class="absolute left-4 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
                Your Name
            </label>
        </div>

        <div class="relative">
            <input type="email" id="email" name="email" required
                class="peer w-full border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="Your Email">
            <label for="email"
                class="absolute left-4 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
                Your Email
            </label>
        </div>

        <div class="relative">
            <textarea id="message" name="message" rows="5" required
                class="peer w-full border border-gray-300 rounded-lg px-4 pt-5 pb-2 text-gray-900 placeholder-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                placeholder="Your Message"></textarea>
            <label for="message"
                class="absolute left-4 top-2 text-gray-500 text-sm transition-all peer-placeholder-shown:top-4 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-focus:top-2 peer-focus:text-sm peer-focus:text-blue-500">
                Your Message
            </label>
        </div>

        <div class="text-center pt-4">
            <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-8 py-3 rounded-md shadow-md transition duration-300">
                Send Message
            </button>
        </div>
    </form>
</div>

@endsection