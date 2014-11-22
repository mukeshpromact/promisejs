<html lang="en">
    <head>
        <meta charset="utf-8">
        <script src="jquery-1.11.1.min.js"></script>
    </head>
    <body>
        
        <img src="Desert.jpg" class="img-1"/>
        <img src="Hydrangeas.jpg" class="img-2"/>
        
        <script type="text/javascript">
            var img1 = document.querySelector('.img-1');
            var img2 = document.querySelector('.img-2');
            
            function loaded() {
                // woo yey image loaded
                alert("a22");
            }
            
            if (img1.complete) {
              loaded();
            }
            else {
              img1.addEventListener('load', loaded);
            }

            img1.addEventListener('load', function() {
              // woo yey image loaded
              alert("aaa");
            });

            img1.addEventListener('error', function() {
              // argh everything's broken
              alert("bb");
            });
            
            img1.ready().then(function() {
  alert("loaded");
}, function() {
  // failed
});

// and…
Promise.all([img1.ready(), img2.ready()]).then(function() {
  alert("loaded");
}, function() {
  // one or more failed
});
        </script>
    </body>
</html>

