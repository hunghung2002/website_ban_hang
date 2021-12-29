const adressbtn = document.querySelector('#adress-form')
const adressclose = document.querySelector('#adress-close')


adressbtn.addEventListener('click', function() {
        document.querySelector('.adress-form').style.display = 'flex';
    }) //mở chọn địa chỉ
adressclose.addEventListener('click', function() {
        document.querySelector('.adress-form').style.display = 'none';
    }) //đóng chọn địa chỉ

// slider
const rightbtn = document.querySelector('.fa-angle-right')
const leftbtn = document.querySelector('.fa-angle-left')
const imglenght = document.querySelectorAll('.slider-content-left-top img')
let index = 0

rightbtn.addEventListener('click', function() {
    index = index + 1
    if (index > imglenght.length - 1) {
        index = 0;
    }
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%";
})
leftbtn.addEventListener('click', function() {
        index = index - 1
        if (index <= 0) {
            index = imglenght.length - 1
        }
        document.querySelector(".slider-content-left-top").style.right = index * 100 + "%";
    })
    // Slider 1
const imgnumberli = document.querySelectorAll('.slider-content-left-bottom li')
imgnumberli.forEach(function(image, index) {
    image.addEventListener("click", function() {
        removeactive()
        document.querySelector(".slider-content-left-top").style.right = index * 100 + "%";
        image.classList.add("active")
    })
})

function removeactive() {
    let imgactive = document.querySelector('.active')
    imgactive.classList.remove("active")
}
// Slider 2
function imgAuto() {
    index += 1
    if (index > imglenght.length - 1) {
        index = 0;
    }
    removeactive()
    document.querySelector(".slider-content-left-top").style.right = index * 100 + "%";
    imgnumberli[index].classList.add("active")
        // console.log(index)
}
setInterval(imgAuto, 5000)
    //slider product
const rightbtntwo = document.querySelector('.fa-angle-right-two')
const leftbtntwo = document.querySelector('.fa-angle-left-two')
const imglenghttwo = document.querySelectorAll('.slider-product-one-content-items')

rightbtntwo.addEventListener('click', function() {
    index = index + 1
    if (index > imglenghttwo.length - 1) {
        index = 0;
    }
    document.querySelector(".slider-product-one-content-items-content").style.right = index * 100 + "%";
})
leftbtntwo.addEventListener('click', function() {
        index = index - 1
        if (index <= 0) {
            index = imglenghttwo.length - 1
        }
        document.querySelector(".slider-product-one-content-items-content").style.right = index * 100 + "%";
    })
    // Product gallery two