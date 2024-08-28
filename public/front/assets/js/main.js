document.addEventListener("DOMContentLoaded", function () {
    const menuItems = document.querySelectorAll(
        ".tp-main-menu-content ul li a"
    );

    menuItems.forEach(function (item) {
        item.addEventListener("click", function () {
            // Remove 'active' class from all items
            menuItems.forEach(function (link) {
                link.parentElement.classList.remove("active");
            });

            // Add 'active' class to the clicked item
            this.parentElement.classList.add("active");
        });
    });
});
// destination;
function toggleHiddenContent(event) {
    event.preventDefault();

    // Find the nearest .data-hide element
    var hiddenContent = event.target.previousElementSibling;

    if (
        hiddenContent.style.display === "none" ||
        hiddenContent.style.display === ""
    ) {
        hiddenContent.style.display = "block";
        event.target.innerText = "Read less -";
    } else {
        hiddenContent.style.display = "none";
        event.target.innerText = "Read more +";
    }
}
function toggleDetails(event) {
    event.preventDefault(); // Prevent default link behavior

    // Get the current card (i.e., the closest parent .single-assessment element)
    const card = event.currentTarget.closest(".single-assessment");

    // Find the .data-hide2 element within the current card
    const content = card.querySelector(".data-hide2");

    // Toggle the visibility of the content
    if (content.style.display === "none" || content.style.display === "") {
        content.style.display = "inline"; // Change this to 'block' if you want it to take full width
        event.currentTarget.innerHTML = "<span>Hide Details</span>"; // Update button text
    } else {
        content.style.display = "none";
        event.currentTarget.innerHTML = "<span>Details</span>"; // Update button text
    }
}
// package holidays

function toggleHiddenContent1(event) {
    event.preventDefault();

    // Find the nearest .data-hide element
    var hiddenContent = event.target.previousElementSibling;

    if (
        hiddenContent.style.display === "none" ||
        hiddenContent.style.display === ""
    ) {
        hiddenContent.style.display = "block";
        event.target.innerText = "Read less -";
    } else {
        hiddenContent.style.display = "none";
        event.target.innerText = "Read more +";
    }
}

// review form
function starsReducer(state, action) {
    switch (action.type) {
        case "HOVER_STAR": {
            return {
                starsHover: action.value,
                starsSet: state.starsSet,
            };
        }
        case "CLICK_STAR":
            {
                return {
                    starsHover: state.starsHover,
                    starsSet: action.value,
                };
            }
            break;
        default:
            return state;
    }
}

var StarContainer = document.getElementById("rating");
var StarComponents = StarContainer.children;

var state = {
    starsHover: 0,
    starsSet: 4,
};

function render(value) {
    for (var i = 0; i < StarComponents.length; i++) {
        StarComponents[i].style.fill = i < value ? "#f39c12" : "#808080";
    }
}

for (var i = 0; i < StarComponents.length; i++) {
    StarComponents[i].addEventListener("mouseenter", function () {
        state = starsReducer(state, {
            type: "HOVER_STAR",
            value: this.id,
        });
        render(state.starsHover);
    });

    StarComponents[i].addEventListener("click", function () {
        state = starsReducer(state, {
            type: "CLICK_STAR",
            value: this.id,
        });
        render(state.starsHover);
    });
}

StarContainer.addEventListener("mouseleave", function () {
    render(state.starsSet);
});

var review = document.getElementById("review");
var remaining = document.getElementById("remaining");
review.addEventListener("input", function (e) {
    review.value = e.target.value.slice(0, 999);
    remaining.innerHTML = 999 - e.target.value.length;
});

var form = document.getElementById("review-form");

form.addEventListener("submit", function (e) {
    e.preventDefault();
    let post = {
        stars: state.starsSet,
        review: form["review"].value,
        name: form["name"].value,
        city: form["city"].value,
        email: form["email"].value,
    };

    console.log(post);
});

document.getElementById("submit").addEventListener("click", function (e) {
    e.preventDefault();
    document.getElementById("submitForm").click();
});

var reviews = {
    reviews: [
        {
            stars: 3,
            name: "bob",
            city: "Noosk",
            review: "1 Thompson Greenspon is so grateful to have worked with CPASiteSolutions on our",
        },
        {
            stars: 4,
            name: "bobbo",
            city: "WinNoosk",
            review: "2 Thompson Greenspon is so grateful to have worked with CPASiteSolutions on our",
        },
        {
            stars: 2,
            name: "bobster",
            city: "NooSKI",
            review: "3 Thompson Greenspon is so grateful to have worked with CPASiteSolutions on our",
        },
        {
            stars: 1,
            name: "Addii",
            city: "Delhi",
            review: "4 nice place to visit",
        },
    ],
};

function ReviewStarContainer(stars) {
    var div = document.createElement("div");
    div.className = "stars-container";
    for (var i = 0; i < 5; i++) {
        var svg = document.createElementNS("http://www.w3.org/2000/svg", "svg");
        svg.setAttribute("viewBox", "0 12.705 512 486.59");
        svg.setAttribute("x", "0px");
        svg.setAttribute("y", "0px");
        svg.setAttribute("xml:space", "preserve");
        svg.setAttribute("class", "starpkg");
        var svgNS = svg.namespaceURI;
        var star = document.createElementNS(svgNS, "polygon");
        star.setAttribute(
            "points",
            "256.814,12.705 317.205,198.566 512.631,198.566 354.529,313.435 414.918,499.295 256.814,384.427 98.713,499.295 159.102,313.435 1,198.566 196.426,198.566"
        );
        star.setAttribute("fill", i < stars ? "#f39c12" : "#808080");
        svg.appendChild(star);
        div.appendChild(svg);
    }
    return div;
}

function ReviewContentContainer(name, city, review) {
    var reviewee = document.createElement("div");
    reviewee.className = "reviewee footer";
    reviewee.innerHTML = "- " + name + ", " + city;

    var comment = document.createElement("p");
    comment.innerHTML = review;

    var div = document.createElement("div");
    div.className = "review-content";
    div.appendChild(comment);
    div.appendChild(reviewee);

    return div;
}

function ReviewsContainer(review) {
    var div = document.createElement("blockquote");
    div.className = "review";
    div.appendChild(ReviewStarContainer(review.stars));
    div.appendChild(
        ReviewContentContainer(review.name, review.city, review.review)
    );
    return div;
}

for (var i = 0; i < reviews.reviews.length; i++) {
    document
        .getElementById("review-container")
        .appendChild(ReviewsContainer(reviews.reviews[i]));
}
/**
 * Initiate gallery lightbox
 */
// const galleryLightbox = GLightbox({
//     selector: ".gallery-lightbox",
// });
// $(document).ready(function () {
//     $('[data-fancybox="gallery"]').fancybox({
//         // Optional settings
//     });
// });
// <!-- Include jQuery (required for Fancybox) -->

// <!-- Include Fancybox JavaScript -->
$(document).ready(function () {
    $('[data-fancybox="gallery"]').fancybox({
        // Optional settings
        loop: true, // Allow looping through images
        buttons: ["slideShow", "fullScreen", "thumbs", "close"],
    });
});

// select bo
