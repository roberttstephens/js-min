<!DOCTYPE HTML>
<html>
  <head>
    <meta charset="utf-8">
    <title>Stimp Development - Javascript Optimizer</title>
    <link rel="stylesheet" href="assets/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" media="screen">
  </head>
  <body>
    <div id="wrap">
      <form id="raw-input" action="http://closure-compiler.appspot.com/compile" method="POST">
        <textarea class="code" name="js_code" cols="50" rows="20">
        function hello(name) {
          // Greets the user
          alert('Hello, ' + name);
        }
        hello('New user');
        </textarea>
        <div class="settings">
          <h3 class="compilation-level">Compilation Level:</h3>
  
          <div class="fieldset">
            <input id="white" type="radio" name="compilation_level" value="WHITESPACE_ONLY" checked="checked">
            <label for="white">Strip Whitespace</label>
          </div>
          <div class="fieldset">
            <input id="simple" type="radio" name="compilation_level" value="SIMPLE_OPTIMIZATIONS">
            <label for="simple">Simple Optimizations</label>
          </div>
          <div class="fieldset">
            <input id="advanced" type="radio" name="compilation_level" value="ADVANCED_OPTIMIZATIONS">
            <label for="advanced">Advanced Optimizations</label>
          </div>
        </div>

        <input type="hidden" name="output_format" value="text">
        <input type="hidden" name="output_info" value="compiled_code">
        <input id="raw-input-submit" type="submit" value="Optimize">
      </form>
      <form id="optimized-code-form" action="download.php" target="_blank" method="POST">
        <textarea id="optimized-code" class="code" name="js_code" cols="50" rows="20" readonly="readonly">
        </textarea>
        <a id="download" href="#" style="display: none;">Download Optimized JS</a>
      </form>
  </div><!-- #wrap -->
  <script src="//code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="assets/js/custom.min.js"></script>
  </body>
</html>
