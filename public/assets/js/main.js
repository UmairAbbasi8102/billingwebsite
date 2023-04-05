/**
* Template Name: Arsha - v4.11.0
* Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/
(function () {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        let selectEl = select(el, all)
        if (selectEl) {
            if (all) {
                selectEl.forEach(e => e.addEventListener(type, listener))
            } else {
                selectEl.addEventListener(type, listener)
            }
        }
    }

    /**
     * Easy on scroll event listener
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Navbar links active state on scroll
     */
    let navbarlinks = select('#navbar .scrollto', true)
    const navbarlinksActive = () => {
        let position = window.scrollY + 200
        navbarlinks.forEach(navbarlink => {
            if (!navbarlink.hash) return
            let section = select(navbarlink.hash)
            if (!section) return
            if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
                navbarlink.classList.add('active')
            } else {
                navbarlink.classList.remove('active')
            }
        })
    }
    window.addEventListener('load', navbarlinksActive)
    onscroll(document, navbarlinksActive)

    /**
     * Scrolls to an element with header offset
     */
    const scrollto = (el) => {
        let header = select('#header')
        let offset = header.offsetHeight

        let elementPos = select(el).offsetTop
        window.scrollTo({
            top: elementPos - offset,
            behavior: 'smooth'
        })
    }

    /**
     * Toggle .header-scrolled class to #header when page is scrolled
     */
    let selectHeader = select('#header')
    if (selectHeader) {
        const headerScrolled = () => {
            if (window.scrollY > 100) {
                selectHeader.classList.add('header-scrolled')
            } else {
                selectHeader.classList.remove('header-scrolled')
            }
        }
        window.addEventListener('load', headerScrolled)
        onscroll(document, headerScrolled)
    }

    /**
     * Back to top button
     */
    let backtotop = select('.back-to-top')
    if (backtotop) {
        const toggleBacktotop = () => {
            if (window.scrollY > 100) {
                backtotop.classList.add('active')
            } else {
                backtotop.classList.remove('active')
            }
        }
        window.addEventListener('load', toggleBacktotop)
        onscroll(document, toggleBacktotop)
    }

    /**
     * Mobile nav toggle
     */
    on('click', '.mobile-nav-toggle', function (e) {
        select('#navbar').classList.toggle('navbar-mobile')
        this.classList.toggle('bi-list')
        this.classList.toggle('bi-x')
    })

    /**
     * Mobile nav dropdowns activate
     */
    on('click', '.navbar .dropdown > a', function (e) {
        if (select('#navbar').classList.contains('navbar-mobile')) {
            e.preventDefault()
            this.nextElementSibling.classList.toggle('dropdown-active')
        }
    }, true)

    /**
     * Scrool with ofset on links with a class name .scrollto
     */
    on('click', '.scrollto', function (e) {
        if (select(this.hash)) {
            e.preventDefault()

            let navbar = select('#navbar')
            if (navbar.classList.contains('navbar-mobile')) {
                navbar.classList.remove('navbar-mobile')
                let navbarToggle = select('.mobile-nav-toggle')
                navbarToggle.classList.toggle('bi-list')
                navbarToggle.classList.toggle('bi-x')
            }
            scrollto(this.hash)
        }
    }, true)

    /**
     * Scroll with ofset on page load with hash links in the url
     */
    window.addEventListener('load', () => {
        if (window.location.hash) {
            if (select(window.location.hash)) {
                scrollto(window.location.hash)
            }
        }
    });

    /**
     * Preloader
     */
    let preloader = select('#preloader');
    if (preloader) {
        window.addEventListener('load', () => {
            preloader.remove()
        });
    }

    /**
     * Initiate  glightbox
     */
    const glightbox = GLightbox({
        selector: '.glightbox'
    });

    /**
     * Skills animation
     */
    let skilsContent = select('.skills-content');
    if (skilsContent) {
        new Waypoint({
            element: skilsContent,
            offset: '80%',
            handler: function (direction) {
                let progress = select('.progress .progress-bar', true);
                progress.forEach((el) => {
                    el.style.width = el.getAttribute('aria-valuenow') + '%'
                });
            }
        })
    }

    /**
     * Porfolio isotope and filter
     */
    window.addEventListener('load', () => {
        let portfolioContainer = select('.portfolio-container');
        if (portfolioContainer) {
            let portfolioIsotope = new Isotope(portfolioContainer, {
                itemSelector: '.portfolio-item'
            });

            let portfolioFilters = select('#portfolio-flters li', true);

            on('click', '#portfolio-flters li', function (e) {
                e.preventDefault();
                portfolioFilters.forEach(function (el) {
                    el.classList.remove('filter-active');
                });
                this.classList.add('filter-active');

                portfolioIsotope.arrange({
                    filter: this.getAttribute('data-filter')
                });
                portfolioIsotope.on('arrangeComplete', function () {
                    AOS.refresh()
                });
            }, true);
        }

    });

    /**
     * Initiate portfolio lightbox
     */
    const portfolioLightbox = GLightbox({
        selector: '.portfolio-lightbox'
    });

    /**
     * Portfolio details slider
     */
    new Swiper('.portfolio-details-slider', {
        speed: 400,
        loop: true,
        autoplay: {
            delay: 5000,
            disableOnInteraction: false
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
            clickable: true
        }
    });

    /**
     * Animation on scroll
     */
    window.addEventListener('load', () => {
        AOS.init({
            duration: 1000,
            easing: "ease-in-out",
            once: true,
            mirror: false
        });
    });

    //   validate contact form

    var constraints = {
        name: {
            presence: true,
            length: {
                minimum: 5,
                maximum: 30
            },
            format: {
                pattern: "[a-z| ' ']+",
                flags: "i",
                message: "Can Only contain string"
            }
        },
        email: {
            presence: true,
            email: true,
        },
        subject: {
            presence: true,
        },
        message: {
            presence: true,
        }


    }

    var form = document.getElementById('myform');
    if (form) {
        form.addEventListener("submit", function (ev) {
            ev.preventDefault();
            //  Disable the submit button
            $('#submit-button').prop('disabled', true);
            handleFormSubmit(form);
        });
    }
    // Hook up the inputs to validate on the fly
    var inputs = document.querySelectorAll("input, textarea, select, checkbox")
    for (var i = 0; i < inputs.length; ++i) {
        inputs.item(i).addEventListener("change", function (ev) {
            var errors = validate(form, constraints) || {};
            showErrorsForInput(this, errors[this.name])
        });
    }

    function handleFormSubmit(form, input) {

        var errors = validate(form, constraints);

        if (!errors) {
            showSuccess();
        }
        else {
            $('#submit-button').prop('disabled', false);
            showErrors(form, errors || {});
        }
    }
    function showSuccess() {

        // Get the form data
        const formData = new FormData(form);

        // Send an AJAX request to submit the form data to the server
        $.ajax({
            url: '/submit-form',
            method: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function (response) {
                // Handle the server response
                console.log(response);
                // Show a success message in the DOM
                $('#success-message').text(response.message);
                $('#success-message').show();
                // Reset the form
                $('#myform')[0].reset();

                // Hide the success message after 5 seconds
                setTimeout(function () {
                    $('#success-message').hide();
                }, 5000);
            },
            error: function (xhr, status, error) {
                // Handle the AJAX error
                console.log(error);
                // Show an error message in the DOM
                $('#error-message').text(error);
                $('#error-message').show();
                // Hide the error message after 5 seconds
                setTimeout(function () {
                    $('#error-message').hide();
                }, 5000);
            },
            complete: function () {
                // Re-enable the submit button
                $('#submit-button').prop('disabled', false);
            }
        });


    }
    function showErrors(Form, errors) {
        _.each(form.querySelectorAll("input[name], select[name], textarea[name]"), function (input) {
            showErrorsForInput(input, errors && errors[input.name]);
        });
    }
    function showErrorsForInput(input, errors) {
        var formGroup = closestParent(input.parentNode, "form-group");
        var messages = formGroup.querySelector(".messages");
        resetFormGroup(formGroup, input);

        if (errors) {
            input.classList.add("is-invalid");
            formGroup.classList.add('has-error');
            _.each(errors, function (error) {
                addError(messages, error);
            });
        } else {
            input.classList.remove("is-invalid");
            formGroup.classList.add("has-success");
        }
    }
    function closestParent(child, className) {

        if (!child || child == document) {
            return null;
        }
        if (child.classList.contains(className)) {
            return child;
        } else {
            return closestParent(child, className);
        }

    }
    function resetFormGroup(formGroup, input) {

        formGroup.classList.remove("has-error");

        formGroup.classList.remove("has-success");
        _.each(formGroup.querySelectorAll(".help-block.error.text-danger"), function (el) {
            el.parentNode.removeChild(el);
        });
    }
    function addError(messages, error) {

        var block = document.createElement("div");
        block.classList.add("help-block");
        block.classList.add("error");
        block.classList.add("text-danger");
        block.innerText = error;
        messages.appendChild(block);
    }

    // whatsapp icon
    $('#whatsapp_icon').floatingWhatsApp({
        phone: '+923478229274',
        popupMessage: 'Hello, how can we help you?',
        message: "Please tell me more about Your Company",
        showPopup: true,
        showOnIE: false,
        headerTitle: 'Welcome!',
        backgroundColor: 'none',
        buttonImage: '<img src="/assets/img/whats.png" />'
    });

})()




