document.addEventListener('DOMContentLoaded', () => {
    const observer = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visivel');
          observer.unobserve(entry.target);
        }
      });
    }, {
      threshold: 0.1
    });
  
    document.querySelectorAll('.animar-secao').forEach(section => {
      observer.observe(section);
      
      // Adiciona evento para detectar interação do usuário
      section.addEventListener('wheel', () => {
        section.classList.add('parar-animacao');
      });
      
      section.addEventListener('touchmove', () => {
        section.classList.add('parar-animacao');
      });
    });
  });
  