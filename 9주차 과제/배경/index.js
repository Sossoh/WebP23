const images = ['낙서 1.png', '낙서 2.png', '낙서 3.png', '낙서 4.png'];

const scriptPath = document.currentScript.src;
const scriptDirectory = scriptPath.substring(0, scriptPath.lastIndexOf('/') + 1);

const randomImage = scriptDirectory + images[Math.floor(Math.random() * images.length)];

document.body.style.backgroundImage = `url('${randomImage}')`;
