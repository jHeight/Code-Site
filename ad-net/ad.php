<html>
<head>
<meta charset="UTF-8" />
<script type="text/javascript">
function randomIframe() {
  var ends = [
    "//code.gvsg.cf/ad-net/001.htm",
    "//code.gvsg.cf/ad-net/002.htm",
    "//code.gvsg.cf/ad-net/003.htm",
    "//code.gvsg.cf/ad-net/004.htm",
    "//code.gvsg.cf/ad-net/005.htm"
  ];

  var i = Math.floow(Math.random() * ends.length);

  var iframe = document.createElement('iframe');
  iframe.src = ends[i];
  iframe.style.height = '100%';
  iframe.style.width = '100%';
  document.body.appendChild(iframe);

}

window.onload = randomIframe;
</script>
</head>
<body>
</body>
</html>
