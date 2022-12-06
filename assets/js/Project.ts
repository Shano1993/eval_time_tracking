import { newProject } from "./app";
import { Display } from "./Display";

const addButtonProject: HTMLInputElement = document.getElementById("addButton") as HTMLInputElement;
const arrayProject: Project[] = [];

export class Project {
    public title: string = "";
    public task: string[] = [];

    public addNewProject() {
        if (addButtonProject) {
            addButtonProject.addEventListener("click", () => {
                if (localStorage.getItem("Project")) {
                    let allArrayProject: Project[] = JSON.parse(localStorage.getItem("Project") as string);
                    allArrayProject.push(newProject);
                    let newDisplay = new Display();
                    newDisplay.displayProject();
                    localStorage.setItem("Project", JSON.stringify(allArrayProject));
                }
                else  {
                    localStorage.setItem("Project", JSON.stringify(arrayProject));
                }
            })
        }
    }
}