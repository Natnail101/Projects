const carouselSlide = document.querySelector('.carousel-slide');
const carouselImage = document.querySelectorAll('.carousel-slide img')

//button
const prevBtn = document.querySelector('#prevBtn');
const nextBtn = document.querySelector('#nextBtn');

//coutner

let counter = 1;

const size = carouselImage[0].clientWidth;

carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';


nextBtn.addEventListener('click',() => {
    if (counter >= carouselImage.length - 1) return;
    carouselSlide.style.transition="transform 0.5s ease-in-out";
    counter ++;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

prevBtn.addEventListener('click',() => {
    if(counter <= 0) return;
    carouselSlide.style.transition="transform 0.5s ease-in-out";
    counter --;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';


});

carouselSlide.addEventListener('transitionend',() =>{
    // console.log(carouselImage[counter]);
    if(carouselImage[counter].id==='LastClone'){
        carouselSlide.style.transition = 'none';
        // console.log('none');
        counter = carouselImage.length -2;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }
    if(carouselImage[counter].id==='FirstClone'){
        carouselSlide.style.transition = 'none';
        // console.log('none');
        counter = carouselImage.length -counter;
        carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';
    }

})
