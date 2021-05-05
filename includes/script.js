function dragNdrop(event) {
  let filename = URL.createObjectURL(event.target.files[0]);
  let preview = document.getElementById("preview");
  let previewImg = document.createElement("img");
  previewImg.setAttribute("src", filename);
  preview.innerHTML = "";
  previewImg.appendChild(previewImg);
}

function drag() {
  document.getElementById("uploadFile").parentNode.className =
    " dragging Dragbox";
}

function drop() {
  document.getElementById("uploadFile").parentNode.className = "dragbox";
}
