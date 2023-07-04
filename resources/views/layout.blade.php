<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="description" content="Site with information about me and about the study I am following.">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
<div class="topnav">
    <a href="/">Home</a>
    <a href="/profile">Profile</a>
    <a href="/dashboard">Dashboard</a>
    <a href="/blog">Blog</a>
    <a href="/articles">Articles</a>
    <a href="/faqs">FAQ</a>
    <div class="topnav-right">
        <div id="main">
            <div id="mySidenav" class="sidenav">
                <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                <a href="https://www.w3schools.com" target="_blank">W3Schools</a>
                <a href="https://github.com" target="_blank">Github</a>
                <a href="https://www.freecodecamp.org" target="_blank">Free Code Camp</a>
                <a href="https://hz.nl/over-de-hz/regelingen-documenten-1/onderwijs-en-examenregelingen"
                   target="_blank">Course and Examination Regulations</a>
                <a href="https://hz.nl/uploads/documents/Regelingen/OERS/2019-2020/2020-2021-ICT-Implementation-Regulations-CER-HZ-DEF1.0.pdf"
                   target="_blank">Implementation Regulations</a>
                <a href="https://learn.hz.nl/my/" target="_blank">Learn HZ</a>
                <a href="https://teams.microsoft.com/l/team/19%3a827654897ab746089c081f24aff1c984%40thread.skype/conversations?groupId=337e8cca-f67d-4132-9fa9-b0c761bbeb94&tenantId=4c16deb3-342d-4fca-bcd5-b1429308034c"
                   target="_blank">Teams environment link</a>
                <a href="https://apps.hz.nl/angular/studievoortgang/studiestatus" target="_blank">My Study Progress</a>
            </div>
        </div>
        <span style="float:right;margin:5px;font-size:20px;cursor:pointer;color:rgb(48, 156, 81) ;"
              onclick="openNav()">&#9776;
      </span>
    </div>
    <script>
        function openNav() {
            document.getElementById("mySidenav")
                .style.width = "250px";
        }
        function closeNav() {
            document.getElementById("mySidenav")
                .style.width = "0";
        }
    </script>
</div>
@yield('content')
</body>
</html>
