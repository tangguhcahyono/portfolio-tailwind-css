<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="src/output.css" />
  <script src="https://kit.fontawesome.com/6eb065f490.js" crossorigin="anonymous"></script>
</head>

<body>
  <!-- header start -->
  <header class="bg-transparent absolute top-0 left-0 w-full flex items-center z-10">
    <div class="container">
      <div class="flex items-center justify-between relative">
        <div class="logo px-4">
          <a href="#home" class="font-bold text-lg text-primary block py-6">TangguhHari</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="block absolute right-4 lg:hidden">
            <span class="hamburger-line transition duration-300 ease-in-out origin-top-left"></span>
            <span class="hamburger-line transition duration-300 ease-in-out"></span>
            <span class="hamburger-line transition duration-300 ease-in-out origin-bottom-left"></span>
          </button>
          <nav id="nav-menu" class="hidden absolute py-5 bg-white shadow-lg rounded-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none">
            <ul class="block lg:flex">
              <li class="group">
                <a href="#home" class="text-base text-dark py-2 mx-10 flex group-hover:text-primary">Home</a>
              </li>
              <li class="group">
                <a href="#about" class="text-base text-dark py-2 mx-10 flex group-hover:text-primary">About Me</a>
              </li>
              <li class="group">
                <a href="#portfolio" class="text-base text-dark py-2 mx-10 flex group-hover:text-primary">Portfolio</a>
              </li>
              <li class="group">
                <a href="#experience" class="text-base text-dark py-2 mx-10 flex group-hover:text-primary">Experience</a>
              </li>
              <li class="group">
                <a href="#contact" class="text-base text-dark py-2 mx-10 flex group-hover:text-primary">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </header>
  <!-- header end -->

  <!-- hero section start -->
  <section id="home" class="pt-32 pb-32 min-h-screen">
    <div class="container ">
      <div class="flex flex-wrap">
        <div class="w-full self-center px-4 lg:w-1/2">
          <h1 class="text-base font-semibold text-primary md:text-xl ">Hello everyone 👋, I am <span class="block font-bold text-dark text-4x mt-1 lg:text-5xl md:mb-3">Tangguh Hari Cahyono</span></h1>
          <h2 class="font-medium text-secondary text-lg mb-5 lg:text-2xl">Website Developer</h2>
          <p class="font-medium text-secondary mb-10 leading-relaxed">I am a graduate of the Informatics Engineering program at the University of Darussalam Gontor with a strong passion for website development. I am dedicated to creating innovative and user-friendly web solutions</p>

          <a href="#contact" class="text-base font-semibold text-white bg-primary py-3 px-8 rounded-full hover:shadow-lg hover:opacity-80 transition duration-300 ease-in-out  ">Contact Me</a>
        </div>
        <div class="w-full self-end  px-4 lg:w-1/2">
          <div class="relative mt-10 lg:mt-0 lg:mr-0">
            <img class="max-w-full mx-auto " src="img/Profile.png" alt="Tangguh">
            <span class="absolute -bottom-20 -z-10 left-1/2 -translate-x-1/2"><svg width="600" height="600" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg">
                <path fill="#059669" d="M47.3,-41.9C57.4,-25,59.1,-5.6,53.4,9.5C47.8,24.5,34.9,35.2,20.7,41.5C6.4,47.8,-9.3,49.8,-24.1,44.7C-38.9,39.6,-52.9,27.4,-56,13C-59.1,-1.4,-51.2,-18,-40.1,-35.1C-28.9,-52.1,-14.5,-69.7,2.1,-71.3C18.6,-73,37.2,-58.7,47.3,-41.9Z" transform="translate(100 100)" />
              </svg></span>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- hero section end -->

  <!-- about section start -->
  <section id="about" class="pt-32 pb-32 min-h-screen">
    <div class="container">
      <div class="w-full px-4 mb-10">
        <h4 class="font-bold uppercase text-primary text-lg mb-3">About Me</h4>
        <h2 class="font-bold text-dark text-3xl mb-5 lg:text-4xl">Website Developer</h2>
        <p class="font-medium text-base text-secondary lg:text-lg">I am a graduate of the Informatics Engineering program at the University of Darussalam Gontor with a strong passion for website development. I specialize in front-end development, utilizing technologies such as PHP, SQL, HTML, and Tailwind CSS to build responsive and user-friendly websites.With a solid foundation in programming and a creative approach to design, I am dedicated to delivering innovative web solutions that meet client needs and align with the latest industry trends. My experience includes developing decision support systems, dynamic websites, and custom web applications that prioritize functionality and user experience.</p>
      </div>
    </div>
  </section>
  <!-- about section end -->

  <!-- portfolio start -->
  <section id="portfolio" class="pt-32 pb-16 bg-slate-100 min-h-screen">
    <div class="container">
      <div class="w-full px-4">
        <div class="max-w-xl mx-auto text-center mb-5">
          <h4 class="font-semibold text-lg text-primary mb-2">Portfolio</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Recent Project</h2>
          <p class="font-medium text-md text-secondary">Here are some projects I have worked on.</p>
        </div>
      </div>
      <div class="w-full px-4 flex flex-wrap justify-center xl:-10/12 xl:mx-auto">
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="portfolio/2.PNG" alt="Landing Page" width="w-full" class="min-h-[320px]">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">Simple Landing Page
          </h3>
          <p class="font-medium text-base text-secondary">I have developed a variety of simple and responsive websites designed to meet client needs and provide a smooth user experience. These projects focus on clean design, easy navigation, and optimized performance across devices. This experience has strengthened my skills in front-end development using technologies like HTML, CSS (Tailwind CSS), PHP, and SQL, allowing me to create impactful yet straightforward digital solutions.</p>
        </div>
        <div class="mb-12 p-4 md:w-1/2">
          <div class="rounded-md shadow-md overflow-hidden">
            <img src="portfolio/1.PNG" alt="Aplikasi SPK" width="w-full" class="min-h-[320px]">
          </div>
          <h3 class="font-semibold text-xl text-dark mt-5 mb-3">
            DSS Web System with SAW Method
          </h3>
          <p class="font-medium text-base text-secondary">I have developed a Web-Based Application System for selecting the best products using the Simple Additive Weighting (SAW) method. This application was built using PHP for the backend, HTML for the page structure, and JavaScript for interactivity, resulting in a responsive and user-friendly system. The system assists in decision-making by calculating and ranking products based on predefined criteria and weights, making it easier for users to choose the best products objectively and efficiently.</p>
        </div>
      </div>
    </div>
  </section>
  <!-- portfolio end -->

  <!-- experience start -->
  <section id="experience" class="pt-32 pb-16 bg-slate-700 min-h-screen">
    <div class="container">
      <div class="w-full px-4">
        <div class="mx-auto text-center mb-10">
          <h4 class="font-semibold text-lg text-primary mb-2">Experience</h4>
          <h2 class="font-bold text-white text-3xl mb-4 sm:text-4xl lg:text-5xl">My work experience</h2>
          <p class="font-medium text-md text-secondary md:text-lg">This is an overview of my professional experience.</p>
        </div>
        <div class="w-full flex flex-wrap px-4 ">
          <div class="job1 mb-12 p-4 md:w-1/2">
            <h5 class="text-center mb-5 text-primary font-semibold">Front-end web developer</h5>
            <p class="text-justify text-secondary text-base">I worked as a Front-End Web Developer at Seven Inc Yogyakarta, where my primary responsibility was designing and developing the user interface for an internship employee attendance website. I utilized Next.js for building the website and Tailwind CSS for styling and ensuring a responsive, user-friendly experience</p>
          </div>
          <div class="job2 mb-12 p-4 md:w-1/2">
            <h5 class="text-center mb-5 text-primary font-semibold">Data Administrator</h5>
            <p class="text-justify text-secondary text-base">I worked as a Data Administrator at the University of Darussalam Gontor, where I was responsible for recording student achievements and documenting every non-academic activity conducted by students. Additionally, I was tasked with creating semester reports and maintaining accurate records of student participation in various activities.</p>
          </div>
        </div>
        <div class="job3 mb-12 p-4 md:w-1/2">
          <h5 class="text-center mb-5 text-primary font-semibold">Assistant Lecturer</h5>
          <p class="text-justify text-secondary text-base">I worked as a Teaching Assistant, where I assisted in conducting practical sessions for students, providing support during experiments, guiding students through tasks, and helping ensure smooth execution of practical lessons</p>
        </div>
      </div>
    </div>
  </section>
  <!-- experience end -->

  <!-- Contact Section Start -->
  <section id="contact" class="pt-28 pb-32 min-h-screen">
    <div class="container">
      <div class="w-full px-">
        <div class="max-w-xl mx-auto text-center mb-16">
          <h4 class="font-semibold text-lg text-primary mb-2">Contact</h4>
          <h2 class="font-bold text-dark text-3xl mb-4 sm:text-4xl lg:text-5xl">Contact Me On</h2>
          <p class="font-medium text-base text-secondary max-w-xl mb-6 lg:text-lg">If you are interested in collaborating or learning more about my work, feel free to reach out to me. I am always open to discussing new projects, sharing ideas, and providing innovative web solutions. Let’s work together to bring your vision to life!</p>
          <div class="flex items-center gap-2 justify-center">
            <!-- linkedin -->
            <a href="https://www.linkedin.com/in/tangguh-hari-cahyono-a9a6961b9/" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
              <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="https://www.instagram.com/tangguh.cahyono/" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
              <i class="fa-brands fa-instagram"></i>
            </a>
            <a href="https://api.whatsapp.com/send/?phone=6282327639490&text&type=phone_number&app_absent=0" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
              <i class="fa-brands fa-whatsapp"></i>
            </a>
            <a href="https://github.com/tangguhcahyono" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
              <i class="fa-brands fa-square-github"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section End -->

  <!-- Footer Start -->
  <footer class="bg-dark pt-24 pb-12">
    <div class="container">
      <div class="flex flex-wrap">
        <div class="w-full px-4 mb-12 text-slate-300 md:w-1/3">
          <h2 class="font-bold text-3xl text-white mb-5">Tangguh Hari Cahyono</h2>
          <h3 class="font-semibold text-xl text-white mb-5">Contact</h3>
          <p>tangguh.hari123@gmail.com</p>
          <p>Kurahan,karangrejo,kerjo</p>
          <p>Karanganyar</p>
        </div>
        <div class=" w-full px-4 mb-12 text-slate-300 md:w-1/3">
          <h2 class="font-bold text-xl text-white mb-5">My Skills</h2>
          <p>HTML , CSS, Javascript</p>
          <p>PHP & MYSQL</p>
          <p>Microsoft Office</p>
          <p>Figma</p>
        </div>
        <div class="w-full px-4 mb-12 md:w-1/3">
          <h3 class="font-semibold text-xl text-white mb-5">Navigation</h3>
          <ul class="text-slate-300">
            <li><a href="#home" class="inline-block text-base hover:text-primary mb-3">Home</a></li>
            <li><a href="#about" class="inline-block text-base hover:text-primary mb-3">About Me</a></li>
            <li><a href="#portfolio" class="inline-block text-base hover:text-primary mb-3">Portfolio</a></li>
            <li><a href="#experience" class="inline-block text-base hover:text-primary mb-3">Experience</a></li>
            <li><a href="#contact" class="inline-block text-base hover:text-primary mb-3">Contact</a></li>
          </ul>
        </div>
      </div>
      <div class="w-full pt-10 border-t border-slate-700">
        <div class="flex items-center gap-2 justify-center mb-5">
          <!-- linkedin -->
          <a href="https://www.linkedin.com/in/tangguh-hari-cahyono-a9a6961b9/" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
            <i class="fa-brands fa-linkedin"></i>
          </a>
          <a href="https://www.instagram.com/tangguh.cahyono/" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
            <i class="fa-brands fa-instagram"></i>
          </a>
          <a href="https://api.whatsapp.com/send/?phone=6282327639490&text&type=phone_number&app_absent=0" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
            <i class="fa-brands fa-whatsapp"></i>
          </a>
          <a href="https://github.com/tangguhcahyono" target="_blank" class="w-9 h-9 rounded-full flex justify-center items-center border border-slate-300 text-slate-400 hover:bg-primary hover:border-primary hover:text-white">
            <i class="fa-brands fa-square-github"></i>
          </a>
        </div>
        <p class="font-meduim text-xs text-slate-500 text-center">Created with <span class="text-pink-600">❤</span> by <a href="" target="_blank" class="font-bold text-primary">Tangguh Hari Cahyono</a>, with <a href="https://tailwindcss.com/" target="_blank" class="font-bold text-sky-500">Tailwinds CSS</a></p>
      </div>
    </div>
  </footer>
  <!-- Footer End -->
  <script src="js/javascript.js"></script>
</body>

</html>