import './bootstrap';
import Splide from '@splidejs/splide';
 
document.addEventListener('livewire:navigated', () => { 
    initFlowbite();
})

document.addEventListener('DOMContentLoaded', () => {
    /*var splide = new Splide( '.splide', {
        perPage: 4,
        focus  : 0,
        omitEnd: true,
    });

    var splide = new Splide( '.splide2', {
        perPage: 4,
        focus  : 0,
        omitEnd: true,
    });
    
    splide.mount();*/

    new Splide( '#slider1' ).mount();

    new Splide( '#slider2' ).mount();

    new Splide( '#slider3' ).mount();

    new Splide( '#slider4' ).mount();
});
  
