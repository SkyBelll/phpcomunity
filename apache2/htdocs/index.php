<?php
    session_start();
    ?>
<!DOCTYPE html>
<meta charset="UTF-8">
<html>
<head>
    <title>SkyBell's Blog</title>
    <!-- 1) 초기화하기 -->
    <style>
        * { 
            margin: 0; padding: 0;
            font-family: '맑은 고딕', 'Malgun Gothic', Gothic, sans-serif;
        }
        a { text-decoration: none; }
        li { list-style: none; }
        audio{float:right;}
    </style>
    <!-- 기본 클래스 -->
    <style>
        .pull-left { float: left; }
        .pull-right { float:right; }
    </style>
    <!-- 2. 페이지 구성하기 -->
    <style>
            table {
                table-layout: fixed;
                width : 100%;
                border : 1px solid #444444;
                border-collapse: collapse;
                margin-left: auto;
                margin-right: auto;
            }
            th,td{
                border : 1px solid #444444;
                padding : 10px;
            }
            th{
                text-align: left;
                
            }
            td{
                text-align: center;
            }
            .text:hover{
                text-decoration: underline;
            
        }
        .text {
            text-align: center;
            padding-top: 20px;
            color: #000000
        }
        .board.link {color : #57A0EE; text-decoration:none;}
        .board.hover { text-decoration : underline;}



   </style>
    <style>
        body {
            width: 960px; margin: 0 auto;
            background: #E6E6E6;
        }

        #page-wrapper {
            background: white;
            margin: 40px 0; padding: 10px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 6px rgba(100, 100, 100, 0.3);
           position:relative;
           z-index: 1;
        }
        #page-wrapper::after{
            content:"";
            margin: 40px 0; padding: 10px 20px;
            border-radius: 5px;
            background-size: 30%;
            background-repeat : no-repeat;
            background-attachment : fixed;
            background-position: center;
            opacity : 0.2;
            z-index: -1;
            position:absolute;
            width:100%;
            height:100%;
            top:0;
            left:0;
        }
        @media screen and (max-width: 767px) {

    body { width: auto }
    #main-aside { width: auto; float: none; }
    #main-section { width: auto; float: none; }
    }
    </style>
    <!-- 3. 헤더 구성하기 -->
    <style>
        #main-header { padding: 40px 50px; }
        .master-title { 
            font-size: 30px; 
            color: #181818;
        }
        .master-description {
            font-size: 15px; font-weight: 500;
            color: #383838;
        }
    </style>
    <!-- 4. 네비게이션 및 풀다운 메뉴 구성하기 -->
    <style>
        #main-navigation {
            border-top: 1px solid #C8C8C8;
            border-bottom: 1px solid #C8C8C8;
            margin-bottom: 20px;
            height: 40px;
        }
        
        .outer-menu-item {
            float: left;
            position: relative;
        }
        .outer-menu-item:hover {
            background: black;
            color: white
        }

        .menu-title {
            display: block;
            height: 30px; line-height: 30px;
            text-align: center;
            padding: 5px 20px;
        }

        .inner-menu {
            display: none;
            position: absolute;
            top: 40px; left: 0;
            width: 100%;

            background: white;
            box-shadow: 0 2px 6px rgba(5, 5, 5, 0.9);
            z-index: 1000;

            text-align: center
        }

        .inner-menu-item > a {
            display: block;
            padding: 5px 10px;
            color: black
        }

        .inner-menu-item > a:hover {
            background: black;
            color: white;
        }
    </style>
    <!-- 5. 검색 양식 추가하기(내비게이션 내부 검색) -->
    <style>
        .search-bar {
            height: 26px;
            padding: 7px;
        }
        .input-search {
            display: block;
            float: left;

            background-color: #FFFFFF;
            border: 1px solid #CCCCCC;
            border-radius: 15px 0 0 15px;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);

            width: 120px; height: 24px;
            padding: 0 0 0 10px;
            font-size: 12px;
            color: #555555;
        }

        .input-search:focus {
            border-color: rgba(82, 168, 236, 0.8);
            outline: 0;
            box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
        }

        .input-search-submit {
            display: block;
            float: left;

            width: 50px; height: 26px;
            border-radius: 0 15px 15px 0;
            border: 1px solid #CCCCCC;

            margin-left: -1px;

            vertical-align: top;
            display: inline-block;
        }
    </style>
    <!-- 6. 본문 추가하기(중앙 내용) -->
    <style>
        /* body 태그의 너비: 960픽셀 */
        /* #page-wrapper 태그의 padding 속성으로 내용물 너비는 920픽셀 */
        #content { overflow: hidden; }
        #main-section {
            float: left;
            width: 710px;
        }
        #main-aside {
            float: right;
            width: 200px;
            
        }
    </style>
    <!-- 6. 본문 추가하기(본문 포스트 위쪽(좌측 구성))-->
    <style>
        article { 
            padding: 0 10px 20px 10px;
            border-bottom: 1px solid #C8C8C8;
        }

        .article-header { padding: 20px 0; }
        .article-title { 
            font-size: 25px;
            font-weight: 500; 
            padding-bottom: 10px;
        }
        .article-date { font-size: 13px; }
        .article-body {
            font-size: 14px;
        }
    </style>
    <!-- 6. 본문 추가하기(사이트 메뉴(우측 구성)) -->
    <style>
        .aside-list { padding: 10px 0 30px 0; 
            border : 1px solid black;
       }
        .aside-list > h3 {
            font-size: 15px;
            font-weight: 600;
        }
        .aside-list li a {
            margin-left: 8px;
            font-size: 13px;
            color: #6C6C6C;
            
        }
    </style>
    <script></script>
    <script></script>
