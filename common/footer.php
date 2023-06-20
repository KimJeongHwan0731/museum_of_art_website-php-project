        <div id="footer_content">
          <p id="footer_logo">관리자: 김정환 | <span>KJH ART MUSEUM</span></p>
          <ul id="download">
            <li>서울특별시 성동구 왕십리로 315</li>
            <li>- (행당동) 8층 2호실</li>
            <li>- KJH ART MUSEUM OF KOREA</li>
          </ul>
          <ul id="author">
            <li>문의 주소:</li>
            <li>https://github.com/KimJeongHwan0731</li>
          </ul>
          <div id="fixed">
            <button type="button" id="btnTop" aria-label="상단으로" style="display: block;"></button>
          </div>
        </div>
        <script>
          document.addEventListener("DOMContentLoaded", () => {
            const btnTop = document.querySelector("#btnTop");
            btnTop.addEventListener("click", () => {
              window.scrollTo({
                top: 0,
                behavior: "smooth"
              });
            });
          });
        </script>