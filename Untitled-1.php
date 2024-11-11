<!DOCTYPE html>
<html>

<body>
  <p>What is the name(s) of your browser?</p>
  <button onclick="myFunction()">Try it</button>
  <p id="demo"></p>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(window).on('load', function() {
      var userAgent = window.navigator.userAgent,
        platform = window.navigator?.userAgentData?.platform || window.navigator.platform,
        macosPlatforms = ['Macintosh', 'MacIntel', 'MacPPC', 'Mac68K', 'macOS'],
        windowsPlatforms = ['Win32', 'Win64', 'Windows', 'WinCE'],
        iosPlatforms = ['iPhone', 'iPad', 'iPod'],
        os = null;
      window.addEventListener('appinstalled', (evt) => {
        alert('a2hs installed');
      });

      if (macosPlatforms.indexOf(platform) !== -1) {
        os = 'Mac OS';

      } else if (iosPlatforms.indexOf(platform) !== -1) {
        os = 'iOS';
        if ((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1) {
          $('#myModal').modal('show');
        } else if (navigator.userAgent.indexOf("Edg") != -1) {
          $('#myModal').modal('show');
        } else if (navigator.userAgent.indexOf("Chrome") != -1) {
          $('#myModal').modal('show');
        } else if (navigator.userAgent.indexOf("Safari") != -1) {
          $('#myModal').modal('show');
        } else if (navigator.userAgent.indexOf("Firefox") != -1) {
          $('#myModal').modal('show');
        } else if ((navigator.userAgent.indexOf("MSIE") != -1) || (!!document.documentMode == true)) //IF IE > 10
        {
          $('#myModal').modal('show');
        } else {
          // alert('unknown');
        }
      } else if (windowsPlatforms.indexOf(platform) !== -1) {
        os = 'Windows';
      } else if (/Android/.test(userAgent)) {
        os = 'Android';
      } else if (/Linux/.test(platform)) {
        os = 'Linux';
      }
    });
  </script>

</body>

</html>