const  images = [
    "배경/낙서 1.png", 
    "배경/낙서 2.png", 
    "배경/낙서 3.png", 
    "배경/낙서 4.png"
];


const chosenImage = images[Math.floor(Math.random() * images.length)];
const bgImage = document.createElement("배경");

bgImage.src = `img/${chosenImage}`;
document.body.appendChild(bgImage);