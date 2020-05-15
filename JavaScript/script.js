//function for select images and display images in the form
function triggerClick(){
    document.querySelector('#profileImage').click();
}
function displayImage(e){
    if (e.files[0]){
        var reader = new FileReader();
        reader.onload = function(event){
            document.querySelector('#profileDisplay').setAttribute('src', event.target.result);
        }
        reader.readAsDataURL(e.files[0]);
    
    }
}