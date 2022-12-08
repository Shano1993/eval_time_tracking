import "../styles/style.scss";
import { Project } from "./Project";

function getMessage(message: any) {
    setTimeout(() => {
        message.remove();
    }, 5000)
}

const success: HTMLDivElement = document.getElementById("success") as HTMLDivElement;
const error: HTMLDivElement = document.getElementById("error") as HTMLDivElement;

if (error) {
    getMessage(error);
}

if (success) {
    getMessage(success);
}

export let newProject = new Project();
newProject.addNewProject();









