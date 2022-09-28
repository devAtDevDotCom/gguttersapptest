// reviews carousel slider

var indexValue = 1;
    showImg(indexValue);
    function btn_slide(e){showImg(indexValue = e);}
    function side_slide(e){showImg(indexValue += e);}
    function showImg(e){
        var i;
        const img = document.querySelectorAll('.imgs');
        const sliders = document.querySelectorAll('.btn-sliders span');
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}
        for(i = 0; i < img.length; i++){
            img[i].style.display = "none";
        }
        for(i = 0; i < sliders.length; i++){
            sliders[i].style.background = "#B32241"; // red
        }
        img[indexValue-1].style.display = "block";
        sliders[indexValue-1].style.background = "#23386F"; // blue
    }


    // Our Process carousel slider

    var indexValueProcess = 1;
    showProcessImg(indexValueProcess);
    function btn_process_slide(e){showProcessImg(indexValueProcess = e);}
    function side_process_slide(e){showProcessImg(indexValueProcess += e);}
    function showProcessImg(e){
        var x;
        const process_img = document.querySelectorAll('.process-imgs');
        const process_sliders = document.querySelectorAll('.btn-process-sliders span');
        if(e > process_img.length){indexValueProcess = 1}
        if(e < 1){indexValueProcess = process_img.length}
        for(x = 0; x < process_img.length; x++){
            process_img[x].style.display = "none";
        }
        for(x = 0; x < process_sliders.length; x++){
            process_sliders[x].style.background = "#B32241"; // red
        }
        process_img[indexValueProcess-1].style.display = "block";
        process_sliders[indexValueProcess-1].style.background = "#23386F"; // blue
    }

/*var indexValue = 1;
    showImg(indexValue);
    function btn_slide(e){showImg(indexValue = e);}
    function side_slide(e){showImg(indexValue += e);}
    function showImg(e){
        var i;
        const img = document.querySelectorAll('.imgs');
        const sliders = document.querySelectorAll('.btn-sliders span');
        if(e > img.length){indexValue = 1}
        if(e < 1){indexValue = img.length}
        for(i = 0; i < img.length; i++){
            img[i].style.display = "none";
        }
        img[indexValue-1].style.display = "block";
    }*/





/*const track = document.querySelector('.carousel__track');
const slides = Array.from(track.children);
const nextButton = document.querySelector('.carousel__button--right');
const prevButton = document.querySelector('.carousel__button--left');
const dotsNav = document.querySelector('.carousel__nav');
const dots = Array.from(dotsNav.children);

const slideWidth = slides[0].getBoundingClientRect().width + 'px';

console.log(slideWidth);
console.log(slides);
//
slides[0].style.left = slideWidth * 0 + 'px';
slides[1].style.left = slideWidth * 1 + 'px';
slides[2].style.left = slideWidth * 2 + 'px';

/*slides.forEach((slide, index) => {
    slide.style.left = slideWidth * index + 'px';
})*/