</head>
<body>
    <div id="page-wrapper">
        <header id="main-header">
            <hgroup>
                <h1 class="master-title">SkyBell</h1>
                <audio src="asdf.mp3" controls ="controls"></audio>
                <h2 class="master-description"></h2>
              
            </hgroup>
        </header>
        <nav id="main-navigation">
            <div class="pull-left">
                <ul class="outer-menu">
                    <li class="outer-menu-item">
                        <span class="menu-title">HTML5</span>
                        <ul class="inner-menu">
                            <li class="inner-menu-item"><a href="#">HTML5 개요와 활용</a></li>
                            <li class="inner-menu-item"><a href="#">HTML5 응용과 실습</a></li>
                        </ul>
                    </li>
                    <li class="outer-menu-item">
                        <span class="menu-title">CSS3</span>
                        <ul class="inner-menu">
                            <li class="inner-menu-item"><a href="#">CSS속성</a></li>
                            <li class="inner-menu-item"><a href="#">CSS활용</a></li>
                        </ul>
                    </li>
                    <li class="outer-menu-item">
                        <span class="menu-title">JavaScript</span>
                        <ul class="inner-menu">
                            <li class="inner-menu-item"><a href="#">자바스크립트 기본</a></li>
                            <li class="inner-menu-item"><a href="#">자바스크립트 활용</a></li>
                        </ul>
                    </li>
                    <li class="outer-menu-item">
                        <span class="menu-title">자유게시판</span>
                        <ul class="inner-menu">
                            
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="pull-right">
                <div class="search-bar">
                    <form>
                        <input type="text" class="input-search" />
                        <input type="submit" class="input-search-submit" value="검색" />
                    </form>
                </div>
                <div>
                
               
 
   
    
                </div>

            </div>
        </nav>
        <div id="content">
            <section id="main-section">
                <article>
                    <div class="article-header">
                        <h1 class="article-title">자유게시판</h1>
                        
                    </div>
                    <div class="article-body">
                        <?php
                            $currentPage =1;
                            if (isset($_GET["currentPage"])){
                                $currentPage= $_GET["currentPage"];
                            }

                            $conn = mysqli_connect("localhost","root","rr3312bk","webdb",3307);
                            if($conn){
                                echo "연결 성공!";
                            }
                                else{
                                    echo "연결 실패".mysqli_connect_error();
                                }
                            $sqlCount = "SELECT count(*) FROM board";
                            $resultCount = mysqli_query($conn,$sqlCount);
                            if($rowCount = mysqli_fetch_array($resultCount)){
                                $totalRowNum = $rowCount["count(*)"];
                            }
                            
                            
 
                if(isset($_SESSION['userid'])) {
                        echo $_SESSION['userid'];?>님 안녕하세요
                        <button onclick="location.href='./logout_action.php'" style="float:right; font-size:15.5px;">로그아웃</button>
                        <br/>
        <?php
                }
                else {
        ?>              <button onclick="location.href='./login.php'">로그인</button>
                        <br />
        <?php   }
    

                            if($resultCount){
                                echo "총 게시물 개수 : ".$totalRowNum."<br>";
                            } else {
                                echo "결과 없음".mysqli_error($conn);
                            }

                            $rowPerPage = 10;
                            $begin = ($currentPage -1) * $rowPerPage;
                            $sql = "SELECT number, title, content, id, password, date, views, good, bad FROM board order by number desc limit ".$begin.",".$rowPerPage."";
                            $result = mysqli_query($conn,$sql);
                            if($result){
                                echo "조회 성공";
                            } else{
                                echo "결과 없음".mysqli_error($conn);
                            }

                        ?>
                        <table class = "board" >
                            <tr>
                                <td width = "30">num</td>
                                <td width = "300">제목</td>
                                <td width = "60">작성자</td>
                                <td width = "120">작성 날짜</td>
                                <td width = "30">조회수</td>
                            </tr>
                            <?php
                                while($row = mysqli_fetch_array($result)){
                             ?>
                                    <tr>
                                        <td>
                                            <?php
                                                echo $row["number"];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo "<a href='/read.php?number=".$row["number"]."'>";
                                                echo $row["title"];
                                                echo "</a>";
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row["id"];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row["date"];
                                            ?>
                                        </td>
                                        <td>
                                            <?php
                                                echo $row["views"];
                                            ?>
                                        </td>
                                </tr>
                                <?php
                                }
                                ?>
                        </table>

                        <?php
            if($currentPage > 1 ) {
                echo "<a class='btn btn-primary' href ='/index.php?currentPage=".($currentPage-1)."'>이전</a>&nbsp;&nbsp;&nbsp;&nbsp;";
            }
 
            $lastPage = ($totalRowNum-1) / $rowPerPage;
 
            if (($totalRowNum-1) % $rowPerPage !=0) { 
                $lastPage += 1;
            }

            if($currentPage < $lastPage) { 
                echo "<a class='btn btn-primary' href='/index.php?currentPage=".($currentPage+1)."'>다음</a>";
            }
            mysqli_close($conn);
        ?>
                        <div class=text>
        <font style="cursor: hand" onClick="location.href='./write.php'">글쓰기</font>
                          </div>
                      
                </article>
                <article>
                    <div class="article-header">
                        <h1 class="article-title">CSS 속성</h1>
                        
                    </div>
                    <div class="article-body">
                       
                    </div>
                </article>
            </section>
            <aside id="main-aside">
               
            </aside>
        </div>
        
    </div>
</body>
</html>