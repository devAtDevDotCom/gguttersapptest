//side nav 
/*document.addEventListener('DOMContentLoaded', function() {
  // nav menu
  const menus = document.querySelectorAll('.side-menu');
  M.Sidenav.init(menus, {edge: 'right'});
  // add recipe form
  const forms = document.querySelectorAll('.side-form');
  M.Sidenav.init(forms, {edge: 'left'});
});
console.log('hey tim?');

// upload photos

/*document.querySelector("#files").addEventListener("change", (e) => {
  if(window.File && window.FileReader && window.FileList && window.Blob) {
      const files = e.target.files;
      const output = document.querySelector("#result");

      for (let i = 0; i < files.length; i++) {
        if(!files[i].type.match("image")) continue;
        const picReader = new FileReader();
       // console.log(picReader);
        picReader.addEventListener("load", function(event) {
          const picFile = event.target;
          const div = document.createElement("div");
          div.innerHTML = `<img class="thumbnail max-width" src="${picFile.result}" title="${picFile.name}"/>`;
          output.appendChild(div);
        })
        picReader.readAsDataURL(files[i]);
      }
  } else {
      alert("Your browser does not support file uploads")
  }
})
*/

