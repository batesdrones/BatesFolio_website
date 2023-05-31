const links = document.querySelectorAll('.link');
const sections = document.querySelectorAll('section');

let activeLink = 0;

links.forEach((link, i) => {
  link.addEventListener('click', (event) => {
    event.preventDefault(); // Prevent default link behavior
    if (activeLink != i) {
      links[activeLink].classList.remove('active');
      link.classList.add('active');
      sections[activeLink].classList.remove('active');

      setTimeout(() => {
        activeLink = i;
        sections[i].classList.add('active');
      }, 1000);
    }
  });
});

const imageContainer = document.querySelector('.image-container');

imageContainer.addEventListener('mousemove', (event) => {
  const containerRect = imageContainer.getBoundingClientRect();
  const mouseX = event.clientX - containerRect.left;
  const mouseY = event.clientY - containerRect.top;
  const offsetX = (containerRect.width / 2 - mouseX) / 10;
  const offsetY = (containerRect.height / 2 - mouseY) / 10;
  const blurValue = Math.sqrt(offsetX * offsetX + offsetY * offsetY);
  const image = imageContainer.querySelector('.home-img');
  image.style.filter = `blur(${blurValue}px)`;
});

imageContainer.addEventListener('mouseleave', () => {
  const image = imageContainer.querySelector('.home-img');
  image.style.filter = 'blur(20px)';
});