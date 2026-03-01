const depenses_button = document.getElementById('depenses_button');
const depenses_section = document.getElementById('depenses_section');
const members_button = document.getElementById('members_button');
const members_section = document.getElementById('members_section');

depenses_button.addEventListener('click' , () => {
    depenses_section.classList.remove('hidden')
    members_section.classList.add('hidden')
})

members_button.addEventListener('click' , () => {
    members_section.classList.remove('hidden')
    depenses_section.classList.add('hidden')
})