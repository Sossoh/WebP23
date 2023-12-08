1. span_elvis.html
-Love Me Tender 위에 마우스를 올리면 엘비스 사진이 나타난다. #<span onmouseover="show()" onmouseout="hide()"><span>을 사용했다.

2. font_violet.html
- css , head 사이에 style 을 만들어, color : violet;

3. s_overing.html
- 슈렉에 마우스를 올리면 슈렉 이미지가 나타난다
function show() { 
                document.getElementById("fig").src="shrek.png"; }
        function hide(){
            document.getElementById("fig").src="";}

  head 안에 script 를 , body 안에서 함수 호출을 잊지 말도록 하자.
