import Dropzone from "dropzone";
Dropzone.autoDiscover = false;
const dropzone = new Dropzone('#dropzone',{
    dictDefaultMessage: 'Da clic para subir fotografia',
    acceptedFiles:'.png, .jpg, .jpeg, .gif',
    addRemoveLinks:true,
    dicRemoveFile:'Borrar fotografia',
    maxFiles:1,
    uploadMultiple: false,
});