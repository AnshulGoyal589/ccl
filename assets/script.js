

// For Closing the navbar in mobile view
function toggleNavbar() {
    const navbar = document.querySelector('.navbar-collapse');
    navbar.classList.toggle('show'); // Toggles the 'show' class to open/close the navbar
}



$(document).ready(function () {
    $(".sponser-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 6
            }
        }
    });
});



// owl-carousel

$(document).ready(function () {
    $(".spnsoer2-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 1000,
        responsive: {
            0: {
                items: 2
            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });
});







$(document).ready(function () {
    $(".review-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: false,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });
});


$(document).ready(function () {
    $(".banner-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });
});






// timer
// Function to animate the counter
function animateCounter(element, target, duration) {
    let start = 1;
    let stepTime = Math.abs(Math.floor(duration / target));
    let count = setInterval(function () {
        start++;
        element.textContent = start;
        if (start >= target) {
            clearInterval(count);
        }
    }, stepTime);
}

// Initiate the counters when the page is loaded
window.addEventListener('load', function () {
    let counters = document.querySelectorAll('.counter_up');
    counters.forEach(counter => {
        let target = +counter.getAttribute('data-number');
        let speed = 2000; // Duration in milliseconds (2 seconds)
        animateCounter(counter, target, speed);
    });
});