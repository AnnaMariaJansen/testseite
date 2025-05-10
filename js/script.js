document.addEventListener('DOMContentLoaded', () => {
    console.log("JS geladen");
  
    // Menü (Mobile)
    const toggle = document.querySelector('.menu-toggle');
    const navList = document.querySelector('.nav-list');
    if (toggle && navList) {
      toggle.addEventListener('click', () => {
        const expanded = toggle.getAttribute('aria-expanded') === 'true';
        toggle.setAttribute('aria-expanded', String(!expanded));
        navList.classList.toggle('open');
      });
    }
  
    // Tabs
    const tabs = document.querySelectorAll('.tab-item');
    const contents = document.querySelectorAll('.tab-content');
  
    tabs.forEach(tab => {
      tab.addEventListener('click', () => {
        const targetId = 'tab-' + tab.dataset.tab;
        tabs.forEach(t => t.classList.remove('active'));
        tab.classList.add('active');
        contents.forEach(c => c.hidden = (c.id !== targetId));
      });
    });
  });
  