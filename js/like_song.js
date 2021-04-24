

function like_song( songname) {
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = function() {
    if (xhr.readyState === 4) {
      xhr.response;
    }
  }

  xhr.open('GET', 'index.php?songname=' + songname, true);
  console.log(songname)
  xhr.send();
}