<!doctype html>
<html>
<head>
    <script type="text/javascript" src="ajax_1_10_2.js"></script>
    <script>
        function saveEntry()
        {
            var qs = document.getElementById("question").value;
            var ans = document.getElementById("solution").value;
            document.getElementById("saveButton").innerHTML="Saving...";
            document.getElementById("saveButton").disabled="disabled";
            $.post("saveQuestion.php",{qs:qs,so:ans},function(data){
               document.getElementById("question").value="";
               document.getElementById("solution").value="";
               document.getElementById("saveButton").innerHTML="Save";
               document.getElementById("saveButton").removeAttribute("disabled");


            });

            var qss = document.createElement("div");
            var anss = document.createElement("div");
            var item = document.createElement("div");
            qss.innerHTML= qs;
            anss.innerHTML = ans;
            qss.setAttribute("class","question");
            anss.setAttribute("class","answer");

            item.setAttribute("class","item");
            item.appendChild(qss);
            item.appendChild(anss);
            var container = document.getElementById("itemscontainer");
            container.insertBefore(item, container.firstChild);


        }
        </script>
<link rel="stylesheet" href="../style.css">
<title>quizer:Dash</title>
</head>
<body>
    <div class="menu">
<div class="menuOption"><a href="allQuestions.php">Contest</a></div>
    </div>
<div class = "container">
    
<div class="entrypoint">
<span class="Board">Entry Board</span>

<table style=" background-color:silver;">
<tr><td><textarea placeholder="Question here..." id="question"></textarea></td></tr>
<tr><td><textarea placeholder="Solution here..." id="solution"></textarea></td></tr>
<tr><td><button onclick="saveEntry()" id="saveButton">Save</button></td></tr></table>
</div>
<div id="gallery" class="gallery">
<span class="Board">Question Board</span>

<div id="itemscontainer" class="itemscontainer">


</div>
</div>
</div>
</body>
</html>