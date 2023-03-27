  function playSong(url) {
    var audio = document.getElementById('audio-player');
    audio.src = url;
    audio.play();
  }