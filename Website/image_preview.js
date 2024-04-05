// Define the previewImage function
function previewImage(inputId, previewId) {
  var inputElement = document.getElementById(inputId);
  if (inputElement && inputElement.files.length > 0) {
    var reader = new FileReader();
    reader.readAsDataURL(inputElement.files[0]);
    reader.onload = function (event) {
      document.getElementById(previewId).src = event.target.result;
    };
  }
}

// Call the function in a loop for each input and preview pair
for (let i = 1; i <= 10; i++) {
  let inputId = "image" + i;
  let previewId = "preview" + i;
  previewImage(inputId, previewId);
}
