let current = location.pathname;
$('a[href$="' + location.pathname + '"]').addClass('active');

// if (current == '/home' || current == '/services' || current == '/about-us' ||
//     current == '/news' || current == '/news-details' || current == '/contact-us') {
//     $('#nav_bar li .nav-link').addClass('active');
// }

if (current == '/home' || current == '/') {
    $('#navbar li .home-link').addClass('active_link');
}

if (current == '/news') {
    $('#navbar li .news-link').addClass('active_link');
}

// if (current == '/news-details/') {
//     $('#navbar li .news-link').addClass('active_link');
// }

if (current == '/about-us') {
    $('#navbar li .about-us-link').addClass('active_link');
}

if (current == '/services') {
    $('#navbar li .services-link').addClass('active_link');
}

if (current == '/contact-us') {
    $('#navbar li .contact-us-link').addClass('active_link');
}

