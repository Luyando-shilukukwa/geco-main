function OpenNav() {
    const x = document.getElementById("text-content");
    if (x.className === "text-items") {
      x.style.display = "block"
    }
    
  }
function CloseNav() {
    const x = document.getElementById("text-content");
    if (x.className === "text-items") {
      x.style.display = "none"
    }
  }