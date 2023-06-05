document.querySelector('.home').onmousemove = (e) =>{

    document.querySelectorAll('.home-parallax').forEach(elm =>{
  
      let speed = elm.getAttribute('data-speed');
  
      let x = (window.innerWidth - e.pageX * speed) / 150;
      let y = (window.innerHeight - e.pageY * speed) / 150;
  
      elm.style.transform = `translateX(${y}px) translateY(${x}px) rotate(1deg)`;
  
    });
  
  };
  
  
  document.querySelector('.home').onmouseleave = (e) =>{
  
    document.querySelectorAll('.home-parallax').forEach(elm =>{
  
      elm.style.transform = `translateX(0px) translateY(0px) rotate(0deg)`;
  
    });
  
  };