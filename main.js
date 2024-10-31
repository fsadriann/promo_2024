let menu = document.querySelector('.btnM-O');
menu.onclick = function(){
    menu.classList.toggle('active');
}

let active = document.querySelector('.menu');
active.onclick = function(){
    active.classList.toggle('active');
}


    function expandSection(clickedImg) {

        const containers = document.querySelectorAll('.container');
        const allSections = document.querySelectorAll('.section');
        const clickedSection = clickedImg.closest('.section');
        
        allSections.forEach(section => {
            if (section !== clickedSection) {
                section.style.display = 'none';
            } else {
                section.style.width = '50%'; 
                section.style.transition = 'all 0.3s ease';
                
                const img = section.querySelector('.img');
                if (img) {
                    img.style.width = '600px';
                    img.style.height = '400px';
                }
            }
        });
    
        const showAllButton = document.querySelector('button');
        if (showAllButton) {
            showAllButton.style.display = 'block';
        }
    }
    
    function showAll() {
        const sections = document.querySelectorAll('.section');
        sections.forEach(section => {
            section.style.display = 'flex';
            section.style.width = '30%';
            
            const img = section.querySelector('.img');
            if (img) {
                img.style.width = '300px';
                img.style.height = '200px';
            }
        });
    
        const showAllButton = document.querySelector('button');
        if (showAllButton) {
            showAllButton.style.display = 'none';
        }
    }
    
    document.addEventListener('DOMContentLoaded', function() {
        const showAllButton = document.querySelector('button');
        if (showAllButton) {
            showAllButton.style.display = 'none';
        }
    });
