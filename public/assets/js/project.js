//Selectors
const projectButton = document.querySelector("#projectButton");
const projectList = document.querySelector(".projectList");
const projectInput = document.querySelector(".form-control");

//Event Listeners
projectButton.addEventListener('click', addProject);

//Functions
function addProject(event){
    event.preventDefault();

    const projectDiv = document.createElement('div');
    projectDiv.classList.add('card');

    const newProject = document.createElement('div');
    newProject.innerText = 'hey';
    newProject.classList.add('card-header');
    projectDiv.appendChild(newProject);
}