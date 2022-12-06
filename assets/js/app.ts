import "../styles/style.scss";
import { Project } from "./Project";
import { Display } from "./Display";

export let newProject = new Project();
newProject.addNewProject();

let allArrayProjectString: string = localStorage.getItem("Project") as string;
export let allProjectArray = JSON.parse(allArrayProjectString);

for (let i = 0; i < allProjectArray.length; i++) {
    let newDisplay = new Display();
    newDisplay.displayProject();
}









