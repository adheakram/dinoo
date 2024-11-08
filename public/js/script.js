document.addEventListener('DOMContentLoaded', () => {
    AOS.init();

    // Header background change on scroll
    const header = document.querySelector('header');
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 50) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });

    // Scroll to top functionality
    const scrollToTopBtn = document.querySelector('.scroll-to-top');
    window.addEventListener('scroll', () => {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.style.display = 'block';
        } else {
            scrollToTopBtn.style.display = 'none';
        }
    });

    scrollToTopBtn.addEventListener('click', (e) => {
        e.preventDefault();
        window.scrollTo({ top: 0, behavior: 'smooth' });
    });

    // Dynamic projects loading
    const projects = [
        {
            title: "JayJay Project",
            description: "Project pembelian peralatan gaming dan top up game",
            image: "images/Cover_page-0001.jpg",
            link: "/portofolio"
        },
        {
            title: "Coursework (RentCar)",
            description: "This is a description for Project 2.",
            image: "images/Cover_page-0002.jpg",
            link: "https://example.com/project2"
        },
        {
            title: "Coursework (RPL)",
            description: "This is a description for Project 3.",
            image: "images/Cover_page-0003.jpg",
            link: "https://example.com/project3"
        },
        {
            title: "My Journal",
            description: "Detection of Indonesian Hate Speech in the Comments Column of Indonesian Artists' Instagram Using the RoBERTa Method",
            image: "images/Cover_Roberta.png",
            link: "https://example.com/project4"
        }
    ];

    const projectList = document.getElementById('project-list');
    projects.forEach(project => {
        const projectItem = document.createElement('div');
        projectItem.classList.add('project-item');

        projectItem.innerHTML = `
            <img src="${project.image}" alt="${project.title}">
            <h4>${project.title}</h4>
            <p>${project.description}</p>
        `;

        // Adding click event to project item
        projectItem.addEventListener('click', () => {
            window.location.href = project.link;
        });

        // Adding hover effect
        projectItem.style.cursor = 'pointer';
        projectItem.addEventListener('mouseover', () => {
            projectItem.style.transform = 'scale(1.05)';
        });
        projectItem.addEventListener('mouseout', () => {
            projectItem.style.transform = 'scale(1)';
        });

        projectList.appendChild(projectItem);
    });

    // Contact form validation
    const contactForm = document.getElementById('contact-form');
    contactForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if (name === '' || email === '' || message === '') {
            alert('Please fill in all fields.');
        } else {
            alert('Message sent successfully!');
            contactForm.reset();
        }
    });
});
