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
    carouselSlide.style.transition="transform 0.4s ease-in-out";
    counter ++;
    console.log(counter);
    carouselSlide.style.transform = 'translateX(' + (-size * counter) + 'px)';

});

prevBtn.addEventListener('click',() => {
    if(counter <= 0) return;
    carouselSlide.style.transition="transform 0.4s ease-in-out";
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


//	This function will return the current file name
function currentFile() {
	// Step 1: grab the current "location" (URL) of this webpage and put it in a variable
	currentURL = window.location.href;

	// Step 2: find the location (index number) of the last slash (/) in the URL
	fileNameIndex = currentURL.lastIndexOf("/") + 1;

	// Step 3: extract the filename from the URL based on the whatever's to the right of
	//	the last slash
	currentFileName = currentURL.substr(fileNameIndex);

	return currentFileName;
}

thisFile = currentFile();

// Step 4: if there's nothing to the right of the last slash, then the current page is
//	index.php, so manually set it so
if ( thisFile == "" ) {
	thisFile = "index.php"
}

// Step 5: check each anchor in the navigation element 
//	(btw - did you code your menu using NAV?)...
$("nav a").each( function() {

	// Step 5a: if there's a match...
	if (this.href.indexOf(thisFile) > 0) {

		// Step 5a-a: then add the "is-current" class to the anchor
		$(this).addClass("is-current");
	}
});