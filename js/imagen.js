function readFile(){
    var reader = new FileReader();
    var file = document.getElementById('imagen').files[0];

    reader.onload = function(e){
        document.getElementById('result').src = e.target.result;
    }
    reader.readAsDataURL(file);
}