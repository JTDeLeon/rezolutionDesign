console.log('mobile header code loaded');

document.querySelector('.hamburger').addEventListener('click',()=>{
    console.log('yo!');
    document.querySelector('.mobile-overlay').style.display = 'block';
    //Hides the page
    document.querySelector('.col-full').style.display = 'none';

});