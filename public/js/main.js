var header = document.getElementClassName('.menu');
window.addEventListener('scroll',()=>{
    var scroll = window.scrollY;
});
if(scroll > 100){
    header.style.backgroundColor = '#f0f0f0';
}else{
    header.style.backgroundColor = 'transparent';
}