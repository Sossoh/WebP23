<h1> 웹 프로그래밍 수업 내용을 통해 간단한 웹페이지 생성하기</h1>
<br>
그림은 직접 그림
<br>

<img width="723" alt="몸" src="https://github.com/Sossoh/WebP23/assets/128332587/ce40caec-044e-485c-8027-7009a27e9a9c">
<br>
첫 화면
<br>
<img width="631" alt="dssda" src="https://github.com/Sossoh/WebP23/assets/128332587/8ff9795c-beed-49b8-85b0-2a78345c4b5b">
<br>
나중에 시간날때 색상조절 버튼도 만들어 봐야겠다 !

<br>

일단 이렇게 하고싶으면,파츠들과 기본 몸의 이미지 사이즈가 같아야 편하다 ( 같지 않으면 계속 조정해줘야 하는걸로 안다.. ㅜㅜ)
<br>
/**<br>
 * 눈의 표시 여부를 변경하는 함수입니다.<br>
 * @param {string} eyeId - 변경하고자 하는 눈의 요소 ID<br>
 */<br>
function changeEye(eyeId) {<br>
    // 모든 눈 요소를 선택합니다.<br>
    const allEyes = document.querySelectorAll('.eye');<br>
<br>
    // 모든 눈을 숨깁니다.<br>
    allEyes.forEach(eye => {<br>
        eye.style.display = 'none';<br>
    });<br>
<br>
    // 선택한 눈의 요소를 가져옵니다.<br>
    const selectedEye = document.getElementById(eyeId);<br>
<br>
    // 선택한 눈을 보이도록 설정합니다.<br>
    selectedEye.style.display = 'block';<br>
}<br>
style.display = 'block';<br>
}<br>
함수 주석 달면 이렇다 !!<br>
<br>
조금 번거롭지만 burron-group을 만들어 주는 게 좋다 (기본적으로 button 요소의 속성은 '세로정렬' 이다. 버튼은 일반적으로 텍스트나 다른 인라인 요소와 수직으로 정렬된다... 하지만 나는 좀 그걸 조정(???) 하는 게 번거로워서 그냥 따로 다시 요소 만들어ㅓ서 했다.. 편안..^^)
<br>
버튼 끝을 동그랗게 하는건 border-radius: 5px;  이거다.
