function openTab(evt, tabName) {
  // Declare all variables
  let i, detailContent, detailLink;

  // Get all elements with class="tabcontent" and hide them
  detailContent = document.getElementsByClassName("detail-pro-tab-content");
  for (i = 0; i < detailContent.length; i++) {
    detailContent[i].style.display = "none";
  }

  // Get all elements with class="tablinks" and remove the class "active"
  detailLink = document.getElementsByClassName("detail-pro-btn");
  for (i = 0; i < detailLink.length; i++) {
    detailLink[i].className = detailLink[i].className.replace(" active", "");
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}

document.getElementById("defaultTab").click();
