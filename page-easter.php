<?php
/**
* Template Name: Easter
*
* @package WordPress
* @subpackage Flisol
* @since Flisol 1.0
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="<?php echo get_template_directory_uri() ?>/js/jquery-2.2.3.min.js"></script>
  <title>Hello Friend</title>
  <style>
    body {
      font-family: courier new, monospace;
      color: #0f8;
      margin: 30px;
      background: #111 radial-gradient(#000, #111) no-repeat center center;
      font-size: 13px;
      height: 100vh
    }

    a {
      color: inherit;
      text-decoration: underline;
    }

    #terminal {
      white-space: pre-wrap;
      line-height: 1.4;
    }

    #caret {
      display: inline-block;
      height: 1.35em;
      width: 0.7em;
      vertical-align: middle;
      background-color: #fff;
    }

    .transparent {
      opacity: 0;
    }
  </style>
</head>
<body>
  <span id=terminal>
  /* 
   _   _      _ _             _____     _                _   ___ 
  | | | | ___| | | ___       |  ___| __(_) ___ _ __   __| | |__ \
  | |_| |/ _ \ | |/ _ \      | |_ | '__| |/ _ \ '_ \ / _` |   / /
  |  _  |  __/ | | (_) |  _  |  _|| |  | |  __/ | | | (_| |  |_| 
  |_| |_|\___|_|_|\___/  ( ) |_|  |_|  |_|\___|_| |_|\__,_|  (_) 
                         |/   
    
  THAT'S LAME.

  */</span><div id=caret></div>
  <script>

    // vars
    var src, trmnl, caret, pos, speed;
    trmnl = $("#terminal");
    caret = $("#caret");
    pos = 0;
    speed = 3;

    // main
    $("html").on('keydown', function (e) {
      pos += speed;
      if (pos > src.length + speed - src.length % speed) {
        pos = 0;
      }
      trmnl.html(trmnl.html() + src.slice(pos - speed, pos));
      caret.removeClass('transparent');
      window.scrollTo(0, document.body.scrollHeight);
    });

  // caret animation
  setInterval(function () {
    caret.toggleClass('transparent');
  }, 600);

  // filler code
  src = "\n\n/**\n\tA class for executing binary searches through an array.\n*/\npublic class BinarySearcher\n{\n\tprivate int[] a;\n\n\t/**\n\t\tConstructs a BinarySearcher.\n\t\t@param anArray a sorted array of integers\n\t*/\n\tpublic BinarySearcher(int[] anArray)\n\t{\n\t\ta = anArray;\n\t}\n\n\t/**\n\t\tFinds a value in a sorted array, using the binary\n\t\tsearch algorithm.\n\t\t@param v the value to search\n\t\t@return the index at which the value occurs, or -1\n\t\tif it does not occur in the array\n\t*/\n\tpublic int search(int v)\n\t{\n\t\tint low = 0;\n\t\tint high = a.length - 1;\n\t\twhile (low <= high)\n\t\t{\n\t\t\tint mid = (low + high) / 2;\n\t\t\tint diff = a[mid] - v;\n\n\t\t\tif (diff == 0) // a[mid] == v\n\t\t\t\treturn mid;\n\t\t\telse if (diff < 0) // a[mid] < v\n\t\t\t\tlow = mid + 1;\n\t\t\telse\n\t\t\t\thigh = mid - 1;\n\t\t}\n\t\treturn -1;\n\t}\n}\n\n";


  </script>
</body>
</html>