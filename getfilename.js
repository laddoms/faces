<html>
<script>
// Any filepath, even inverted slash
// var filepath = "\\myfilepath\\extensions\\filename.png";
var filepath = "/images/readersimages/dog.jpg";

// Use the regular expression to replace the non-matching content with a blank space
var filenameWithExtension = filepath.replace(/^.*[\\\/]/, '');

// outputs filename.png
console.log(filenameWithExtension);
</script>
</html>