<!DOCTYPE html>
<html>
<body>

<h2>Return Biodata</h2>

<p id="demo"></p>

<script>
var text = '{"name":"Bagus Prakoso","address":"Palembang","hobbies":"Membaca","Is_Married":"False","school":"Universitas Sriwijaya"}';
var hobbies = '{"Sepak Bola","Badminton","Membaca"}';

var obj = JSON.parse(text);

document.getElementById("demo").innerHTML =
obj.name + "<br>" +
obj.address + "<br>" +
obj.hobbies + "<br>" +
obj.Is_Married + "<br>" +
obj.school;
</script>

</body>
</html>